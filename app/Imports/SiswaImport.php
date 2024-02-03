<?php

namespace App\Imports;

use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    public function model(array $row)
    {
        return new Siswa([
            'nama'  => $row['nama'],
            'email' => $row['alamat'],
            'wa' => $row['wa'],
            'angkatan' => $row['angkatan'],
            'username' => $row['username'],
            'password' => Hash::make($row['password']),
        ]);
    }
}