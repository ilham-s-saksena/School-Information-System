
@extends('layouts.admin')

@section('Content')

@php 
$total = 0;
@endphp

    <div class="relative flex">
      <label for="side" class="absolute top-3 left-2 h-8 w-8 bg-white shadow shadow-indigo-600 hover:bg-indigo-400 group transition-colors rounded-lg cursor-pointer">
        <svg class="h-8 w-8 p-0.5 text-indigo-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
        </svg>
      </label>
      <div class="flex items-center mt-14 px-4">
        <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
        </svg>
        <span class="font-bold text-lg">
          Absensi Tutor PKBM Harapan Bangsa
        </span>
      </div>
    </div>


    <!-- FILER -->
    <form method="get" action="{{route('admin.dashboard')}}" class="px-4 my-3">
      @csrf
      <div class="w-full bg-indigo-400 px-2 pb-2">
        <div class="flex text-white font-bold py-2">
          <svg fill="currentColor" class="w-5 mr-1" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z"></path>
          </svg>
          Filter
        </div>
        
      <div class="flex space-x-2">

        <div class="p-2 bg-indigo-50 rounded w-fit">
          <div class="font-bold text-indigo-500 ">Bulan</div>
          <div class="flex space-x-3 px-2">
            
            <div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(1, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="jan" value="1" class="rounded text-indigo-400 ring-indigo-400">
                <label for="jan" class="">Januari</label>
              </div>

              <div class="flex items-center space-x-2">
                <input {{ (in_array(2, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="feb" value="2" class="rounded text-indigo-400 ring-indigo-400">
                <label for="feb" class="">Februari</label>
              </div>
            </div>

            <div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(3, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="mar" value="3" class="rounded text-indigo-400 ring-indigo-400">
                <label for="mar" class="">Maret</label>
              </div>

              <div class="flex items-center space-x-2">
                <input {{ (in_array(4, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="apr" value="4" class="rounded text-indigo-400 ring-indigo-400">
                <label for="apr" class="">April</label>
              </div>
            </div>

            <div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(5, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="mei" value="5" class="rounded text-indigo-400 ring-indigo-400">
                <label for="mei" class="">Mei</label>
              </div>

              <div class="flex items-center space-x-2">
                <input {{ (in_array(6, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="jun" value="6" class="rounded text-indigo-400 ring-indigo-400">
                <label for="jun" class="">Juni</label>
              </div>
              
            </div>

            <div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(7, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="jul" value="7" class="rounded text-indigo-400 ring-indigo-400">
                <label for="jul" class="">Juli</label>
              </div>

              <div class="flex items-center space-x-2">
                <input {{ (in_array(8, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="agu" value="8" class="rounded text-indigo-400 ring-indigo-400">
                <label for="agu" class="">Agustus</label>
              </div>
            </div>

            <div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(9, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="sep" value="9" class="rounded text-indigo-400 ring-indigo-400">
                <label for="sep" class="">September</label>
              </div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(10, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="okt" value="10" class="rounded text-indigo-400 ring-indigo-400">
                <label for="okt" class="">Oktober</label>
              </div>
            </div>

            <div>
              <div class="flex items-center space-x-2">
                <input {{ (in_array(11, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="nov" value="11" class="rounded text-indigo-400 ring-indigo-400">
                <label for="nov" class="">November</label>
              </div>

              <div class="flex items-center space-x-2">
                <input {{ (in_array(12, $months)) ? 'checked' : '' }}
                 type="checkbox" name="bulan[]" id="des" value="12" class="rounded text-indigo-400 ring-indigo-400">
                <label for="des" class="">Desember</label>
              </div>
            </div>

          </div>
        </div>
      

        <div class="p-2 bg-indigo-50 rounded w-fit flex-1">
          <div>
            <div class="font-bold text-indigo-500">Tahun</div>
            <div class="px-2">
              <input value="{{ $year }}" type="number" name="tahun" class="rounded-lg border-2 border-indigo-400  text-gray-800 w-full">
            </div>
          </div>
          
        </div>

        <button class="px-5 border-2 border-indigo-50 rounded w-fit flex text-white font-bold bg-indigo-600 items-center justify-center hover:bg-indigo-300 focus:ring focus:ring-offset-1 focus:ring-indigo-50" type="submit">Submit</button>
        <button name="cetak" value="pdf" class="px-5 border-2 border-indigo-50 rounded w-fit flex text-white font-bold bg-red-600 items-center justify-center hover:bg-red-300 focus:ring focus:ring-offset-1 focus:ring-red-50" type="submit">PDF</button>

      </div>
      </div>
    </form>


    <!-- RINCIAN -->
    <div class="px-4 mt-4">


    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-indigo-100 text-indigo-600">
      
    @foreach($user as $users)
      <h2 id="accordion-color-heading-{{ $users->id }}">
        <button data-accordion-target="#accordion-color-body-{{$users->id}}" aria-expanded="false" aria-controls="accordion-color-body-{{$users->id}}" type="button" 
            class="flex mb-2 items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border-2 border-indigo-400 rounded-md focus:ring focus:ring-offset-1 focus:ring-blue-200  hover:bg-blue-100  gap-3">
          
            <span class="flex justify-between flex-1">
              {{ $users->name }}
              <span class="flex items-center">

                <p class="text-black ml-2 underline font-bold">
                  {{ $users->absensi->count() }} JPL
                </p>
                <p class="ml-3 bg-green-400 text-white px-2 rounded">
                  @php 
                  $total += $users->absensi->count() * $users->index;
                  @endphp
                  Rp. {{ number_format($users->absensi->count() * $users->index) }}
                </p>
              </span> 
            </span>
          
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        
        </button>
      </h2>

      <div id="accordion-color-body-{{$users->id}}" aria-labelledby="accordion-color-heading-{{ $users->id }}" class="hidden">
        <div class="p-5 mt-1 border rounded-md border-indigo-400 bg-white">

          <table class="w-full text-sm text-left text-gray-500 mb-2">
            <thead class="text-xs text-gray-700 uppercase bg-blue-50  ">
                <tr>
                    <th scope="col" class="px-2 py-3">
                        Tgl
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Kelas
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Mapel
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Jam
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs">

              @foreach($users->absensi as $absensi)
                <tr class="border-b border-blue-100 hover:bg-indigo-100">
                    <td class="py-2 px-1">
                         {{ $absensi->tanggal }} 
                    </td>
                    <td class="py-2 px-1">
                         {{ $absensi->kelas }} 
                    </td>
                    <td class="py-2 px-1">
                         {{ $absensi->mapel }} 
                    </td>
                    <td class="py-2 px-1">
                         {{ $absensi->waktu }}
                    </td>
                </tr>
              @endforeach

               

            </tbody>
          </table>

        </div>
      </div>
      @endforeach


      <div class="text-center w-full sticky bottom-10 flex justify-center mb-10">
        <div class=" bg-indigo-400/75 w-1/2 font-extrabold py-3 rounded-xl border-4 border-white shadow-lg">
          Total : Rp. <span class="underline text-lg">{{ number_format($total) }}</span>
        </div>
      </div>

      
      
    </div>

    </div>


@endsection 
