<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class HomeController extends Controller
{

    public function index()
    {
        $userId = auth()->user()->id;

        $absenUser = Absen::where('user_id', $userId)->orderBy('tanggal', 'DESC')->limit(5)->get();

        $bulan = Carbon::now()->format('m-Y');
        $awalBulan = "1-$bulan";
        $akhirBulan = "31-$bulan";

        $tanggalAwal = Carbon::createFromFormat('d-m-Y', $awalBulan)->startOfDay();
        $tanggalAkhir = Carbon::createFromFormat('d-m-Y', $akhirBulan)->endOfDay();

        $absenBulanIni = Absen::where('user_id', $userId)->whereBetween('tanggal', [$tanggalAwal, $tanggalAkhir])->get();
        
        $bulanLalu = Carbon::now()->format('m');
        $bulanLalu2 = $bulanLalu-1;

        $year = Carbon::now()->format('Y');
        $awalBulanLalu = "1-$bulanLalu2-$year";
        $akhirBulanLalu = "31-$bulanLalu2-$year";

        $tanggalAwalLalu = Carbon::createFromFormat('d-m-Y', $awalBulanLalu)->startOfDay();
        $tanggalAkhirLalu = Carbon::createFromFormat('d-m-Y', $akhirBulanLalu)->endOfDay();

        $absenBulanLalu = Absen::where('user_id', $userId)->whereBetween('tanggal', [$tanggalAwalLalu, $tanggalAkhirLalu])->get();

        $hari = Carbon::now()->format('Y-m-d');
        $absenHariIni = Absen::where('user_id', $userId)->where('tanggal', $hari)->get();
        
        return view('dashboard', compact('absenBulanIni', 'absenHariIni', 'absenBulanLalu', 'absenUser'));
    }

    public function admin_index(Request $request){
        $year = $request->input('tahun', Carbon::now()->format('Y'));
        $months = $request->input('bulan', []);

        if (empty($year)) {
            $year = Carbon::now()->format('Y');
        }
    
        if (empty($months)) {
            $months = [Carbon::now()->format('m')];
        }
    

        $userQuery = User::where('role', 0);

        if (!empty($months)) {
            $absensiQuery = [];
            
            foreach ($months as $month) {
                $startOfMonth = Carbon::createFromFormat('Y-m', "$year-$month")->startOfMonth();
                $endOfMonth = $startOfMonth->copy()->endOfMonth();

                $absensiQuery[] = function ($query) use ($startOfMonth, $endOfMonth){
                    $query->whereBetween('tanggal', [$startOfMonth, $endOfMonth]);
                };
            }

            $userQuery->with(['absensi' => function ($query) use ($absensiQuery) {
                $query->where(function ($query) use ($absensiQuery) {
                    foreach ($absensiQuery as $queryBuilder) {
                        $query->orWhere($queryBuilder);
                    }
                });
            }]);
        } else {
            $userQuery->with('absensi');
        }

        $user = $userQuery->get();

        return view('admin.dashboard', compact('user', 'year', 'months'));
    }

    public function tutor_list() {
        $user = User::where('role', 0)->get();
        return view('admin.tutor_list', compact('user'));
    }

    public function tutor_update(Request $request){
        $user = User::find($request->input('id'));
        $user->index = $request->input('index');
        $user->save();
        return back()->with('message', 'Data Index JPL Berhasil Diubah!');
    }



    public function op_index(Request $request){
        $siswa = Siswa::all();
        $nama = $request->input('siswa');

        if(!empty($siswa)){
            $siswa = Siswa::where('nama', 'like', '%' . $nama . '%')->get(); 
        }
        
        return view('operator.dashboard', compact('siswa'));
    }

    public function foto(Request $request){
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Sesuaikan dengan kebutuhan Anda
        ]);

        // Dapatkan user ID dan nama file
        $userId = auth()->user()->id;
        $username = auth()->user()->name;
        $fileName = $userId . '-' . $request->file('foto')->getClientOriginalName();

        // Ubah format nama file sesuai dengan yang Anda inginkan
        $date = Carbon::now()->format('Ymd_His');
        $newFileName = "{$userId}-{$username}-{$date}.jpg";

        // Pindahkan file ke direktori public/img/ dengan nama yang baru
        $request->file('foto')->move(public_path('img'), $newFileName);

        $U = User::find($userId);

        if ($U->foto !== "default.jpg") {
            unlink(public_path('img/').$U->foto);
        }

        $U->foto = $newFileName;
        $U->save();


        return back();
    }



}