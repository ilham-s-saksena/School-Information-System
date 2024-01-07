@extends('layouts.operator')

@section('Content')

<div class="relative flex w-2/3">
    <label for="side" class="absolute top-3 left-2 h-8 w-8 bg-white shadow shadow-indigo-600 hover:bg-indigo-400 group transition-colors rounded-lg cursor-pointer">
    <svg class="h-8 w-8 p-0.5 text-indigo-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
    </svg>
    </label>
    <div class="flex items-center mt-14 px-4">
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 17.4998C6.41783 17.186 6.9372 17 7.5 17C8.88071 17 10 18.1193 10 19.5C10 20.0628 9.81403 20.5822 9.50018 21M18 17.4998C17.5822 17.186 17.0628 17 16.5 17C15.1193 17 14 18.1193 14 19.5C14 20.0628 14.186 20.5822 14.4998 21M17.9999 9.99995C18.9883 9.99918 19.5064 9.98663 19.908 9.78201C20.2843 9.59027 20.5903 9.28431 20.782 8.90798C21 8.48016 21 7.9201 21 6.8V6.2C21 5.0799 21 4.51984 20.782 4.09202C20.5903 3.71569 20.2843 3.40973 19.908 3.21799C19.4802 3 18.9201 3 17.8 3H6.2C5.0799 3 4.51984 3 4.09202 3.21799C3.71569 3.40973 3.40973 3.71569 3.21799 4.09202C3 4.51984 3 5.0799 3 6.2V6.8C3 7.9201 3 8.48016 3.21799 8.90798C3.40973 9.28431 3.71569 9.59027 4.09202 9.78201C4.49359 9.98663 5.01167 9.99918 6.00005 9.99995M17.9999 9.99995C18 10.0646 18 10.1312 18 10.2V17.8C18 18.9201 18 19.4802 17.782 19.908C17.5903 20.2843 17.2843 20.5903 16.908 20.782C16.4802 21 15.9201 21 14.8 21H9.2C8.07989 21 7.51984 21 7.09202 20.782C6.71569 20.5903 6.40973 20.2843 6.21799 19.908C6 19.4802 6 18.9201 6 17.8V10.2C6 10.1312 6 10.0646 6.00005 9.99995M17.9999 9.99995C17.9992 9.01163 17.9866 8.49358 17.782 8.09202C17.5903 7.71569 17.2843 7.40973 16.908 7.21799C16.4802 7 15.9201 7 14.8 7H9.2C8.0799 7 7.51984 7 7.09202 7.21799C6.71569 7.40973 6.40973 7.71569 6.21799 8.09202C6.01338 8.49358 6.00082 9.01163 6.00005 9.99995M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    <span class="font-bold text-lg">
        Menu Bayar SPP
    </span>
    </div>
</div>

<div class="mt-3 px-6 flex items-center justify-between space-x-2">

<div class="w-1/2">
    <div class="border border-indigo-600 grid grid-cols-2 w-full">
        <div class="border border-indigo-600 px-2 flex items-center font-bold">
            Nama
        </div>
        <div class="border border-indigo-600 px-2 flex items-center">
            {{ $bayar->siswas->nama }}
        </div>
        <div class="border border-indigo-600 px-2 flex items-center font-bold">
            Jenis Pembayaran
        </div>
        <div class="border border-indigo-600 px-2 flex items-center">
            {{ $bayar->jenis }}
        </div>
        <div class="border border-indigo-600 px-2 flex items-center font-bold">
            Kelas
        </div>
        <div class="border border-indigo-600 px-2 flex items-center">
            {{ $bayar->kelas }}
        </div>
        <div class="border border-indigo-600 px-2 flex items-center font-bold">
            Besar Tanggungan
        </div>
        <div class="border border-indigo-600 px-2 flex items-center">
            Rp. {{ number_format($bayar->tanggungan) }}/Bulan
        </div>
        <div class="border border-indigo-600 px-2 flex items-center font-bold">
            Sisa Tanggungan
        </div>
        <div class="border border-indigo-600 px-2 flex items-center">
            @if ($bayar->jenis == 'SPP')
            Rp. {{ number_format(($bayar->tanggungan * 12) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }}
            @else
            Rp. {{ number_format(($bayar->tanggungan * 1) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }}
            
            @endif        
        </div>
    </div>
</div>

<div class="flex-1">
    <div class="flex items-center justify-center">
        <button type="button" data-modal-toggle="createProductModal-{{ $bayar->id }}" data-modal-target="createProductModal-{{ $bayar->id }}" class="p-4 rounded-full border-2 border-white bg-indigo-400 shadow-lg text-white transition-colors hover:bg-white hover:border-indigo-400 hover:text-indigo-400 focus:ring-2 focus:ring-offset-2">
        <svg class="w-20 h-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 17.4998C6.41783 17.186 6.9372 17 7.5 17C8.88071 17 10 18.1193 10 19.5C10 20.0628 9.81403 20.5822 9.50018 21M18 17.4998C17.5822 17.186 17.0628 17 16.5 17C15.1193 17 14 18.1193 14 19.5C14 20.0628 14.186 20.5822 14.4998 21M17.9999 9.99995C18.9883 9.99918 19.5064 9.98663 19.908 9.78201C20.2843 9.59027 20.5903 9.28431 20.782 8.90798C21 8.48016 21 7.9201 21 6.8V6.2C21 5.0799 21 4.51984 20.782 4.09202C20.5903 3.71569 20.2843 3.40973 19.908 3.21799C19.4802 3 18.9201 3 17.8 3H6.2C5.0799 3 4.51984 3 4.09202 3.21799C3.71569 3.40973 3.40973 3.71569 3.21799 4.09202C3 4.51984 3 5.0799 3 6.2V6.8C3 7.9201 3 8.48016 3.21799 8.90798C3.40973 9.28431 3.71569 9.59027 4.09202 9.78201C4.49359 9.98663 5.01167 9.99918 6.00005 9.99995M17.9999 9.99995C18 10.0646 18 10.1312 18 10.2V17.8C18 18.9201 18 19.4802 17.782 19.908C17.5903 20.2843 17.2843 20.5903 16.908 20.782C16.4802 21 15.9201 21 14.8 21H9.2C8.07989 21 7.51984 21 7.09202 20.782C6.71569 20.5903 6.40973 20.2843 6.21799 19.908C6 19.4802 6 18.9201 6 17.8V10.2C6 10.1312 6 10.0646 6.00005 9.99995M17.9999 9.99995C17.9992 9.01163 17.9866 8.49358 17.782 8.09202C17.5903 7.71569 17.2843 7.40973 16.908 7.21799C16.4802 7 15.9201 7 14.8 7H9.2C8.0799 7 7.51984 7 7.09202 7.21799C6.71569 7.40973 6.40973 7.71569 6.21799 8.09202C6.01338 8.49358 6.00082 9.01163 6.00005 9.99995M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </button>
    </div>
</div>

<div id="createProductModal-{{ $bayar->id }}" tabindex="-1" aria-hidden="true" class="bg-black/50 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 text-center dark:text-white">FORM PEMBAYARAN SPP</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createProductModal-{{ $bayar->id }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ url('operator/bayar/spp') }}/{{ $bayar->id }}" method="post">
                @csrf
                <dl class="grid grid-cols-2 gap-4 mb-4 mt-2">

                    <div class="col-span-2 p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Nama Siswa</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            {{ $bayar->siswas->nama }}
                        </dd>
                    </div>
                    
                    <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">SPP Kelas</dt>
                        <dd class="text-gray-500 dark:text-gray-400">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-0.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                Kelas : {{ $bayar->kelas }}
                            </span>
                        </dd>
                    </div>
                </dl>

                <div class="grid grid-cols-2 gap-4 mt-3 border border-gray-200 bg-gray-100 rounded-md p-2">
                    <div class=" ">
                        <label for="bulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
                        <select name="bulan" id="bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            {!! ($bayar->Juli < $bayar->tanggungan) ? "<option value='Juli'>Juli</option>" : "" !!}
                            {!! ($bayar->Agustus < $bayar->tanggungan) ? "<option value='Agustus'>Agustus</option>" : "" !!}
                            {!! ($bayar->September < $bayar->tanggungan) ? "<option value='September'>September</option>" : "" !!}
                            {!! ($bayar->Oktober < $bayar->tanggungan) ? "<option value='Oktober'>Oktober</option>" : "" !!}
                            {!! ($bayar->November < $bayar->tanggungan) ? "<option value='November'>November</option>" : "" !!}
                            {!! ($bayar->Desember < $bayar->tanggungan) ? "<option value='Desember'>Desember</option>" : "" !!}
                            {!! ($bayar->Januari < $bayar->tanggungan) ? "<option value='Januari'>Januari</option>" : '' !!}
                            {!! ($bayar->Februari < $bayar->tanggungan) ? "<option value='Februari'>Februari</option>" : "" !!}
                            {!! ($bayar->Maret < $bayar->tanggungan) ? "<option value='Maret'>Maret</option>" : "" !!}
                            {!! ($bayar->April < $bayar->tanggungan) ? "<option value='April'>April</option>" : "" !!}
                            {!! ($bayar->Mei < $bayar->tanggungan) ? "<option value='Mei'>Mei</option>" : "" !!}
                            {!! ($bayar->Juni < $bayar->tanggungan) ? "<option value='Juni'>Juni</option>" : "" !!}
                            
                        </select>

                        

                    </div>
                    <div>
                        <label for="bayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Bayar</label>
                        <input type="number" name="bayar" id="bayar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp. 100000" required="">
                    </div>

                    <div class="mt-2 text-sm text-gray-500 col-span-2">
                        *Pastikan <span class="underline">Jumlah Bayar</span> <span class="text-black font-bold unde">Kurang Dari</span> <span class="text-red-500 underline">Sisa Tanggungan SPP Siswa</span> agar tidak Error <br>
                        <span>*Sisa Tanggungan : 
                            <span class="font-bold text-red-600">
                                @if ($bayar->jenis == 'SPP')
                                Rp. {{ number_format(($bayar->tanggungan * 12) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }}
                                @else
                                Rp. {{ number_format(($bayar->tanggungan * 1) - ($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember)) }}
                                
                                @endif   
                            </span>
                        </span>
                    </div>
                    
                </div>
                
                <div class="items-center pt-3 mt-4 border-t space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <button class="w-full sm:w-auto text-white justify-center inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-1 -ml-1 w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                            </svg>
                        Bayar
                    </button>
                    <button data-modal-toggle="createProductModal-{{ $bayar->id }}" type="button" class="w-full justify-center sm:w-auto text-gray-50 inline-flex items-center bg-red-500 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-sm font-medium px-5 py-2.5 focus:z-10">
                        <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>





<div class="mt-3 w-full px-6 flex space-x-3">

<div class="overflow-x-hidden w-1/2">
    <table class="text-sm text-left text-gray-500 mb-2 w-full border-2 border-indigo-800">
        <thead class="text-xs text-gray-700 uppercase bg-indigo-200  ">
            <tr>
                <th scope="col" class="px-2 py-3">
                    Bulan
                </th>
                <th scope="col" class="px-2 py-3">
                    Nominal
                </th>
                
            </tr>
        </thead>
        <tbody class="text-xs">

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Juli
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Juli)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Agustus
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Agustus)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        September
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->September)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Oktober
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Oktober)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        November
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->November)}}
                </td>
            </tr>

            <tr class="border-b-2 border-indigo-500 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Desember
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Desember)}}
                </td>
            </tr>


            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Januari
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Januari)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Februari
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Februari)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Maret
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Maret)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        April
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->April)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Mei
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Mei)}}
                </td>
            </tr>

            <tr class="border-b border-indigo-200 hover:bg-indigo-100">
                <td class="py-2 px-1">
                        Juni
                </td>
                <td class="py-2 px-1">
                       Rp. {{number_format($bayar->Juni)}}
                </td>
            </tr>

            

        </tbody>
        <tfoot class="text-xs text-gray-700 uppercase bg-indigo-200  ">
            <tr>
                <th scope="col" class="px-2 py-3">
                    Total
                </th>
                <th scope="col" class="px-2 py-3">
                  Rp. {{ number_format($bayar->Januari + $bayar->Februari + $bayar->Maret + $bayar->April + $bayar->Mei + $bayar->Juni + $bayar->Juli + $bayar->Agustus + $bayar->September + $bayar->Oktober + $bayar->November + $bayar->Desember) }}
                </th>
            </tr>
        </tfoot>

    </table>
</div>


<div class="flex-1">

<div class="text-center py-2 bg-indigo-400 text-white">
    Riwayat Pembayaran
</div>

@if($riwayat->isEmpty())
<div class="text-center text-gray-500 text-sm py-2 border-b">
    Belum ada data riwayat pembayaran
</div>
@else
@foreach($riwayat as $pay)
<div class="text-center px-2 py-1 items-center bg-indigo-100 border-b border-indigo-400 text-gray-600 text-sm flex justify-between">
    <div>{{ $pay->tanggal }}</div>
    <div class="text-xs">{{ $pay->keterangan }}</div>
    <a href=" {{ url('operator/bayar/cetak-bukti/') }}/{{ $pay->id }} " class="p-1 bg-indigo-400 rounded hover:bg-indigo-500 text-white">
        <svg class="w-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z"></path>
        </svg>
    </a>
</div>
@endforeach
@endif



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