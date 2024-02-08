<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peringkat Kehadiran Siswa PKBM Harbang</title>
</head>
<body>
    <div style="position: relative; width:26cm;">
        <img src="/img/sertifikat.png" style="width:26cm" alt="">
        <div style="position:absolute; top:14%; left:34%;">PKBM-HB/01/0{{$peringkat}}</div>
        <div style="position:absolute; left:30%; bottom:45%; font-size:50px; font-weight: 900;">{{$siswa->nama}}</div>
        <div style="position:absolute; left:18%; top:60%; font-size:16px; font-weight: 900;">
            Sebagai Peringkat Ke-{{$peringkat}} Kehadiran Siswa Bulan {{$bulan}}
        </div>
    </div>
</body>
</html>