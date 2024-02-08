@extends('layouts.operator')

@section('Content')

<div class="relative flex">
    <label for="side" class="absolute top-3 left-2 h-8 w-8 bg-white shadow shadow-indigo-600 hover:bg-indigo-400 group transition-colors rounded-lg cursor-pointer">
        <svg class="h-8 w-8 p-0.5 text-indigo-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
        </svg>
    </label>
    

</div>

    


        <section class="bg-gray-50 dark:bg-gray-900 pr-2 pl-2 sm:pl-3 sm:pr-3  antialiased pt-5 mt-14">
        


        
<div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 my-5">
  <div class="flex justify-between">
    <div>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Grafik Kehadiran Siswa</p>
      <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white">
      @php 
        $total = 0;
        $sub = 0;
        @endphp

        @foreach($jumlahTanggal as $tanggal)
        @php 
        $total += $tanggal->jumlah;
        $sub += 1;
        @endphp
        @endforeach
        {{ ($total > 0) ? round($total/$sub, 0) : 0 }} Siswa/Bulan
      </h5>
      <p class="text-base font-normal text-gray-500 dark:text-gray-400">Rata Rata Siswa Berangkat</p>
    </div>
    
  </div>
  <div class="flex space-x-2">
    <div class="flex-1">
      <div id="area-chart" class=" h-96"></div>
    </div>
    <div class="w-1/4 rounded shadow bg-gray-100 p-4">
      <h1 class="font-bold text-lg">Sipaling Rajin</h1>
      <div class="grid grid-cols-1 mt-2 gap-2">
        @php 
        $i = 1;
        @endphp
          @foreach($ranking as $r)
          <div class="flex p-2 bg-white rounded shadow justify-between items-center">
            <div class="font-bold truncate">{{ $r->nama }}</div>
            <div class="flex space-x-2 items-center">
              <div class="flex items-center space-x-1">
                <span class="text-xs">Point:</span>
                <span class="p-1 bg-blue-600 rounded font-bold text-white px-2">
                  {{$r->kehadiran_count}}
                </span>
              </div>
              
              <a href="/print/sertifikat/{{$r->id}}/{{$i++}}/{{$bulan}}" class="p-1 rounded bg-green-600 hover:bg-green-500 text-white">
                <svg class="w-6 h-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z"></path>
                </svg>
              </a>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>

  <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
    <div class="flex justify-between items-center pt-5">
      <!-- Button -->
      <button
        id="dropdownDefaultButton"
        data-dropdown-toggle="lastDaysdropdown"
        data-dropdown-placement="bottom"
        class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
        type="button">
        Data pada Bulan ke- {{$bulan}}
        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>
      <!-- Dropdown menu -->
      <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
      <form action="" method="get">

        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 overflow-auto h-44" aria-labelledby="dropdownDefaultButton">

        <li>
            <button type="submit" name="bulan" value="1" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Januari
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="2" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Februari
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="3" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Maret
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="4" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            April
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="5" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Mei
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="6" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Juni
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="7" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Juli
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="8" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Agustus
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="9" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            September
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="10" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Oktober
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="11" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            November
            </button>
        </li>
        <li>
            <button type="submit" name="bulan" value="12" class="w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            Desember
            </button>
        </li>



        </ul>
        </form>
      </div>
      
    </div>
  </div>
</div>



    </section>
    
    <div class="flex items-center px-4">
        <svg class="w-6 h-6 mr-1" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:currentColor;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
        <span class="font-bold text-lg">
            Kehadiran Siswa
        </span>
        <form action="" method="get" class="ml-3 grid grid-cols-2">
        <div>
            <input type="date" name="tanggal" id="tanggal" placeholder="Mata Pelajaran" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>
        <div>

            <button type="submit" class="ml-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
            <button type="submit" name="pdf" value="pdf" class="ml-3 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cetak PDF</button>
        </div>
        </form>

    </div>
    <div class="mt-5 px-5">
        

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jam Absen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $absen)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$absen->siswa->nama}}
                        </th>
                        <td class="px-6 py-4">
                            {{$absen->waktu}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="text-xs text-gray-800 uppercase bg-gray-200 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" colspan="2" class="px-6 py-3 text-center font-extrabold">
                            Total Kehadiran Hari Ini
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ number_format($siswa->count()) }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>

    <script>
  window.addEventListener("load", function() {
    let options = {
      chart: {
        height: "100%",
        maxWidth: "100%",
        type: "area",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      tooltip: {
        enabled: true,
        x: {
          show: false,
        },
      },
      fill: {
        type: "gradient",
        gradient: {
          opacityFrom: 0.55,
          opacityTo: 0,
          shade: "#1C64F2",
          gradientToColors: ["#1C64F2"],
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        width: 6,
      },
      grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
          left: 2,
          right: 2,
          top: 0
        },
      },
      series: [
        {
          name: "Jumlah Siswa",
          data: [
            @foreach($jumlahTanggal as $tanggal)
            "{{$tanggal->jumlah}}",
            @endforeach
          ],
          color: "#1A56DB",
        },
      ],
      xaxis: {
        categories: [
            @foreach($jumlahTanggal as $tgl)
        "{{$tgl->tanggal}}",
        @endforeach
        ],
        labels: {
          show: true,
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
      },
      yaxis: {
        show: true,
      },
    }

    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("area-chart"), options);
      chart.render();
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection