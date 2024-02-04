<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Carbon\Carbon;


class QRScannerController extends Controller
{
    public function showAbsentQr(Request $request){
        // $data = Siswa::find($request->input('idSiswa'));
        $data = Siswa::find(1);

        $siswa = $data->kehadiran;

        date_default_timezone_set('Asia/Jakarta');
        $bulan = $request->input('bulan');
        if ($bulan) {
            $nilaiBulan = \Carbon\Carbon::createFromFormat('n', $bulan)->startOfMonth();
        } else {
            $nilaiBulan = now();
        }

        $bulan = $nilaiBulan->format('n');

        $nama_siswa = $data->nama;

        return view('qr-scanner', compact('siswa', 'bulan', 'nama_siswa'));
    }
}
