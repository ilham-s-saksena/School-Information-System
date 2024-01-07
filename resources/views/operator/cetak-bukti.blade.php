<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKBM Harapan Bangsa | Cetak Bukti Pembayaran SPP</title>
</head>
<body>
    
<div style="width: 100vw; ">
    <div style="display: flex; align-items: center; justify-content: center;">
        <img src="/favicon.png" alt="" style="width: 80px; height: 80px; margin-right: 20px;">
        
        <div align="center">
            <h3>
            <span style="font-size: 26px; text-decoration-line: underline;">
                Kwitansi Pembayaran SPP
            </span>
            <br>
                <span>
                    PUSAT KEGIATAN BELAJAR MASYARAKAT (PKBM)
                </span>
                <br>
                <span>
                    HARAPAN BANGSA
                </span>
            </h3>
        </div>
    </div>

    <div style=" width: 100%; border: 1px solid #000000"></div>
    <br>
    <br>
    <div>
        Nomor : spp_id-001
    </div>
    <br>
    
    <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr));">
        <div>
            Telah diterima dari
        </div>
        <div>
            : {{ $an }}
        </div>
        <div></div>

        <div>
            Uang Sebesar
        </div>
        <div  style="background-color: rgb(229 231 235);">
            : Rp. {{ number_format($bukti->rp) }}
        </div>
        <div></div>

        <div>
            Untuk Pembayaran
        </div>
        <div>
            : {{ $bukti->keterangan }}
        </div>
        <div></div>

        <div></div>
        <div></div>
        <div style="text-align: right;">
            <br>
            <span>Kalibagor, {{ $bukti->tanggal }}</span>
        </div>

    </div>



    <div>

    </div>


    <br>
    <br>
    <div style="width: 100%; text-align: center;">
        <span>Penerima</span>
        <br>
        <span>Bendahara PKBM Harapan Bangsa</span>
        <br><br><br><br><br><br>

        <span>{{ Auth::user()->name }}</span>

    </div>


</div>

</body>
</html>