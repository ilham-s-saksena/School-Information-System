<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $year = Carbon::now()->format('Y');

        if($request->input('year')){
            $year = $request->input('year');
        }

        $absen = Absen::where('user_id', $userId)->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-1-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-12-$year")->endOfDay()])->get();

        $jan = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-1-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-1-$year")->endOfDay()]);
        $feb = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-2-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "29-2-$year")->endOfDay()]);
        $mar = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-3-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-3-$year")->endOfDay()]);
        $apr = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-4-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "30-4-$year")->endOfDay()]);
        $mei = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-5-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-5-$year")->endOfDay()]);
        $jun = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-6-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "30-6-$year")->endOfDay()]);
        $jul = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-7-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-7-$year")->endOfDay()]);
        $agu = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-8-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-8-$year")->endOfDay()]);
        $sep = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-9-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "30-9-$year")->endOfDay()]);
        $okt = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-10-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-10-$year")->endOfDay()]);
        $nov = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-11-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "30-11-$year")->endOfDay()]);
        $des = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "0-12-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-12-$year")->endOfDay()]);
        
        return view('absen.index', compact('jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des', 'year'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $userId = auth()->user()->id;
        $tanggal = $request->input('tgl');
        $waktu = $request->input('jam');
        $kelas = $request->input('kelas');

        $hari = Carbon::createFromFormat('Y-m-d', $tanggal)->format('l');

        
        $validation = Absen::where('user_id', $userId)->where('tanggal', $tanggal)->get();
        $validation2 = Absen::where('user_id', $userId)->where('tanggal', $tanggal)->where('waktu', $waktu)->get();
        $validation3 = Absen::where('tanggal', $tanggal)->where('waktu', $waktu)->where('kelas', $kelas)->get();
        
        //Validation Lvl-0
        if($hari !== "Friday" && $hari !== "Saturday" && $hari !== "Sunday"){
            return redirect()->back()->with('message', "Anda Tidak Dapat input Absen Mengajar pada Hari '-$hari-', Hari tersebut bukanlah hari yang dijadwalkan untuk mengajar!");
        }
        //Validation Lvl-1
        if ($validation->count() >= 3){
            return redirect()->back()->with('message', "Tidak Dapat Absen Lebih dari 3 Kali dalam Hari Yang Sama, Anda mencoba menginputkan absen pada tanggal $tanggal, absen anda sudah terhitung 3 JPL pada tanggal tersebut");
        }
        //Validation Lvl-2
        if ($validation2->count() > 0){
            return redirect()->back()->with('message', "Tidak Dapat Absen Pada Jam yang Sama! Anda Sudah Absen di Jam $waktu untuk absen pada tanggal $tanggal");
        }
        //Validation Lvl-3
        if($validation3->count() > 0){
            $attempOn = $validation3->first()->user_id;
            $nama = User::find($attempOn)->name;
            return redirect()->back()->with('message', "Error, Anda mencoba absen mengajar kelas $kelas, namun kelas tersebut sudah diajar oleh $nama Pada waktu yang sama ($tanggal, $waktu)");
        }
        //Validation Lvl-4
        $tanggalHariIni = new \DateTime($tanggal);
        $namaHari = date('w', strtotime($tanggal));
        if($namaHari == 0){ // Jika Minggu
            $minggu = $tanggalHariIni->sub(new \DateInterval("P0D"))->format('Y-m-d');
            $sabtu = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
            $jumat = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
        } elseif ($namaHari == 5) { // Jika Jumat
            $jumat = $tanggalHariIni->sub(new \DateInterval("P0D"))->format('Y-m-d');
            $sabtu = $tanggalHariIni->add(new \DateInterval("P1D"))->format('Y-m-d');
            $minggu = $tanggalHariIni->add(new \DateInterval("P1D"))->format('Y-m-d');
        } elseif ($namaHari == 6) { // Jika Sabtu
            $minggu = $tanggalHariIni->add(new \DateInterval("P1D"))->format('Y-m-d');
            $sabtu = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
            $jumat = $tanggalHariIni->sub(new \DateInterval("P1D"))->format('Y-m-d');
        }

        //Sub Validations
        $subValidation4_jumat = Absen::where('user_id', $userId)->where('tanggal', $jumat)->get()->count();
        $subValidation4_sabtu = Absen::where('user_id', $userId)->where('tanggal', $sabtu)->get()->count();
        $subValidation4_minggu = Absen::where('user_id', $userId)->where('tanggal', $minggu)->get()->count();

        if ($subValidation4_jumat+$subValidation4_sabtu+$subValidation4_minggu >= 6){
            return redirect()->back()->with('message', "Tidak Dapat Absen Lebih dari 6 Kali dalam Satu Minggu!,Anda sudah absen $subValidation4_jumat Kali pada Hari Jumat, $jumat; $subValidation4_sabtu Kali pada Hari Sabtu, $sabtu; dan $subValidation4_minggu Kali pada Hari Minggu, $minggu;");
        }


        //Validation Lvl-5
        $tanggalPadaHariIni = new \DateTime();
        $tanggalDiberikan = new \DateTime($tanggal);
        if ($tanggalDiberikan > $tanggalPadaHariIni) {
            $tanggalPadaHariIniStr = $tanggalPadaHariIni->format('d-m-Y');
            $tanggalDiberikanStr = $tanggalDiberikan->format('d-m-Y');
            return redirect()->back()->with('message', "Lhoooo, sekarang baru tanggal $tanggalPadaHariIniStr, anda mencoba absen untuk tanggal yang belum dilalui : $tanggalDiberikanStr");
        }


        $absensi = new Absen();
        
        $absensi->user_id = $userId;
        $absensi->tanggal = $request->input('tgl');
        $absensi->mapel = $request->input('mapel');
        $absensi->materi = $request->input('materi');
        $absensi->kelas = $request->input('kelas');
        $absensi->waktu = $request->input('jam');
        $absensi->save();

        return back()->with('success', "Input Absen Success!");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $absen = Absen::find($id);
        $absen=$absen->delete();
        return back()->with('message', 'Data Berhasil di Hapus!');
    }
}
