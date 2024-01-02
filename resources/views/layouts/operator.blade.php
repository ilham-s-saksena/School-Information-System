<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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


        
    </body>
</html>
