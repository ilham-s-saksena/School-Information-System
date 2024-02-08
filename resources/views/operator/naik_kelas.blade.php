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
            Daftar Siswa
        </span>
        <form id="myForm"  action="" method="get" class="ml-3 grid grid-cols-2">

            <select id="selectOption" name="filter" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value="0" {{ ($filter == 0) ? 'selected ' : '' }}>Filter Per-kelas</option>
                @foreach($kelas as $item)
                <option {{ ($filter == $item) ? 'selected ' : '' }} value="{{$item}}">Kelas {{$item}}</option>
                @endforeach
            </select>
        
        <div>

        </div>
        </form>

    </div>


    <div class="mt-5 px-5">
        

        <form action="{{ route('form.naik.kelas') }}" class="relative overflow-auto shadow-md sm:rounded-lg h-screen relative">
            <button class="flex w-full justify-center py-2 sticky top-0 bg-green-500 rounded mb-2 font-bold text-white hover:bg-green-400 focus:ring">
                Simpan Semua Data
            </button>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead style="top: 2.5rem;" class="sticky text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" rowspan="2" class="px-6 py-3 border">
                            Nama
                        </th>
                        <th scope="col" rowspan="2" class="px-6 py-3 text-center border">
                            Kelas
                        </th>
                        <th scope="col" colspan="3" class="px-6 py-3 text-center border">
                            Aksi
                        </th>
                    </tr>

                    <tr>
                        
                        
                        <th scope="col" class="px-6 py-3 text-center border">
                            Naik Kelas
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            Tinggal Kelas
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border">
                            Keluar/Lulus
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200">
                        <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->nama }}
                        </th>
                        <td class="px-6 py-3 flex items-center space-x-2 justify-center">
                            {{ $data->angkatan }}
                        </td>
                        <td class="px-6 py-3 text-center border">
                            <input type="radio" name="aksi[{{$data->id}}]" value="{{$data->angkatan + 1}}" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> 
                        </td>
                        <td class="px-6 py-3 text-center border">
                            <input checked type="radio" name="aksi[{{$data->id}}]" value="{{$data->angkatan}}" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> 
                        </td>
                        <td class="px-6 py-3 text-center border">
                            <input type="radio" name="aksi[{{$data->id}}]" value="0" class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> 
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                <tfoot class="text-xs text-gray-800 uppercase bg-gray-200 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" colspan="2" class="px-6 py-3 text-center font-extrabold">
                            Total Siswa
                        </th>
                        <th scope="col" class="px-6 py-3 text-center" colspan="3">
                            {{ number_format($siswa->count()) }} Siswa
                        </th>
                    </tr>
                </tfoot>
            </table>
        </form>

    </div>
    @if(session()->has('message'))

<div id="alert" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex bg-black/75" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="alert">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-green-600 w-12 h-12 " data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">
                    {{ session('message') }}
                </h3>
                <button data-modal-hide="alert" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Oke
                </button>
                
            </div>
        </div>
    </div>
</div>

@endif

<button data-modal-target="alert" data-modal-toggle="alert" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
Toggle modal
</button>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Temukan elemen <select> dan formulir
        var selectOption = document.getElementById('selectOption');
        var myForm = document.getElementById('myForm');

        // Tambahkan event listener untuk perubahan pada elemen <select>
        selectOption.addEventListener('change', function () {
            // Submit formulir secara otomatis
            myForm.submit();
        });
    });
</script>




@endsection