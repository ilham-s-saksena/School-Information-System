<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Siswa;
use App\Models\Absen;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    
    public function index()
    {
        //
    }


    public function create_materi(Request $request)
    {
        if ($request->user()) {

            
        $materi = new Materi();
        $materi->user_id = $request->user()->id;
        $materi->keterangan = $request->input('keterangan');
        $materi->kelas = $request->input('kelas');

        $file_materi = $request->file('file');

        $fileName = $request->user()->id . '-' . now() . '-'. $file_materi->getClientOriginalName();
        $file_materi->move( public_path('materi', $fileName));
        $materi->file = $fileName;
        
        $materi->save();
        return response()->json(["message" => "Materi Berhasil di Upload"], 201);
        }
    }

    public function read_materi(Request $request)
    {
        if ($request->user()) {

            
        $materi = Materi::where('user_id', $request->user()->id)->get();
        return response()->json($materi, 201);
        }
    }

    
    public function naik_kelas(Request $request)
    {
        
        $kelas = Siswa::distinct()->pluck('angkatan');
        $filter = $request->input('filter');
        if ($filter) {
            $siswa = Siswa::where('angkatan', $filter)->get();
        } else {
            $siswa = Siswa::all();
            $filter = 0;
        }
        return view('operator.naik_kelas', compact('siswa', 'kelas', 'filter'));
    }

    
    public function form_naik_kelas(Request $request)
    {
        foreach ($request->input('aksi') as $siswaId => $aksi) {
            $update = Siswa::find($siswaId);
            $update->angkatan = $aksi; 
            $update->save();
            
        }
        return back()->with('message', 'Data Kenaikan/Kelulusan SIswa berhasil di Update');
    }


    public function admin_jurnal(Request $request) {
        $bulan = 0;
        $jurnal = 0;
        $tahun = date('Y');
        $kelas = Siswa::distinct()->pluck('angkatan');

        $filter = $request->input('filter');
        if ($filter) {
            if ($request->input('bulan')) {
                $bulan = $request->input('bulan');
                $jurnal = Absen::where('kelas', $filter)
                            ->whereMonth('tanggal', $bulan)
                            ->whereYear('tanggal', $tahun)
                            ->get();
            } else {
                $jurnal = Absen::where('kelas', $filter)->get();
            }
        } else {
            $filter = 0;
        }
        return view('admin.jurnal', compact('kelas', 'filter', 'jurnal', 'bulan', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
