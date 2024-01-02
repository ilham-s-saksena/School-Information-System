<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Income;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tambah_pembayaran(Request $request)
    {
        $id = $request->input('id');
        $bayar = new Pembayaran();
        $bayar->siswa_id = $id;
        $bayar->jenis = $request->input('jenis');
        $bayar->tanggungan = $request->input('tanggungan');
        $bayar->kelas = $request->input('kelas');
        $bayar->save();
        return back()->with('message', 'Data Pembayaran Sukses Dibuat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function bayar($id)
    {
        $bayar = Pembayaran::find($id);
        $riwayat = Income::where('pembayaran_id', $id)->get();
        return view('operator.spp', compact('bayar', 'riwayat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bayar_spp(Request $request, $id)
    {
        $data = Pembayaran::find($id);
        $payments = number_format($request->input('bayar'));


        $rekam = new Income();
        $rekam->pembayaran_id = $id;
        $rekam->tanggal = Carbon::now()->format('Y-m-d');
        $rekam->keterangan = "Bayar SPP A.N ".$data->siswas->nama.", Bulan : ".$request->input('bulan').", Rp".$payments;
        $rekam->rp = $request->input('bayar');
        $rekam->save();

        $bulan = $request->input('bulan');
        $bayar = $request->input('bayar');
        
        
        $pay = $data->$bulan + $bayar;
            if ($pay < $data->tanggungan) {
                $data->$bulan = $pay;
                $data->save();
            } else {
                $forI = floor($pay / $data->tanggungan);
                for ($i=0; $i < $forI; $i++) {
                    $data->$bulan = $data->tanggungan;
                    $pay = $pay - $data->tanggungan;
                    $bulan = $data->getNextColumnName($bulan);
                    $data->save();
                }
                if($pay !== 0){
                    $data->$bulan = $pay;
                    $data->save();
                }
            }    
        
        $data->save(); 
       
        return back()->with('message', 'Pembayaran Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
