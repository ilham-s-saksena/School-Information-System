<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Honor Tutor PKBM Harapan Bangsa</title>
</head>
<body>
    <div style="display:flex; text-align:center; width: 100%; justify-content: center; align-items:center; margin-bottom:50px;">
        <img src="/img/logo.png" alt="" style="width:100px; height: 100px;  margin-right:50px;">
        <div>
            <h2>Rekap JPL Tutor PKBM Harapan Bangsa</h2>
            <h3>Bulan @foreach($months as $bulan) {{ $bulan }},  @endforeach Tahun {{ $year }}</h3>
            <h3></h3>
        </div>
    </div>
@php 
$total = 0;
$in = 0;
@endphp
    <table border="1" style="width:100%; ">
        <thead>
            <tr style="">
                <th>No</th>
                <th>Nama</th>
                <th>JPL</th>
                <th>Jumlah</th>
                <th>TTD</th>
            </tr>
        </thead>
        <tbody>
        @foreach($user as $users)
            <tr>
                <td style="text-align:center;" >{{ ++$in }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->absensi->count() }} JPL</td>
                <td>
                  @php 
                  $total += $users->absensi->count() * $users->index;
                  @endphp
                  Rp. {{ number_format($users->absensi->count() * $users->index) }}
                </td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align:center;">
                    <strong>
                        Jumlah Total
                    </strong>
                </td>
                <td style="text-align:center;" colspan="2">
                    <strong>
                        Rp. <span class="">{{ number_format($total) }}</span>
                    </strong>
                </td>
            </tr>
        </tfoot>
    </table>

    <div style="width: 100%; text-align:right;">
        <p style="margin-bottom:0px; margin-top:50px;">Mengetahui</p>
        <p style="margin-top:0px;">Ketua PKBM Harapan Bangsa</p>
        <strong>
            <p style="margin-top:100px;">Sumarsih Ely Wahyuni S.Pd. AUD</p>
        </strong>
    </div>
</body>
</html>