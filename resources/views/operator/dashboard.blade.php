@extends('layouts.operator')

@section('Content')

<div class="relative flex">
    <label for="side" class="absolute top-3 left-2 h-8 w-8 bg-white shadow shadow-indigo-600 hover:bg-indigo-400 group transition-colors rounded-lg cursor-pointer">
    <svg class="h-8 w-8 p-0.5 text-indigo-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
    </svg>
    </label>
    <div class="flex items-center mt-14 px-4">
    <svg class="w-6 h-6 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 17.4998C6.41783 17.186 6.9372 17 7.5 17C8.88071 17 10 18.1193 10 19.5C10 20.0628 9.81403 20.5822 9.50018 21M18 17.4998C17.5822 17.186 17.0628 17 16.5 17C15.1193 17 14 18.1193 14 19.5C14 20.0628 14.186 20.5822 14.4998 21M17.9999 9.99995C18.9883 9.99918 19.5064 9.98663 19.908 9.78201C20.2843 9.59027 20.5903 9.28431 20.782 8.90798C21 8.48016 21 7.9201 21 6.8V6.2C21 5.0799 21 4.51984 20.782 4.09202C20.5903 3.71569 20.2843 3.40973 19.908 3.21799C19.4802 3 18.9201 3 17.8 3H6.2C5.0799 3 4.51984 3 4.09202 3.21799C3.71569 3.40973 3.40973 3.71569 3.21799 4.09202C3 4.51984 3 5.0799 3 6.2V6.8C3 7.9201 3 8.48016 3.21799 8.90798C3.40973 9.28431 3.71569 9.59027 4.09202 9.78201C4.49359 9.98663 5.01167 9.99918 6.00005 9.99995M17.9999 9.99995C18 10.0646 18 10.1312 18 10.2V17.8C18 18.9201 18 19.4802 17.782 19.908C17.5903 20.2843 17.2843 20.5903 16.908 20.782C16.4802 21 15.9201 21 14.8 21H9.2C8.07989 21 7.51984 21 7.09202 20.782C6.71569 20.5903 6.40973 20.2843 6.21799 19.908C6 19.4802 6 18.9201 6 17.8V10.2C6 10.1312 6 10.0646 6.00005 9.99995M17.9999 9.99995C17.9992 9.01163 17.9866 8.49358 17.782 8.09202C17.5903 7.71569 17.2843 7.40973 16.908 7.21799C16.4802 7 15.9201 7 14.8 7H9.2C8.0799 7 7.51984 7 7.09202 7.21799C6.71569 7.40973 6.40973 7.71569 6.21799 8.09202C6.01338 8.49358 6.00082 9.01163 6.00005 9.99995M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <span class="font-bold text-lg">
        Pembayaran SPP Siswa PKBM Harapan Bangsa
    </span>
    </div>
</div>

<form action="" method="get" class="px-8 py-2 bg-indigo-300 flex space-x-4 mt-2 items-center">
    <div class="flex space-x-2 flex-1">
        <input type="text" name="siswa" class="rounded py-4 border-indigo-500 flex flex-1" placeholder="cari nama siswa ...">
        <button type="submit" class="bg-white border-2 border-indigo-500 rounded px-3 text-indigo-500 transition-colors hover:bg-indigo-400 hover:text-white hover:border-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
            </svg>
        </button>
    </div>

    <button type="button" data-modal-target="tambah" data-modal-toggle="tambah" class="flex hover:border-indigo-400 transition-colors group items-center justify-center w-1/4 p-2 font-medium rtl:text-right text-indigo-500 border-2 border-white rounded-md focus:ring focus:ring-offset-1 focus:ring-blue-200  hover:bg-blue-100 bg-indigo-400 shadow-lg">
        <div class="bg-white p-3 rounded group-hover:bg-indigo-400">
            <svg class="w-6 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
            </svg>
        </div>
    </button>
    
</form>


<div class="px-8 py-3 grid grid-cols-3 gap-3">
    @foreach($siswa as $siswas)
    <button data-modal-target="popup-modal-{{$siswas->id}}" data-modal-toggle="popup-modal-{{$siswas->id}}" class="flex mb-2 items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border-2 border-indigo-400 rounded-md focus:ring focus:ring-offset-1 focus:ring-blue-200  hover:bg-blue-100  gap-3">
        <span class="flex items-center justify-between flex-1">
            <div class="text-left">
                <span class="text-gray-900">
                    {{ $siswas->nama }}
                </span>
                <div class="text-xs flex items-center mt-1">
                    Masuk <span class="bg-blue-500 rounded text-white px-2 ml-1">{{ $siswas->tahun_masuk }}</span>
                </div>
                <div class="text-sm">
                    {{$siswas->alamat}}
                </div>
            </div>
            
            
            <input type="hidden" name="id" value=" $users->id ">

            <div class="text-center border">

                
                <div class=" bg-green-400 text-white px-2 rounded py-0.5 hover:bg-green-500 flex items-center">
                    <svg class="w-5 mr-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                    </svg>
                    Data Bayar
                </div>
            <div class="text-sm mt-2 flex">
                <div class="pr-1">
                    SPP : 
                </div>
                
                <div class="flex space-x-1">
                    @foreach($siswas->pembayaran->where("jenis", "SPP") as $pembayar)
                    <div class="text-white bg-yellow-600 px-1 rounded space-x-1">
                        {{$pembayar->kelas}}
                    </div>
                    @endforeach
                </div>
            </div>
            </div>

        </span>
    </button>

    <div id="popup-modal-{{$siswas->id}}" tabindex="-1" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-black/75" aria-modal="true" role="dialog">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal-{{$siswas->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <div>
                        Pembayaran Atas Nama : 
                        <span class="font-extrabold text-green-700">
                        {{$siswas->nama}}
                        </span> 
                    </div>

                @if($siswas->pembayaran->isEmpty())

                <div class="mt-3 mb-3">
                    <svg class="mx-auto mb-4 text-yellow-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <p class="text-sm font-normal text-gray-600">Belum ada data pembayaran</p>
                

                    
                    
 
                </div>
                @else 
                
                @foreach($siswas->pembayaran as $bayar)
                <a href="/operator/bayar/{{$bayar->id}}" class="hover:bg-indigo-100 rounded px-3 py-3 border border-indigo-400 bg-white shadow mt-4 text-gray-500 flex items-center justify-between">
                    <div>
                        <span class="font-extrabold text-black">{{ $bayar->jenis }} <span class="text-xs text-gray-400">Kls</span> {{ $bayar->kelas }}</span> <span class="underline text-xs text-green-600 font-bold">Rp. {{ number_format($bayar->tanggungan) }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if($bayar->jenis === "SPP")
                            @if( ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) == 0 )
                            <div class="mr-1 text-red-600">
                                (Rp.{{ number_format(($bayar->tanggungan * 12) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }})
                            </div>
                            <div class="px-2 py-1 bg-red-600 rounded-md shadow text-white">Belum Bayar</div>
                            @elseif( ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) == ($bayar->tanggungan * 12))
                            <div class="mr-1 text-green-600">
                                (Rp.{{ number_format(($bayar->tanggungan * 12) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }})
                            </div>
                            <div class="px-2 py-1 bg-green-600 rounded-md shadow text-white">Lunas</div>
                            @elseif( ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) < ($bayar->tanggungan * 12))
                            <div class="mr-1 text-yellow-600">
                                (Rp.{{ number_format(($bayar->tanggungan * 12) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }})
                            </div>
                            <div class="px-2 py-1 bg-yellow-600 rounded-md shadow text-white">Belum Lunas</div>
                            @endif
                        @else 
                            @if( ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) == 0 )
                            <div class="mr-1 text-red-600">
                                (Rp.{{ number_format(($bayar->tanggungan) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }})
                            </div>
                            <div class="px-2 py-1 bg-red-600 rounded-md shadow text-white">Belum Bayar</div>
                            @elseif( ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) == ($bayar->tanggungan * 1))
                            <div class="mr-1 text-green-600">
                                (Rp.{{ number_format(($bayar->tanggungan) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }})
                            </div>
                            <div class="px-2 py-1 bg-green-600 rounded-md shadow text-white">Lunas</div>
                            @elseif( ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) < ($bayar->tanggungan * 1))
                            <div class="mr-1 text-yellow-600">
                                (Rp.{{ number_format(($bayar->tanggungan) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }})
                            </div>
                            <div class="px-2 py-1 bg-yellow-600 rounded-md shadow text-white">Belum Lunas</div> 
                            @endif
                        @endif
                    </div>
                </a>

                
                @endforeach
                
                @endif

                

                    <button data-modal-target="modal-{{$siswas->id}}" data-modal-toggle="modal-{{$siswas->id}}" class="text-white mt-3 flex w-full justify-center bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm items-center px-5 py-2.5 text-center me-2">
                        Buat data pembayaran
                    </button>

                    <div id="modal-{{$siswas->id}}" tabindex="-1" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-black/75" aria-modal="true" role="dialog">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow ">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="modal-{{$siswas->id}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                

                                <div class="px-6 py-6 lg:px-8 text-left">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 ">Buat Data Pembayaran</h3>
                                    <form class="space-y-6" action="{{ route('tambah.pembayaran') }}" method="post">
                                        @csrf

                                        <div>
                                            <label for="jenis" class="block  text-sm font-medium text-gray-900 ">Jenis Pembayaran</label>
                                            <select id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                <option selected>Pilih Jenis</option>
                                                <option value="SPP">SPP</option>
                                                <option value="Uang Gedung">Uang Gedung</option>
                                                <option value="PTS">PTS</option>
                                                <option value="PAS">PAS</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="tanggungan" class="">Besar Tanggungan (Jika SPP Rp./Bulan)</label>
                                            <input type="number" name="tanggungan" id="tanggungan" placeholder="Rp. ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                        </div>
                                        <div>
                                            <label for="kelas" class="">Kelas (Spp)</label>
                                            <input type="number" name="kelas" id="kelas" placeholder="isi tanggungan pada kelas berapa?" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                                        </div>

                                        <input type="hidden" name="id" value="{{$siswas->id}}">
   
                                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                                        
                                    </form>
                                </div>
                                
                                    
                                
                            </div>
                        </div>
                    </div>

                    <button data-modal-hide="popup-modal-{{$siswas->id}}" type="button" class="text-white mt-2 flex w-full justify-center bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm items-center px-5 py-2.5 text-center me-2">
                        Tutup
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



<div class="mt-3 px-4">
    <hr>
    

    <div id="tambah" tabindex="-1" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center bg-black/75" aria-modal="true" role="dialog">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="tambah">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                

                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 ">Tambah Data Siswa</h3>
                    <form class="space-y-6" action="{{ route('tambah.siswa') }}" method="post">
                        @csrf

                        <div>
                            <label for="nama" class="mb-1">Nama Siswa</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama Siswa ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                        </div>
                        
                        <div>
                            <label for="TA" class="mb-1">Tahun Masuk</label>
                            <input type="number" name="TA" id="TA" placeholder="contoh : 2023" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                        </div>

                        <div>
                            <label for="WA" class="mb-1">Nomor WhatsApp</label>
                            <input type="number" name="WA" id="WA" placeholder="WhatsApp Siswa ..." class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                        </div>

                        <div>                                
                            <label for="alamat" class="block mb-1 text-sm font-medium text-gray-900 ">Alamat Siswa</label>
                            <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Alamat Siswa ..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                        
                    </form>
                </div>
                
                    
                </div>
            </div>
        </div>
    </div>

    

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
                <svg class="mx-auto mb-4 text-green-600 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
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

@endsection