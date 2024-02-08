<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kehadiransiswa;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class ApiTwoController extends Controller
{
    public function kehadiran_today(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        
        $currentDate = date('Y-m-d');
        if ($request->input('tanggal')) {
            $currentDate = $request->input('tanggal');
        }

        
        $siswa = Kehadiransiswa::where('tanggal', $currentDate)->get();

        $bulan = date('m');
        $tahun = date('Y');
        
        if ($request->input('bulan')) {
            $bulan = $request->input('bulan');
        }


        $jumlahTanggal = DB::table('kehadiransiswas')
            ->select(DB::raw('DATE_FORMAT(tanggal, "%Y-%m-%d") as tanggal'), DB::raw('count(*) as jumlah'))
            ->whereRaw('MONTH(tanggal) = ?', [$bulan])
            ->groupBy('tanggal')
            ->get();

        if ($request->input('pdf')) {
            return view('operator.absen_pdf', compact('siswa', 'currentDate'));
        }




        $ranking = Siswa::withCount(['kehadiran' => function ($query) use ($bulan, $tahun) {
            $query->whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun);
        }])
        ->orderByDesc('kehadiran_count')->take(5)->get();
    


        return view('operator.kehadiransiswa', compact('siswa', 'jumlahTanggal', 'bulan', 'currentDate', 'ranking'));
    }


    public function kehadiran_peringkat($id, $peringkat, $bulan){
        $siswa = Siswa::find($id);
        $bulan = strftime("%B", mktime(0, 0, 0, $bulan, 1));
        return view('operator.peringkat', compact('siswa', 'peringkat', 'bulan'));
    }

    



    // Controller

public function list_siswa(Request $request)
{
    $siswa = Siswa::all();

    if ($request->input('nama')) {
        $siswa = Siswa::where('nama', 'like', '%' . $request->input('nama') . '%')->get();
    }

    if ($request->wantsJson()) {
        return response()->json($siswa);
    }

    return view('operator.list_siswa', compact('siswa'));
}


    public function detail_kehadiran(Request $request, $id){

        date_default_timezone_set('Asia/Jakarta');
        
        $bulan = date('m');
        $tahun = date('Y');

        if ($request->input("bulan")) {
            $bulan = $request->input("bulan");
        }
        if ($request->input("tahun")) {
            $tahun = $request->input("tahun");
        }

        $data = Kehadiransiswa::where('siswa_id', $id)
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->get();

        $siswa = Siswa::find($id);
        $nama_siswa = $siswa->nama;
        return view('operator.detail_kehadiran', compact('data', 'nama_siswa'));
    }

    public function detail_qr($id){
        $siswa = Siswa::where('id', $id)->get();

        $from = [255, 0, 0];
        $to = [0, 0, 255];

        foreach ($siswa as $key) {
            if ($key->qr == null) {
                $data = QrCode::size(512)->generate($key->id."-".$key->username);
        
                $filename = $key->id."_".$key->username.".svg";
        
                file_put_contents("Qr/".$filename, $data);
                $key->qr = $filename;
                $key->save();
            }
        }

        return view('operator.kartu_wb', compact('siswa'));
    }



    


    //API
    public function absen_today_api(Request $request){
        if ($request->user()) {
            date_default_timezone_set('Asia/Jakarta');
            $currentDate = date('Y-m-d');
            $siswa = Kehadiransiswa::where('tanggal', $currentDate)->get();
            return response()->json($siswa,200);
        }
    }
}
