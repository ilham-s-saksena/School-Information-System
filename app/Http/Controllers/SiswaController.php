<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tambah_siswa(Request $request)
    {
        $username = '@' . strtolower(str_replace(' ', '', $request->input('nama')));
        $password = Hash::make("12345");

        $siswa = new Siswa();
        $siswa->nama = $request->input('nama');
        $siswa->WA = $request->input('WA');
        $siswa->tahun_masuk = $request->input('TA');
        $siswa->alamat = $request->input('alamat');
        $siswa->username = $username;
        $siswa->password = $password;
        
        $siswa->save();

        return back()->with('message', "Data Siswa $request->nama Berhasil Ditambahkan");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
