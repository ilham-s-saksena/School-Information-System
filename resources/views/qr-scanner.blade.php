<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        
    
        .highlight {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
 

@php
    
    

    // Menentukan bulan dan tahun yang akan ditampilkan
    $month = $bulan;
    $year = 2024;

    // Menghitung jumlah hari dalam bulan tersebut
    $lastDayOfMonth = \Carbon\Carbon::createFromDate($year, $month, 1)->endOfMonth()->day;
    
    // Mengubah data $siswa ke dalam bentuk array yang berisi tanggal-tanggal
    $siswaDates = $siswa->pluck('tanggal')->toArray();
@endphp
<form id="form_bulan" method="post" action="" class="w-full max-w-sm px-2 py-1 mx-auto border rounded border-black mt-5">
    @csrf
    <div class="font-bold text-gray-700" >Kehadiran Siswa : {{ $nama_siswa }}</div>
    <select id="select_bulan" name="bulan" class="bg-gray-50 border mt-3 mb-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option {{ $bulan == 1 ? 'selected' : '' }} value="1">Januari</option>
        <option {{ $bulan == 2 ? 'selected' : '' }} value="2">Februari</option>
        <option {{ $bulan == 3 ? 'selected' : '' }} value="3">Maret</option>
        <option {{ $bulan == 4 ? 'selected' : '' }} value="4">April</option>
        <option {{ $bulan == 5 ? 'selected' : '' }} value="5">Mei</option>
        <option {{ $bulan == 6 ? 'selected' : '' }} value="6">Juni</option>
        <option {{ $bulan == 7 ? 'selected' : '' }} value="7">Juli</option>
        <option {{ $bulan == 8 ? 'selected' : '' }} value="8">Agustus</option>
        <option {{ $bulan == 9 ? 'selected' : '' }} value="9">September</option>
        <option {{ $bulan == 10 ? 'selected' : '' }} value="10">Oktober</option>
        <option {{ $bulan == 11 ? 'selected' : '' }} value="11">November</option>
        <option {{ $bulan == 12 ? 'selected' : '' }} value="12">Desember</option>
    </select>
</form>

<div class="grid grid-cols-7 gap-4 p-2 mt-4 w-full max-w-sm mx-auto border rounded border-black">
    @for ($i = 1; $i <= $lastDayOfMonth; $i++)
        @php
            $currentDate = \Carbon\Carbon::createFromDate($year, $month, $i)->format('Y-m-d');
            $isSiswaDate = in_array($currentDate, $siswaDates);
        @endphp

        <div class="border-2 border-blue-400 rounded-full text-center h-10 flex items-center justify-center {{ $isSiswaDate ? 'highlight' : '' }}">
            {{ $i }}
        </div>
    @endfor
</div>


<div class="w-full max-w-sm px-2 py-1 mx-auto border rounded border-black mt-5">
    <div class="font-bold text-gray-700" >Note : <br><span class="font-normal">
        Tanggal berwarna <span class="font-semibold text-green-600 underline">Hijau</span> berarti <span class="font-semibold text-green-600 underline">Siswa Berangkat</span></span>
        <br><span class="font-normal">Tanggal berwarna Putih = </span><span class="font-semibold text-red-600 underline">Siswa Tidak Berangkat</span>
    </div>
    
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menanggapi perubahan pada elemen select
        document.getElementById('select_bulan').addEventListener('change', function() {
            // Mengirimkan formulir secara otomatis
            document.getElementById('form_bulan').submit();
        });
    });
</script>


</body>
</html>
