<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Absensi Siswa | PKBM Harapan Bangsa - {{ $currentDate }}</title>
</head>
<body>
<img src="/asset/logo.png" alt="" style="width: 100px; position: absolute; left: 50px;">

<h3 align="center">Data Absensi Warga Belajar</h3>
<h4 align="center">Tanggal {{$currentDate}}</h4>
<h2 align="center">PKBM Harapan Bangsa</h2>
    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jam Absen</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        @php 
        $i = 1;
        @endphp
        <tbody>
            @foreach($siswa as $data)
            <tr>
                <td align="center">{{ $i++ }}</td>
                <td >{{ $data->siswa->nama }}</td>
                <td align="center">{{ $data->waktu }}</td>
                <td>{{ $data->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">Total Siswa</th>
                <th colspan="2">{{ $siswa->count() }} Siswa</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>