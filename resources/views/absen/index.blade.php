<x-app-layout>

<x-slot name="header">

<div class="w-full bg-white rounded-2xl p-1 shadow-lg">
    <div class="rounded-2xl bg-teal-600 flex justify-between items-center text-white py-2">

        <button class=" ml-2.5 rounded-full p-1 hover:bg-teal-700 focus:ring group">
            <svg class="h-7 group-hover:rotate-90 transition-all" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
        </button>

        <div class="w-full flex justify-end items-center space-x-2 pr-2">
            <div class="flex flex-col text-xs text-right">
                <span class="font-medium text-sm">{{ Auth::user()->name }}</span>
                <span class="text-xs">{{ Auth::user()->email}}</span>
            </div>

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center rounded-xl hover:bg-teal-700 p-0.5 focus:ring pr-1 group">
                <img src="/img/{{ Auth::user()->foto }}" alt="profile" class="w-10 rounded-xl">
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
                    <a href="/user/profile" class="block px-4 py-2 hover:bg-gray-100 ">Profile</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">API Tokens</a>
                </li>
                <hr>
                <li>
                    <form method="POST" action="/logout">
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
            <span class="font-bold text-md">Hallo, {{ Auth::user()->name }}!</span>
            <span class="font-medium text-xs">Wellcome Back to The App</span>
        </div>
    </div>
</div>


<div class="py-2">

<div class="px-2 py-3">
    <form class="w-full relative flex" method="POST" action="{{route('detail.absen.filter')}}">
        @csrf
        <input type="number" name="year" value="{{$year}}" class="w-full border-2 border-teal-600 rounded-lg pl-36 font-bold text-gray-500">
        <div class="absolute flex space-x-1 items-center left-0 top-1/2 -translate-y-1/2 px-2 h-full border-l-2 border-teal-600 rounded-l-lg bg-teal-600 font-bold text-white">
            <span class="border-2 rounded-md p-0.5 border-white bg-white">
                <svg class="w-4 text-teal-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z"></path>
                </svg>
            </span>
            <span>Filter</span>
        </div>
        <div class="absolute top-1/2 -translate-y-1/2 left-20 ml-3 font-bold text-gray-500">
            Tahun : 
        </div>
        <button type="submit" class="h-full absolute top-1/2 -translate-y-1/2 right-0 rborder-2 border-teal-600 rounded-r-lg bg-teal-600 px-5 text-white hover:bg-teal-100 hover:text-teal-600 border-2 ">
            <svg class="w-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
            </svg>
        </button>
    </form>
</div>

    <div class="grid grid-cols-1 md:grid-cols-2 border py-2 bg-gray-200 gap-2">

        <!-- JANUARI -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="januari-cta-button" data-collapse-toggle="januari-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Januari 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="januari-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($jan->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($jan as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $jan->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- FEBRUARI -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="februari-cta-button" data-collapse-toggle="februari-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Februari 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="februari-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($feb->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($feb as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $feb->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- MARET -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="maret-cta-button" data-collapse-toggle="maret-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Maret
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="maret-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($mar->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($mar as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $mar->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>



        <!-- APRIL -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="april-cta-button" data-collapse-toggle="april-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    April 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="april-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($jan->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($jan as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $jan->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- MEI -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="mei-cta-button" data-collapse-toggle="mei-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Mei
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="mei-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($mei->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($mei as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $mei->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- JUNI -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="juni-cta-button" data-collapse-toggle="juni-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Juni 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="juni-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($jun->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($jun as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $jun->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- JULI -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="juli-cta-button" data-collapse-toggle="juli-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Juli 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="juli-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($jul->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($jul as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $jul->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- AGUSTUS -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="agustus-cta-button" data-collapse-toggle="agustus-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Agustus 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="agustus-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($agu->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($agu as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $agu->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- SEPTEMBER -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="september-cta-button" data-collapse-toggle="september-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    September 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="september-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($sep->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($sep as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $sep->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- OKTOBER -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="oktober-cta-button" data-collapse-toggle="oktober-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Oktober 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="oktober-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($okt->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($okt as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $okt->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- NOVEMBER -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="november-cta-button" data-collapse-toggle="november-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    November 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="november-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($nov->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($nov as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $nov->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>


        <!-- DESEMBER -->
        <div class="w-full">
            <div class="w-full flex justify-center">
                <button id="desember-cta-button" data-collapse-toggle="desember-cta" data-dropdown-placement="bottom" class="bg-white px-8 flex items-center py-2.5 font-bold text-lg rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                    Desember 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
            
            <div id="desember-cta" class="mt-2 hidden">
            <table class="w-full text-sm text-left text-gray-500 mb-2">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                Tgl
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Mapel
                            </th>
                            <th scope="col" class="px-2 py-3">
                                waktu
                            </th>
                            <th scope="col" class="px-2 py-3">
                                act
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                    @if($des->count() == 0 )
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="4">Tidak ada Data.</td>
                        </tr>
                    @else
                    @foreach($des as $absen)           
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1">
                                {{$absen->tanggal}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen->mapel}}
                            </td>
                            <td class="py-2 px-1">
                                {{$absen-> waktu}}
                            </td>
                            <td class="py-2 px-1 text-center ">
                                <button class="rounded hover:bg-gray-200 focus:bg-gray-200" data-modal-target="authentication-modal-{{$absen->id}}" data-modal-toggle="authentication-modal-{{$absen->id}}">
                                    <svg class="w-5 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <div id="authentication-modal-{{$absen->id}}" tabindex="-1" class="fixed hidden top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center  bg-black/75" aria-modal="true" role="dialog">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal-{{$absen->id}}">
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
                                            Apakah anda yakin ingin menghapus data Absen pada {{$absen->tanggal}} jam ke {{$absen->waktu}}?
                                        </h3>
                                        <a href="/absen/delete/{{$absen->id}}" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                            Oke
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <tr class="border-b-2 border-gray-200 bg-white">
                            <td class="py-2 px-1 text-center" colspan="2">Total</td>
                            <td class="py-2 px-1 text-center underline font-bold" colspan="2">{{ $des->count() }} JPL</td>
                        </tr>
                    @endif                        
                    </tbody>
                </table>
            </div>
        </div>



        <div class="w-full flex justify-center col-span-1 sm:col-span-2">
            <button  class="bg-white px-8 flex items-center py-2.5 font-bold text-md rounded-md shadow-lg hover:text-teal-700 hover:bg-white/50 focus:ring focus:ring-teal-700 focus:text-teal-700">
                Total JPL Tahun {{ $year }} : 
                <span class="ml-1 underline"> {{ $jan->count() + $feb->count() + $mar->count() + $apr->count() + $mei->count() + $jun->count() + $jul->count() + $agu->count() + $sep->count() + $okt->count() + $nov->count() + $des->count() }} JPL</span>
            </button>
        </div>

    </div>


</div>

<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
</button>
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
                <svg class="mx-auto mb-4 text-green-600 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">
                    {{ session('message') }}
                </h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Oke
                </button>
                
            </div>
        </div>
    </div>
</div>

@endif


</x-slot>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</x-app-layout>