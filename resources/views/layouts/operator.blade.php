<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PKBM Harapan Bangsa</title>
        <link rel="icon" href="/favicon.png" type="image/png">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
       
<input id="side" type="checkbox" checked class="peer hidden">



  <aside class="fixed top-0 left-0 z-40 w-64 h-screen  transition-transform -translate-x-full bg-indigo-200 border-r border-gray-200 peer-checked:translate-x-0 ">
          
    <div class="overflow-y-auto relative py-2 px-3 h-full bg-indigo-200/50 ">

            <ul class="space-y-2">

                <li>
                  <div 
                  class="flex items-center p-0.5 text-base font-extrabold text-gray-900 rounded-lg  group">
                    <img src="/asset/logo.png" alt="" class="w-10 h-10">
                    <span class="ml-3">
                        PKBM Harbang
                    </span>
                  </div>
                </li>
                
                <li>
                    <nav class="w-full pb-4 px-1">
                        <div class="w-full bg-indigo-50 rounded-2xl p-1 shadow-lg">
                            <div class="rounded-2xl bg-indigo-400 flex justify-between items-center text-white  py-2">

                                

                                <div class="w-full flex justify-start items-center space-x-2 pr-2">

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

                                    

                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center rounded-xl hover:bg-teal-700 p-0.5 focus:ring pr-1 group">
                                        <div class=" mr-1">
                                            <div class="h-3.5 w-3 relative">
                                                <div class="absolute h-1 w-1 bg-white rounded-full left-1/2 -top-1 group-hover:top-full transition-all"></div>
                                                <div class="absolute h-1 w-1 bg-white rounded-full left-1/2 -translate-y-1/2 top-1/2"></div>
                                                <div class="absolute h-1 w-1 bg-white rounded-full left-1/2 -bottom-1 group-hover:bottom-full transition-all"></div>
                                            </div>
                                        </div>
                                        <img src="/img/{{ Auth::user()->foto }}" alt="profile" class="w-10 rounded-xl">
                                    </button>

                                    <div class="flex flex-col text-xs">
                                        <span class="font-medium text-sm">{{ Auth::user()->name }}</span>
                                        <span class="text-xs">{{ Auth::user()->email}}</span>
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
                </li>

              <li>
                <a href="/list_siswa"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 ">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  "  version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:currentColor;} </style> <g> <path class="st0" d="M473.61,63.16L276.16,2.927C269.788,0.986,263.004,0,256.001,0c-7.005,0-13.789,0.986-20.161,2.927 L38.386,63.16c-3.457,1.064-5.689,3.509-5.689,6.25c0,2.74,2.232,5.186,5.691,6.25l91.401,27.88v77.228 c0.023,39.93,13.598,78.284,38.224,107.981c11.834,14.254,25.454,25.574,40.483,33.633c15.941,8.564,32.469,12.904,49.124,12.904 c16.646,0,33.176-4.34,49.126-12.904c22.597-12.143,42.04-31.646,56.226-56.39c14.699-25.683,22.471-55.155,22.478-85.224v-78.214 l45.244-13.804v64.192c-6.2,0.784-11.007,6.095-11.007,12.5c0,5.574,3.649,10.404,8.872,12.011l-9.596,63.315 c-0.235,1.576,0.223,3.168,1.262,4.386c1.042,1.204,2.554,1.902,4.148,1.902h36.273c1.592,0,3.104-0.699,4.148-1.91 c1.036-1.203,1.496-2.803,1.262-4.386l-9.596-63.307c5.223-1.607,8.872-6.436,8.872-12.011c0-6.405-4.81-11.716-11.011-12.5V81.544 l19.292-5.885c3.457-1.064,5.691-3.517,5.691-6.25C479.303,66.677,477.069,64.223,473.61,63.16z M257.62,297.871 c-10.413,0-20.994-2.842-31.448-8.455c-16.194-8.649-30.908-23.564-41.438-42.011c-4.854-8.478-8.796-17.702-11.729-27.445 c60.877-10.776,98.51-49.379,119.739-80.97c10.242,20.776,27.661,46.754,54.227,58.648c-3.121,24.984-13.228,48.812-28.532,67.212 c-8.616,10.404-18.773,18.898-29.375,24.573C278.606,295.029,268.025,297.871,257.62,297.871z"></path> <path class="st0" d="M373.786,314.23l-1.004-0.629l-110.533,97.274L151.714,313.6l-1.004,0.629 c-36.853,23.036-76.02,85.652-76.02,156.326v0.955l0.846,0.45C76.291,472.365,152.428,512,262.249,512 c109.819,0,185.958-39.635,186.712-40.038l0.846-0.45v-0.955C449.808,399.881,410.639,337.265,373.786,314.23z"></path> </g> </g></svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">
                        Daftar Siswa
                    </span>
                    </a>
              </li>

              <li>
                <a href="/kehadiran_siswa"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 ">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:currentColor;} </style> <g> <path class="st0" d="M505.837,180.418L279.265,76.124c-7.349-3.385-15.177-5.093-23.265-5.093c-8.088,0-15.914,1.708-23.265,5.093 L6.163,180.418C2.418,182.149,0,185.922,0,190.045s2.418,7.896,6.163,9.627l226.572,104.294c7.349,3.385,15.177,5.101,23.265,5.101 c8.088,0,15.916-1.716,23.267-5.101l178.812-82.306v82.881c-7.096,0.8-12.63,6.84-12.63,14.138c0,6.359,4.208,11.864,10.206,13.618 l-12.092,79.791h55.676l-12.09-79.791c5.996-1.754,10.204-7.259,10.204-13.618c0-7.298-5.534-13.338-12.63-14.138v-95.148 l21.116-9.721c3.744-1.731,6.163-5.504,6.163-9.627S509.582,182.149,505.837,180.418z"></path> <path class="st0" d="M256,346.831c-11.246,0-22.143-2.391-32.386-7.104L112.793,288.71v101.638 c0,22.314,67.426,50.621,143.207,50.621c75.782,0,143.209-28.308,143.209-50.621V288.71l-110.827,51.017 C278.145,344.44,267.25,346.831,256,346.831z"></path> </g> </g></svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">
                        Absensi Siswa
                    </span>
                  </a>
              </li>

              @if(Auth::user()->role == 10)
              <li>
                <a href="{{ route('op.dashboard') }}"
                class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg {{ (Route::currentRouteName() === 'op.dashboard') ? 'bg-gray-100 ' : 'hover:bg-gray-100 ' }} group">
                  <svg aria-hidden="true" class="w-6 h-6 {{ (Route::currentRouteName() === 'op.dashboard') ? 'text-gray-900' : 'text-gray-500  group-hover:text-gray-900 ' }} transition duration-75"  
                   version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:currentColor;} </style> <g> <path class="st0" d="M116.738,231.551c0,23.245,14.15,43.315,34.513,49.107c15.262,42.368,55.574,70.776,100.582,70.776 s85.32-28.408,100.58-70.776c20.365-5.792,34.515-25.854,34.515-49.107c0-15.691-6.734-30.652-18.061-40.248l1.661-8.921 c0-3.323-0.229-6.568-0.491-9.821l-0.212-2.593l-2.213,1.374c-30.871,19.146-80.885,27.71-116.754,27.71 c-34.85,0-83.895-8.214-114.902-26.568l-2.259-0.59l-0.188,2.554c-0.192,2.632-0.384,5.256-0.357,8.23l1.632,8.649 C123.466,200.923,116.738,215.876,116.738,231.551z"></path> <path class="st0" d="M356.151,381.077c-9.635-5.97-18.734-11.607-26.102-17.43l-0.937-0.738l-0.972,0.691 c-6.887,4.914-31.204,30.17-51.023,51.172l-10.945-21.273l5.697-4.076v-20.854h-40.07v20.854l5.697,4.076l-10.949,21.281 c-19.825-21.009-44.154-46.265-51.034-51.18l-0.973-0.691l-0.937,0.738c-7.368,5.823-16.469,11.46-26.102,17.43 c-30.029,18.61-64.062,39.697-64.062,77.344c0,22.244,52.241,53.579,168.388,53.579c116.146,0,168.388-31.335,168.388-53.579 C420.213,420.774,386.178,399.687,356.151,381.077z"></path> <path class="st0" d="M131.67,131.824c0,18.649,56.118,42.306,119.188,42.306s119.188-23.656,119.188-42.306v-25.706l43.503-17.702 v55.962c-5.068,0.792-8.964,5.186-8.964,10.45c0,4.503,2.966,8.432,7.242,9.852l-8.653,57.111h40.704l-8.651-57.111 c4.27-1.421,7.232-5.35,7.232-9.852c0-5.295-3.919-9.697-9.014-10.466l-0.21-67.197c0.357-0.621,0.357-1.266,0.357-1.607 c0-0.342,0-0.978-0.149-0.978h-0.002c-0.262-2.446-2.011-4.612-4.56-5.652l-11.526-4.72L267.551,3.238 C262.361,1.118,256.59,0,250.858,0s-11.502,1.118-16.69,3.238L72.834,68.936c-2.863,1.172-4.713,3.773-4.713,6.622 c0,2.842,1.848,5.443,4.716,6.63l58.833,23.928V131.824z"></path> </g> </g></svg>
                  <span class="ml-3">
                      SPP Siswa
                  </span>
                </a>
              </li>

              <li>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 ">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m 12.7765,2.551 -4.02,0 0,0.744 1.185,0 0,1.177 -1.185,0 0,0.375 1.185,0 0,1.1785 -1.185,0 0,0.3855 1.185,0 0,1.1145 -1.185,0 0,0.4465 1.185,0 0,1.117 -1.185,0 0,0.4465 1.185,0 0,1.1235 -1.185,0 0,0.8195 4.02,0 c 0.0635,-0.019 0.1165,-0.094 0.159,-0.224 C 12.978,11.1235 13,11.017 13,10.9365 L 13,2.687 C 13,2.623 12.978,2.5845 12.9355,2.571 12.893,2.558 12.84,2.551 12.7765,2.551 Z m -0.5215,8.107 -1.9285,0 0,-1.1225 1.9285,0 0,1.1235 0,-0.001 z m 0,-1.569 -1.9285,0 0,-1.1175 1.9285,0 0,1.1175 z m 0,-1.564 -1.9285,0 0,-1.1095 1.9285,0 0,1.1105 0,-10e-4 z m 0,-1.5 -1.9285,0 0,-1.177 1.9285,0 0,1.1775 0,-5e-4 z m 0,-1.5595 -1.9285,0 0,-1.17 1.9285,0 0,1.1775 0,-0.0075 z M 1,2.3655 1,11.666 8.08,12.8905 8.08,1.1095 1,2.3695 1,2.3655 Z M 5.1965,9.401 C 5.1695,9.328 5.0425,9.018 4.8175,8.4695 4.593,7.9215 4.4575,7.6025 4.418,7.5115 l -0.0125,0 L 3.646,9.319 2.631,9.2505 l 1.204,-2.25 -1.1025,-2.25 1.035,-0.0545 0.684,1.7605 0.0135,0 L 5.2375,4.616 6.307,4.5485 5.0335,6.9835 6.346,9.4675 5.1965,9.4 l 0,10e-4 z"></path></g></svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">
                        Import Data Siswa (.xlsx)
                    </span>
                  </button>
              </li>
              
              <li>
                <a href="{{ route('op.naik.kelas') }}"
                class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg {{ (Route::currentRouteName() === 'op.naik.kelas') ? 'bg-gray-100 ' : 'hover:bg-gray-100 ' }} group">
                  <svg aria-hidden="true" class="w-6 h-6 {{ (Route::currentRouteName() === 'op.naik.kelas') ? 'text-gray-900' : 'text-gray-500  group-hover:text-gray-900 ' }} transition duration-75"  
                   data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z"></path>
                    </svg>
                  <span class="ml-3">
                      Tahun Ajaran Baru
                  </span>
                </a>
              </li>

              @endif

              <li>
                <a href="/qrCode"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 ">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">
                        Generate Qr Siswa
                    </span>
                    </a>
              </li>


              <li>
                <button type="button" aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication"
                  class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 ">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"clip-rule="evenodd"></path></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap">
                      Authentication
                  </span>
                  <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
    
                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                  <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 ">
                          Sign Out
                    </button>
                  </form>
                  
                </ul>
              </li>
            </ul>
    
            <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
              
              <li>
                <a href="#"
                  class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100  group">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                  <span class="ml-3">
                      Help
                  </span>
                </a>
              </li>
            </ul>
          </div>
    
          <!-- <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20">
            <a href="#" data-tooltip-target="tooltip-settings"
              class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer  dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
              <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"clip-rule="evenodd"></path></svg>
            </a>
    
            <div id="tooltip-settings" role="tooltip"
              class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
              Settings page
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div> -->
    
    </div>
  </aside>


  <section class="max-w-screen min-h-screen bg-indigo-50 peer-checked:pl-64 pl-0 transition-all ">
  @yield('Content')

  </section>



  <div id="popup-modal" tabindex="-1" class="hidden bg-black/50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <form class="p-4 md:p-5 text-center" method="post" action="/operator/import-excel" enctype="multipart/form-data">
                <svg class="mx-auto mb-4 text-green-400 w-12 h-12 dark:text-gray-200" fill="currentColor" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m 12.7765,2.551 -4.02,0 0,0.744 1.185,0 0,1.177 -1.185,0 0,0.375 1.185,0 0,1.1785 -1.185,0 0,0.3855 1.185,0 0,1.1145 -1.185,0 0,0.4465 1.185,0 0,1.117 -1.185,0 0,0.4465 1.185,0 0,1.1235 -1.185,0 0,0.8195 4.02,0 c 0.0635,-0.019 0.1165,-0.094 0.159,-0.224 C 12.978,11.1235 13,11.017 13,10.9365 L 13,2.687 C 13,2.623 12.978,2.5845 12.9355,2.571 12.893,2.558 12.84,2.551 12.7765,2.551 Z m -0.5215,8.107 -1.9285,0 0,-1.1225 1.9285,0 0,1.1235 0,-0.001 z m 0,-1.569 -1.9285,0 0,-1.1175 1.9285,0 0,1.1175 z m 0,-1.564 -1.9285,0 0,-1.1095 1.9285,0 0,1.1105 0,-10e-4 z m 0,-1.5 -1.9285,0 0,-1.177 1.9285,0 0,1.1775 0,-5e-4 z m 0,-1.5595 -1.9285,0 0,-1.17 1.9285,0 0,1.1775 0,-0.0075 z M 1,2.3655 1,11.666 8.08,12.8905 8.08,1.1095 1,2.3695 1,2.3655 Z M 5.1965,9.401 C 5.1695,9.328 5.0425,9.018 4.8175,8.4695 4.593,7.9215 4.4575,7.6025 4.418,7.5115 l -0.0125,0 L 3.646,9.319 2.631,9.2505 l 1.204,-2.25 -1.1025,-2.25 1.035,-0.0545 0.684,1.7605 0.0135,0 L 5.2375,4.616 6.307,4.5485 5.0335,6.9835 6.346,9.4675 5.1965,9.4 l 0,10e-4 z"></path></g>
                </svg>
    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Import Data Siswa dari Excel, Upload Data pada Form dibawah ini</h3>
    @csrf
    <div class="flex items-center justify-center w-full">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div id="file-info" class="hidden">
                <svg class="mx-auto mb-4 text-green-400 w-12 h-12 dark:text-gray-200" fill="currentColor" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m 12.7765,2.551 -4.02,0 0,0.744 1.185,0 0,1.177 -1.185,0 0,0.375 1.185,0 0,1.1785 -1.185,0 0,0.3855 1.185,0 0,1.1145 -1.185,0 0,0.4465 1.185,0 0,1.117 -1.185,0 0,0.4465 1.185,0 0,1.1235 -1.185,0 0,0.8195 4.02,0 c 0.0635,-0.019 0.1165,-0.094 0.159,-0.224 C 12.978,11.1235 13,11.017 13,10.9365 L 13,2.687 C 13,2.623 12.978,2.5845 12.9355,2.571 12.893,2.558 12.84,2.551 12.7765,2.551 Z m -0.5215,8.107 -1.9285,0 0,-1.1225 1.9285,0 0,1.1235 0,-0.001 z m 0,-1.569 -1.9285,0 0,-1.1175 1.9285,0 0,1.1175 z m 0,-1.564 -1.9285,0 0,-1.1095 1.9285,0 0,1.1105 0,-10e-4 z m 0,-1.5 -1.9285,0 0,-1.177 1.9285,0 0,1.1775 0,-5e-4 z m 0,-1.5595 -1.9285,0 0,-1.17 1.9285,0 0,1.1775 0,-0.0075 z M 1,2.3655 1,11.666 8.08,12.8905 8.08,1.1095 1,2.3695 1,2.3655 Z M 5.1965,9.401 C 5.1695,9.328 5.0425,9.018 4.8175,8.4695 4.593,7.9215 4.4575,7.6025 4.418,7.5115 l -0.0125,0 L 3.646,9.319 2.631,9.2505 l 1.204,-2.25 -1.1025,-2.25 1.035,-0.0545 0.684,1.7605 0.0135,0 L 5.2375,4.616 6.307,4.5485 5.0335,6.9835 6.346,9.4675 5.1965,9.4 l 0,10e-4 z"></path></g>
                </svg>
                <p id="file-name" class="text-xs text-gray-500 dark:text-gray-400">pastikan upload file excel (xlsx)</p>
                
            </div>
            <div id="remove" class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">pastikan upload file excel (xlsx)</p>
            </div>
            <input id="dropzone-file" name="dataExcel" type="file" class="hidden" accept=".xlsx" onchange="displayFileInfo(this)" />
        </label>
    </div> 

    <button type="submit" class="text-white mt-5 bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
        Import
    </button>
</form>
        </div>
    </div>
</div>


<script>
function displayFileInfo(input) {
    const fileInfoContainer = document.getElementById('file-info');
    const fileNameContainer = document.getElementById('file-name');
    const remove = document.getElementById('remove');

    if (input.files.length > 0) {
        fileInfoContainer.classList.remove('hidden');
        remove.classList.add('hidden');
        fileNameContainer.innerText = input.files[0].name;
    } else {
        fileInfoContainer.classList.add('hidden');
        fileNameContainer.innerText = '';
    }
}
</script>
    </body>
</html>
