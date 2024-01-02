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

        $jan = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-1-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-1-$year")->endOfDay()]);
        $feb = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-2-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-2-$year")->endOfDay()]);
        $mar = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-3-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-3-$year")->endOfDay()]);
        $apr = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-4-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-4-$year")->endOfDay()]);
        $mei = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-5-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-5-$year")->endOfDay()]);
        $jun = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-6-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-6-$year")->endOfDay()]);
        $jul = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-7-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-7-$year")->endOfDay()]);
        $agu = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-8-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-8-$year")->endOfDay()]);
        $sep = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-9-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-9-$year")->endOfDay()]);
        $okt = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-10-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-10-$year")->endOfDay()]);
        $nov = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-11-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-11-$year")->endOfDay()]);
        $des = $absen->whereBetween('tanggal', [Carbon::createFromFormat('d-m-Y', "1-12-$year")->startOfDay(), Carbon::createFromFormat('d-m-Y', "31-12-$year")->endOfDay()]);
        
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

        $validation = Absen::where('user_id', $userId)->where('tanggal', $tanggal)->get();
        $validation2 = Absen::where('user_id', $userId)->where('tanggal', $tanggal)->where('waktu', $waktu)->get();
        $validation3 = Absen::where('tanggal', $tanggal)->where('waktu', $waktu)->where('kelas', $kelas)->get();

        if ($validation->count() >= 3){
            return redirect()->back()->with('message', "Tidak Dapat Absen Lebih dari 3 Kali dalam Hari Yang Sama, Anda mencoba menginputkan absen pada tanggal $tanggal, absen anda sudah terhitung 3 JPL pada tanggal tersebut");
        }

        if ($validation2->count() > 0){
            return redirect()->back()->with('message', "Tidak Dapat Absen Pada Jam yang Sama! Anda Sudah Absen di Jam $waktu untuk absen pada tanggal $tanggal");
        }

        if($validation3->count() > 0){
            $attempOn = $validation3->first()->user_id;
            $nama = User::find($attempOn)->name;
            return redirect()->back()->with('message', "Error, Anda mencoba absen mengajar kelas $kelas, namun kelas tersebut sudah diajar oleh $nama Pada waktu yang sama ($tanggal, $waktu)");
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
