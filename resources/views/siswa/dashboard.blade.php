
<x-app-layout>

<section id="loading" class="h-screen w-screen absolute top-0 left-0 bg-white z-40 grid place-items-center overflow-hidden">
<div class="w-full max-w-sm text-orange-400 relative">
    <span class="animate-ping z-10 absolute inline-flex w-full h-full rounded-full bg-red-400 opacity-75"></span>
    <img src="/asset/logo.png" alt="" class="absolute w-full p-3 z-20">
    <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" class="animate-spin w-full z-30"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"> <path d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8z" opacity=".2"></path> <path d="M7.25.75A.75.75 0 018 0a8 8 0 018 8 .75.75 0 01-1.5 0A6.5 6.5 0 008 1.5a.75.75 0 01-.75-.75z"></path> </g> </g></svg>
</div>    
</section>

<section id="allBody">

</section>
        
@if(session()->has('message'))

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex bg-black/75" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-yellow-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">
                    {{ session('message') }}
                </h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Oke
                </button>
                
            </div>
        </div>
    </div>
</div>
@elseif(session()->has('success'))

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex bg-black/75" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-green-600 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">
                    {{ session('success') }}
                </h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Oke
                </button>
                
            </div>
        </div>
    </div>
</div>

@endif

<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hidden text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button">
Toggle modal
</button>



        <nav class="w-full py-2 px-2">
            <div class="w-full bg-white rounded-2xl p-1 shadow-lg">
                <div class="rounded-2xl bg-orange-600 flex justify-between items-center text-white py-2">

                    <a href="/siswa/profile" class=" ml-2.5 rounded-full p-1 hover:bg-orange-700 focus:ring group">
                        <svg class="h-7 group-hover:rotate-90 transition-all" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                    </a>

                    <div class="w-full flex justify-end items-center space-x-2 pr-2">
                        <div class="flex flex-col text-xs text-right">
                            <span class="font-medium text-sm">{{ Auth::guard('siswa')->user()->nama }}</span>
                            <span class="text-xs">{{ Auth::guard('siswa')->user()->username }}</span>
                        </div>

                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center rounded-xl hover:bg-orange-700 p-0.5 focus:ring pr-1 group">
                            <img src="/img/{{ Auth::guard('siswa')->user()->foto }}" alt="profile" class="w-10 rounded-xl">
                            <div class=" ml-1.5 mr-1">
                                <div class="h-3.5 w-3 relative">
                                    <div class="absolute h-1 w-1 bg-white rounded-full left-1/2 -top-1 group-hover:top-full transition-all"></div>
                                    <div class="absolute h-1 w-1 bg-white rounded-full left-1/2 -translate-y-1/2 top-1/2"></div>
                                    <div class="absolute h-1 w-1 bg-white rounded-full left-1/2 -bottom-1 group-hover:bottom-full transition-all"></div>
                                </div>
                            </div>
                        </button>

                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/siswa/profile" class="block px-4 py-2 hover:bg-gray-100 ">Profile</a>
                            </li>
                            <hr>
                            <li>
                                <form method="POST" action="{{ route('siswa.logout') }}">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 hover:bg-gray-100 ">Sign out</button>
                                </form>
                            </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="flex items-center px-1 font-medium text-sm">
                    <div class="h-full flex flex-col justify-center px-2 py-1">
                        <span class="font-bold text-md">Hallo, {{ Auth::guard('siswa')->user()->nama }}!</span>
                        <span class="font-medium text-xs">Wellcome Back to The App</span>
                    </div>
                </div>
            </div>

        </nav>

        <form action="{{ route('absen-siswa') }}" method="POST" class="flex justify-center items-center my-3">
            @csrf
            <input type="hidden" id="longitude" name="longitude">
            <input type="hidden" id="latitude" name="latitude">
            <input type="date" id="tanggal" name="tanggal" class="hidden">
            <button type="submit" class="text-white relative w-32 h-12 bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center me-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                <svg class="w-5 h-5 mr-2 z-20 bg-orange-700 rounded -ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 7L5.5 5.5M15 7L16.5 5.5M5.5 16.5L7 15M11 5L11 3M5 11L3 11M17.1603 16.9887L21.0519 15.4659C21.4758 15.3001 21.4756 14.7003 21.0517 14.5346L11.6992 10.8799C11.2933 10.7213 10.8929 11.1217 11.0515 11.5276L14.7062 20.8801C14.8719 21.304 15.4717 21.3042 15.6375 20.8803L17.1603 16.9887Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <span class="z-20 bg-orange-700 rounded">Absen</span>
            <span class="animate-ping z-10 absolute inline-flex h-[85%] w-full rounded bg-red-400 opacity-75"></span>
            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75 -right-1 -top-1"></span>
            <span class="absolute inline-flex rounded-full h-3 w-3 bg-sky-500 -right-1 -top-1"></span>
            </button>
        </form>


        <section class="w-full flex border mt-5">

            <div class="flex-1 p-2 grid sm:grid-cols-2 grid-cols-1 gap-2">
                
            @foreach($spp as $spps)
                <button data-modal-target="default-modal-{{ $spps->id }}" data-modal-toggle="default-modal-{{ $spps->id }}" class="bg-indigo-600 rounded-lg p-2 flex flex-col w-full hover:bg-indigo-700 hover:shadow-xl focus:ring focus:ring-offset-2 focus:ring-indigo-600">
                    <div class="text-center bg-white w-full rounded pb-1 px-1">
                        <p class="font-extrabold text-indigo-600 text-xl">{{ $spps->jenis }}</p>
                        <p class="text-sm bg-indigo-600 rounded text-white">Kelas {{ $spps->kelas }}</p>
                    </div>
                    <div class="flex-1 text-sm font-bold text-white mt-1">
                        Status : 
                            @if($spps->jenis == 'SPP')
                                @if( (number_format(($spps->tanggungan * 12) - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember))) == 0 )
                                    <span class="bg-green-600 rounded px-2 py-0.5">Lunas</span>
                                @else
                                    <span class="bg-red-600 rounded px-2 py-0.5">Belum Lunas</span>
                                @endif
                            @else
                                @if( (number_format($spps->tanggungan - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember))) == 0 )
                                    <span class="bg-green-600 rounded px-2 py-0.5">Lunas</span>
                                @else
                                <span class="bg-red-600 rounded px-2 py-0.5">Belum Lunas</span>
                                @endif
                            @endif
                    </div>

                    <div class="flex-1 text-sm font-bold text-white mt-1">
                        Tanggungan : <span class="bg-white text-blue-600 rounded px-2 py-0.5">Rp. 
                            @if($spps->jenis == 'SPP')
                                {{ number_format($spps->tanggungan * 12) }}
                            @else
                                {{ number_format($spps->tanggungan) }}
                            @endif
                        </span>
                    </div>

                    <div class="flex-1 text-sm font-bold text-white mt-1">
                        Sudah Bayar : <span class="bg-white text-green-600 rounded px-2 py-0.5">Rp. 
                            {{ number_format($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember) }}
                        </span>
                    </div>

                    <div class="flex-1 text-sm font-bold text-white mt-1">
                        Kekurangan : <span class="bg-white text-red-600 rounded px-2 py-0.5">Rp. 
                            @if($spps->jenis == 'SPP')
                                {{ number_format(($spps->tanggungan * 12) - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember)) }}
                            @else
                                {{ number_format($spps->tanggungan - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember)) }}
                            @endif
                        </span>
                    </div>

                </button>



                <div id="default-modal-{{ $spps->id }}" tabindex="-1" aria-hidden="true" class="hidden bg-black/75 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Rincian SPP Kelas {{ $spps->kelas }}
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-{{ $spps->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>

                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                
                                

                                <div class="relative overflow-x-auto">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 rounded-s-lg">
                                                    Bulan
                                                </th>
                                                <th scope="col" class="px-6 py-3 rounded-e-lg">
                                                    Bayar
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Januari
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Januari) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Februari
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Februari) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Maret
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Maret) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    April
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->April) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Mei
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Mei) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Juni
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Juni) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Juli
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Juli) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Agustus
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Agustus) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    September
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->September) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Oktober
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Oktober) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    November
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->November) }}
                                                </td>
                                            </tr>

                                            <tr class="bg-white dark:bg-gray-800">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Desember
                                                </th>
                                                <td class="px-6 py-4">
                                                    Rp. {{ number_format($spps->Desember) }}
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr class="font-semibold bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-gray-900 ">
                                                <th scope="row" class="px-6 py-3 text-base">Total Bayar</th>
                                                <td class="px-6 py-3">
                                                    Rp. {{ number_format($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember) }}
                                                </td>
                                            </tr>

                                            <tr class="font-semibold text-red-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-400 ">
                                                <th scope="row" class="px-6 py-3 text-base">Kekurangan</th>
                                                <td class="px-6 py-3">
                                                @if($spps->jenis == 'SPP')
                                                Rp. {{ number_format(($spps->tanggungan * 12) - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember)) }}
                                                @else
                                                Rp. {{ number_format($spps->tanggungan - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember)) }}
                                                @endif
                                                </td>
                                            </tr>

                                            @if($spps->jenis == 'SPP')
                                                @if( (number_format(($spps->tanggungan * 12) - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember))) == 0 )
                                                    <tr class="font-semibold text-green-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-400 ">
                                                        <th scope="row" class="px-6 py-3 text-base">Keterangan</th>
                                                        <td class="px-6 py-3">Lunas</td>
                                                    </tr>
                                                @else
                                                    <tr class="font-semibold text-red-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-400 ">
                                                        <th scope="row" class="px-6 py-3 text-base">Keterangan</th>
                                                        <td class="px-6 py-3">Belum Lunas</td>
                                                    </tr>
                                                @endif
                                            @else
                                                @if( (number_format($spps->tanggungan - ($spps->Januari + $spps->Februari + $spps->Maret + $spps->April + $spps->Mei + $spps->Juni + $spps->Juli + $spps->Agustus + $spps->September + $spps->Oktober + $spps->November + $spps->Desember))) == 0 )
                                                    <tr class="font-semibold text-green-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-400 ">
                                                        <th scope="row" class="px-6 py-3 text-base">Keterangan</th>
                                                        <td class="px-6 py-3">Lunas</td>
                                                    </tr>
                                                @else
                                                    <tr class="font-semibold text-red-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-400 ">
                                                        <th scope="row" class="px-6 py-3 text-base">Keterangan</th>
                                                        <td class="px-6 py-3">Belum Lunas</td>
                                                    </tr>
                                                @endif
                                            @endif


                                        </tfoot>
                                    </table>
                                </div>



                            </div>

                            <!-- Modal footer -->
                            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal-{{ $spps->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            </div>

            <div class=" w-36 p-1">
                <div class="w-full rounded bg-teal-400 p-1">
                    <div class="flex items-center justify-center text-gray-900 mb-2 mt-1">
                    <svg class="w-4 h-4" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#FFFFFF;} </style> <g> <path d="M31,26c-0.6,0-1-0.4-1-1V12c0-0.6,0.4-1,1-1s1,0.4,1,1v13C32,25.6,31.6,26,31,26z"></path> </g> <g> <path d="M16,21c-0.2,0-0.3,0-0.5-0.1l-15-8C0.2,12.7,0,12.4,0,12s0.2-0.7,0.5-0.9l15-8c0.3-0.2,0.6-0.2,0.9,0l15,8 c0.3,0.2,0.5,0.5,0.5,0.9s-0.2,0.7-0.5,0.9l-15,8C16.3,21,16.2,21,16,21z"></path> </g> <path d="M17.4,22.6C17,22.9,16.5,23,16,23s-1-0.1-1.4-0.4L6,18.1V22c0,3.1,4.9,6,10,6s10-2.9,10-6v-3.9L17.4,22.6z"></path> </g></svg>
                    <span class="text-xs ml-1 font-semibold">Sipaling Rajin</span>
                    </div>

                    <div class="flex items-center px-2 py-1 bg-white text-xs rounded my-0.5">
                        <span class="bg-teal-400 p-1 rounded font-bold mr-1">01</span>
                        <span class="truncate">Nama Nama Nama</span>
                    </div>
                    <div class="flex items-center px-2 py-1 bg-white text-xs rounded my-0.5">
                        <span class="bg-teal-400 p-1 rounded font-bold mr-1">02</span>
                        <span class="truncate">Nama Nama Nama</span>
                    </div>
                    
                </div>
                
            </div>
        </section>

        
        <script>
            document.getElementById('loading').style.display = 'grid';

            // Dapatkan tanggal hari ini
            let today = new Date().toISOString().slice(0, 10);
            // Set value dari input date ke tanggal hari ini
            document.getElementById('tanggal').value = today;

            // Mendapatkan lokasi pengguna menggunakan Geolocation API
            if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // Mendapatkan nilai longitude dan latitude
                let longitude = position.coords.longitude;
                let latitude = position.coords.latitude;

                // Set value dari input hidden untuk longitude dan latitude
                document.getElementById('longitude').value = longitude;
                document.getElementById('latitude').value = latitude;

                // Sembunyikan loading section setelah mendapatkan lokasi
                document.getElementById('loading').style.display = 'none';
            });
            } else {
            console.log("Geolocation tidak didukung di browser ini.");
            // Sembunyikan loading section jika geolocation tidak didukung
            document.getElementById('loading').style.display = 'none';
            }
        </script>
         

    
    
</x-app-layout>
