
<x-app-layout>
    <x-slot name="header">
        
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

<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
Toggle modal
</button>



        <nav class="w-full py-2 px-2">
            <div class="w-full bg-white rounded-2xl p-1 shadow-lg">
                <div class="rounded-2xl bg-teal-600 flex justify-between items-center text-white py-2">

                    <a href="/user/profile" class=" ml-2.5 rounded-full p-1 hover:bg-teal-700 focus:ring group">
                        <svg class="h-7 group-hover:rotate-90 transition-all" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                    </a>

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

        </nav>

        <section class="px-2 mt-2">
            <div class="w-full bg-gradient-to-r from-blue-100 to-teal-200 p-2 rounded-md shadow-md">
                <span class="text-sm font-bold">Jumlah JPL Anda</span>
                <div class="flex justify-between space-x-2 mt-1">
                    <div class=" p-2 bg-white rounded-lg border-2 border-teal-200 hover:bg-teal-50 w-1/2">
                        <p>Bulan ini</p>
                        <p class="text-2xl font-bold">{{ $absenBulanIni->count() }} <span class="text-sm">JPL</span></p>
                    </div>
                    <div class=" p-2 bg-white rounded-lg border-2 border-blue-200 hover:bg-blue-50 w-1/2">
                        <p>Hari ini</p>
                        <p class="text-2xl font-bold">{{ $absenHariIni->count() }} <span class="text-sm">JPL</span></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="px-2 py-3 flex justify-center mt-1">
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="py-2.5 px-4 bg-blue-500 text-white font-bold rounded-lg relative hover:bg-blue-400 focus:ring-2">
                <div class="absolute -top-1 -right-1">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                    </span>
                </div>
                Absen Mengajar Harian
            </button>
        </div>

    

         

    <div>
        <div class="w-full p-2">
            <div class="w-full rounded-md border-2 border-teal-200 p-2 shadow-lg">
                <p class="font-semibold mb-1">Pendapatan Anda</p>
                <div class="flex">
                    <div class="bg-teal-200 p-2 rounded relative w-full">
                        <p class="absolute font-extrabold text-green-500 border-2 border-green-500 bg-green-50 py-1 px-5 text-xl right-3 top-1/2 -translate-y-1/2 rounded-tr-md rounded-bl-md">
                            Rp. <span>{{ number_format($absenBulanIni->count()*30000) }}</span>
                        </p>
                        <p class="font-bold text-sm">Pendapatan Anda</p>
                        <div class="flex justify-between">
                            <p class="font-bold text-xl">
                                Bulan Ini
                            </p>
                            
                        </div>
                    </div>
                </div>

                <div class="flex mt-3">
                    <div class="bg-teal-200 p-2 rounded relative w-full">
                        <p class="absolute font-extrabold text-green-500 border-2 border-green-500 bg-green-50 py-1 px-5 text-xl right-3 top-1/2 -translate-y-1/2 rounded-tr-md rounded-bl-md">
                            Rp. <span>{{ number_format($absenBulanLalu->count()*30000) }}</span>
                        </p>
                        <p class="font-bold">Pendapatan Anda</p>
                        <div class="flex justify-between">
                            <p class="font-bold text-xl">
                                Bulan Lalu
                            </p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 w-full text-center mb-2">
                    <a href=" {{ route('detail.absen') }} " class="font-semibold flex items-center justify-center w-fit mx-auto px-3 py-1.5 bg-teal-600 rounded-md text-white hover:bg-teal-500 focus:ring focus:ring-offset-2 focus:ring-teal-200 ">
                        Lihat Detail Lainnya
                        <svg class="w-5 ml-1" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>






        <div class="p-2 mt-2">
            <div class="p-2 border-2 border-blue-300 rounded-md">
                <p class="font-bold">Absen Mengajar Terkini</p>
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
                                Materi
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Jam
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-xs">

                    @foreach($absenUser as $absen)
                        <tr class="border-b border-blue-100">
                            <td class="py-2 px-1">
                                {{ $absen->tanggal }}
                            </td>
                            <td class="py-2 px-1">
                                {{ $absen->mapel }}
                            </td>
                            <td class="py-2 px-1">
                                {{ $absen->materi }}
                            </td>
                            <td class="py-2 px-1">
                                {{ $absen-> waktu }}
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
                <div class="w-full text-center mt-4 mb-1">

                    <a href="{{ route('detail.absen') }}" class="text-sm rounded-lg px-2 py-1.5 shadow hover:shadow-xl text-center focus:ring focus:ring-offset-2">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>

        </div>
    </x-slot>








    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/75">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 ">Isi Absen Harian</h3>
                        <form class="space-y-6" action="{{ route('absen') }}" method="post">
                            @csrf

                            <div>
                                <label for="tgl" class="mb-1">Tanggal Mengajar</label>
                                <input type="date" name="tgl" id="tgl" placeholder="Mata Pelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                            </div>
  
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label for="mapel">Mata Pelajaran</label>
                                    <input type="text" list="mapel_list" name="mapel" id="mapel" placeholder="Mata Pelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                    <datalist id="mapel_list">
                                        <option value="Agama (PAI)">
                                        <option value="PPKn">
                                        <option value="IPA">
                                        <option value="IPS">
                                        <option value="B Indonesia">
                                        <option value="B Inggris">
                                        <option value="B Jawa">
                                        <option value="Seni Budaya">
                                        <option value="Prakarya">
                                        <option value="Sejarah Indonesia">
                                        <option value="Sejarah Dunia">
                                        <option value="Geografi">
                                        <option value="Sosiologi">
                                        <option value="Ekonomi">
                                        <option value="TIK">
                                        <option value="Penjas">
                                      </datalist>
                                </div>
                                <div>
                                    <label for="kelas">Kelas Yang Diajar</label>
                                    <input type="number" list="kelas_list" name="kelas" id="kelas" placeholder="Kelas Yang Diajar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                    <datalist id="kelas_list">
                                        <option value="4">
                                        <option value="5">
                                        <option value="6">
                                        <option value="7">
                                        <option value="8">
                                        <option value="9">
                                        <option value="10">
                                        <option value="11">
                                        <option value="12">
                                      </datalist>
                                </div>
                            </div>
                            <div>                                
                                <label for="message" class="block mb-1 text-sm font-medium text-gray-900 ">Materi</label>
                                <textarea id="message" name="materi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Materi yang diajarkan..." required></textarea>
                            </div>
                            <div>
                                <label for="jam" class="block mb-1 text-sm font-medium text-gray-900 ">Jam Mengajar</label>
                                <select id="jam" name="jam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                    
                                    <option value="09.00 - 09.45">09.00 - 09.45</option>
                                    <option value="09.45 - 10.30">09.45 - 10.30</option>
                                    <option value="10.30 - 11.15">10.30 - 11.15</option>
                                    <option value="11.15 - 12.00">11.15 - 12.00</option>
                                    <option value="13.00 - 13.45">13.00 - 13.45</option>
                                    <option value="13.45 - 14.30">13.45 - 14.30</option>
                                    <option value="14.30 - 15.15">14.30 - 15.15</option>
                                    <option value="15.15 - 16.00">15.15 - 16.00</option>
                                </select>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
</x-app-layout>
