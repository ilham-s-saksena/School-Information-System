
@extends('layouts.admin')

@section('Content')

<div class="relative flex">
    <label for="side" class="absolute top-3 left-2 h-8 w-8 bg-white shadow shadow-indigo-600 hover:bg-indigo-400 group transition-colors rounded-lg cursor-pointer">
    <svg class="h-8 w-8 p-0.5 text-indigo-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
    </svg>
    </label>
    <div class="flex items-center mt-14 px-4">
    <svg class="w-6 h-6 mr-1" fill="currentColor" height="200px" width="200px" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-351 153 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M-283,367.8c0,9-7.3,16.3-16.3,16.3s-16.3-7.3-16.3-16.3s7.3-16.3,16.3-16.3S-283,358.8-283,367.8z M-280.8,387.3h-18.7 h-18.7c-11.3,0-18.5,9.3-18.5,21.1v0.3h74.4v-0.1C-262.1,396.7-269.2,387.3-280.8,387.3z M-239.1,367.8c0,9,7.3,16.3,16.3,16.3 s16.3-7.3,16.3-16.3s-7.3-16.3-16.3-16.3S-239.1,358.8-239.1,367.8z M-204.3,387.3H-223h-18.7c-11.3,0-18.5,9.3-18.5,21.1v0.3h74.4 v-0.1C-185.6,396.7-192.8,387.3-204.3,387.3z M-146.3,351.5c-9,0-16.3,7.3-16.3,16.3s7.3,16.3,16.3,16.3s16.3-7.3,16.3-16.3 S-137.3,351.5-146.3,351.5z M-127.8,387.3h-18.7h-18.7c-11.3,0-18.5,9.3-18.5,21.1v0.3h74.4v-0.1 C-109.1,396.7-116.3,387.3-127.8,387.3z M-245.8,363.6c0-9-7.3-16.3-16.3-16.3c-9,0-16.3,7.3-16.3,16.3c0,9,7.3,16.3,16.3,16.3 C-253.1,379.9-245.8,372.6-245.8,363.6z M-169.3,363.6c0-9-7.3-16.3-16.3-16.3c-9,0-16.3,7.3-16.3,16.3c0,9,7.3,16.3,16.3,16.3 C-176.6,379.9-169.3,372.6-169.3,363.6z M-301.1,215.1c7.2,0,13.1-5.9,13.1-13.1s-5.9-13.1-13.1-13.1s-13.1,5.9-13.1,13.1 S-308.3,215.1-301.1,215.1z M-333.7,274.4v-39.9c0-9,7.3-16.3,16.3-16.3h16.3h13.3c4.2,0,8.4,1.6,11.6,4.8 c0,0.1,13.6,13.7,13.6,13.7h6.7h0.1v-71.8h-14.5v-11.8h151.2v11.8h-12.3v155h-124.4v-71.8h-9c-1.5,0-2.9-0.6-3.9-1.5l-11.5-11.5 c-0.3-0.3-0.8-0.5-1.2-0.5c-0.9,0-1.6,0.7-1.6,1.6v42.3v58.7c0,4.5-3.7,8.2-8.2,8.2s-8.2-3.7-8.2-8.2v-57c0-0.9-0.7-1.6-1.6-1.6 s-1.6,0.7-1.6,1.6v57.1c0,4.5-3.7,8.2-8.2,8.2s-8.2-3.7-8.2-8.2v-58.7v-27.7v-13.1c0-0.9-0.7-1.6-1.6-1.6c-0.9,0-1.6,0.7-1.6,1.6 v36.7c0,3.2-2.5,5.7-5.7,5.7C-331.1,280.2-333.6,277.6-333.7,274.4z M-252.3,236.7h13.7c1.1,0,2.1,0.3,3,0.9l14.7-20.3 c0.5-0.6,1.3-0.8,1.9-0.3c0.6,0.5,0.7,1.3,0.3,1.9l-15,20.7c0.4,0.8,0.7,1.7,0.7,2.8c0,3.2-2.5,5.7-5.7,5.7h-13.4h-0.2v68.3h117.4 V165h-117.4V236.7z"></path> </g></svg>
    <span class="font-bold text-lg">
        Jurnal Mengajar Tutor
    </span>
    <form id="myForm"  action="" method="get" class="ml-3 grid grid-cols-2">

            <select id="selectOption" name="filter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0" {{ ($filter == 0) ? 'selected ' : '' }}>Filter Per-kelas</option>
                @foreach($kelas as $item)
                <option {{ ($filter == $item) ? 'selected ' : '' }} value="{{$item}}">Kelas {{$item}}</option>
                @endforeach
            </select>
        
        <div>

        </div>
        </form>
    </div>
</div>



<div class="px-4 py-5">
    <div class="border-2 border-dashed rounded-lg border-gray-500">
        @if ($filter == 0)
        <div class="text-center py-8 text-gray-500">
            silahkan pilih kelas terlebih dahulu
        </div>
        @else
            <div class="py-4 text-center">
                <h1 class="font-bold text-lg mb-5">Jurnal Kelas {{ $filter }} PKBM Harapan Bangsa</h1>
                    <form id="myForm2"  action="" method="get" class="ml-3 grid grid-cols-6 mb-5 place-items-center">
                        <div>Bulan : </div>
                        <select id="selectOption" name="bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="0" {{ ($bulan == 0) ? 'selected ' : '' }}>Semua Bulan</option>
                            <option value="1" {{ ($bulan == 1) ? 'selected ' : '' }}>Januari</option>
                            <option value="2" {{ ($bulan == 2) ? 'selected ' : '' }}>Februari</option>
                            <option value="3" {{ ($bulan == 3) ? 'selected ' : '' }}>Maret</option>
                            <option value="4" {{ ($bulan == 4) ? 'selected ' : '' }}>April</option>
                            <option value="5" {{ ($bulan == 5) ? 'selected ' : '' }}>Mei</option>
                            <option value="6" {{ ($bulan == 6) ? 'selected ' : '' }}>Juni</option>
                            <option value="7" {{ ($bulan == 7) ? 'selected ' : '' }}>Juli</option>
                            <option value="8" {{ ($bulan == 8) ? 'selected ' : '' }}>Agustus</option>
                            <option value="9" {{ ($bulan == 9) ? 'selected ' : '' }}>September</option>
                            <option value="10" {{ ($bulan == 10) ? 'selected ' : '' }}>Oktober</option>
                            <option value="11" {{ ($bulan == 11) ? 'selected ' : '' }}>November</option>
                            <option value="12" {{ ($bulan == 12) ? 'selected ' : '' }}>Desember</option>
                            
                        </select>

                        <input type="hidden" value="{{$filter}}" name="filter">

                        <div>Tahun : </div>
                        <select id="selectOption" name="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="2024" {{ ($tahun == 2024) ? 'selected ' : '' }}>2024</option>
                            <option value="2025" {{ ($tahun == 2025) ? 'selected ' : '' }}>2025</option>
                            <option value="2026" {{ ($tahun == 2026) ? 'selected ' : '' }}>2026</option>
                            <option value="2027" {{ ($tahun == 2027) ? 'selected ' : '' }}>2027</option>
                        </select>
                        <button class="flex justify-center col-span-2 px-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                    </form>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-2">
                    <hr>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Tutor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jam Mengajar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pelajaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Materi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($jurnal as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    nama
                                </th>
                                <td class="px-6 py-4">
                                    jam
                                </td>
                                <td class="px-6 py-4">
                                    pelajaran
                                </td>
                                <td class="px-6 py-4">
                                    materi
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot class="text-xs text-gray-800 uppercase bg-gray-200 dark:bg-gray-800 dark:text-gray-400">
                            <tr>
                                <th scope="col" colspan="3" class="px-6 py-3 text-center font-extrabold">
                                    Total Jam Pelajaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{$jurnal->count()}}
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        @endif
    </div>
</div>



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