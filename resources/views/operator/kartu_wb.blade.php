<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Warga Belajar PKBM Harapan Bangsa</title>
</head>
<body>

<div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 0.5rem; width: fit;">

    @foreach($siswa as $data)

    <div style="position:relative; width: 323.52755906px; height: 203.71653543px; border: 1px solid black; border-radius: 0.5rem; ">
        <img src="/img/front.png" alt="" style="width: 323.52755906px; height: 203.71653543px; position: absolute; top: 0; left:0; border: 1px solid black; border-radius: 0.5rem; z-index: -10;">
        <strong>
            <p style="text-align: center; margin-top: 90px;">
                {{ $data->nama }}
            </p>
        </strong>
        <p style="text-align: center;">
            Kelas {{ $data->angkatan }}
        </p>
        <p style="text-align: center; padding-left: 0.75rem; padding-right: 0.75rem;">
            {{ $data->alamat }}
        </p>
    </div>

    <div style="position:relative; width: 323.52755906px; height: 203.71653543px; border: 1px solid black; border-radius: 0.5rem; ">
        <img src="/img/back.png" alt="" style="width: 323.52755906px; height: 203.71653543px; position: absolute; top: 0; left:0; border: 1px solid black; border-radius: 0.5rem; z-index: -10;">
        <img src="/Qr/{{ $data->qr }}" alt="" style="width: 323.52755906px; height: 145px; position: absolute; top:50%; z-index: 10; transform: translateY(-50%);">
    </div>

    @endforeach

</div>
    
</body>
</html>