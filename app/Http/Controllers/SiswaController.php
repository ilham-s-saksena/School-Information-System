<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kehadiransiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $siswa->angkatan = $request->input('TA');
        $siswa->alamat = $request->input('alamat');
        $siswa->username = $username;
        $siswa->password = $password;
        
        $siswa->save();

        return back()->with('message', "Data Siswa $request->nama Berhasil Ditambahkan");
    }

    public function QrCreate()
    {
        $from = [255, 0, 0];
        $to = [0, 0, 255];

        $siswa = Siswa::all();

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
