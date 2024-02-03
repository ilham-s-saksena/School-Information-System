@extends('layouts.operator')

@section('Content')

<div class="relative flex">
    <label for="side" class="absolute top-3 left-2 h-8 w-8 bg-white shadow shadow-indigo-600 hover:bg-indigo-400 group transition-colors rounded-lg cursor-pointer">
        <svg class="h-8 w-8 p-0.5 text-indigo-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
        </svg>
    </label>
    

</div>


<div class="flex items-center px-4 mt-14">
        <svg class="w-6 h-6 mr-1" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:currentColor;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
        <span class="font-bold text-lg">
            Detail Siswa {{$nama_siswa}}
        </span>
        <form action="" method="get" class="ml-3 grid grid-cols-3 gap-2">
        <div>
            <select id="countries" name="bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih bulan ...</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>

            
        </div>
        <input type="number" name="tahun" id="tahun" placeholder="Tahun ..." required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        
        <div>
            <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
        </div>
        </form>

    </div>


    <div class="mt-5 px-5">
        

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->tanggal }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->waktu }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $item->keterangan }}</button>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                <tfoot class="text-xs text-gray-800 uppercase bg-gray-200 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" colspan="2" class="px-6 py-3 text-center font-extrabold">
                            Total Kehadiran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ $data->count() }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>







@endsection