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
                <a href="{{ route('admin.dashboard') }}"
                  class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg {{ (Route::currentRouteName() === 'admin.dashboard') ? 'bg-gray-100 ' : 'hover:bg-gray-100 ' }} group">
                  <svg aria-hidden="true" class="w-6 h-6 {{ (Route::currentRouteName() === 'admin.dashboard') ? 'text-gray-900' : 'text-gray-500  group-hover:text-gray-900 ' }} transition duration-75" 
                  fill="currentColor"  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M302.195,11.833H13.049C5.842,11.833,0,17.675,0,24.882v214.289c0,7.207,5.842,13.049,13.049,13.049h283.839 l-34.352-21.329c-2.247-1.396-4.282-3.002-6.109-4.768H26.097V37.93h263.049v126.703c4.01,0.847,7.943,2.39,11.625,4.677 l14.473,8.986V24.882C315.244,17.675,309.402,11.833,302.195,11.833z"></path> </g> </g> <g> <g> <path d="M216.857,134.337c-4.352-3.43-10.665-2.685-14.097,1.668c-3.432,4.353-2.686,10.665,1.668,14.097l44.279,34.914 c0.63-1.371,1.34-2.719,2.156-4.034c2.883-4.643,6.649-8.401,10.94-11.206L216.857,134.337z"></path> </g> </g> <g> <g> <circle cx="419.71" cy="81.405" r="37.557"></circle> </g> </g> <g> <g> <path d="M511.33,173.609c-0.118-23.528-19.355-42.67-42.884-42.67H450.26c-17.831,46.242-11.329,29.381-22.507,58.37l4.709-23.724 c0.346-1.744,0.067-3.555-0.79-5.113l-7.381-13.424l6.551-11.914c0.454-0.826,0.438-1.829-0.041-2.64 c-0.479-0.811-1.352-1.308-2.293-1.308h-17.96c-0.942,0-1.813,0.497-2.293,1.308s-0.495,1.815-0.041,2.64l6.537,11.889 l-7.367,13.4c-0.873,1.589-1.147,3.438-0.77,5.211l5.438,23.675c-3.119-8.087-21.08-52.728-23.255-58.37h-17.83 c-23.529,0-42.766,19.141-42.884,42.67c-0.098,19.565-0.016,3.179-0.17,33.884l-36.702-22.787 c-8.501-5.28-19.674-2.667-24.953,5.836c-5.279,8.503-2.666,19.675,5.836,24.954l64.219,39.873 c12.028,7.47,27.609-1.167,27.68-15.304c0.036-7.091,0.292-57.809,0.334-66.275c0.013-2.092,1.714-3.776,3.805-3.769 c2.089,0.007,3.779,1.703,3.779,3.794c-0.018,87.323-0.394,111.735-0.394,304.606c0,12.01,9.736,21.746,21.746,21.746 s21.746-9.736,21.746-21.746V304.604h9.388v173.817c0,12.01,9.736,21.746,21.746,21.746s21.746-9.736,21.746-21.746l0.008-304.612 c0-1.981,1.604-3.589,3.586-3.595c1.981-0.006,3.595,1.594,3.605,3.577l0.669,133.132c0.05,9.977,8.154,18.03,18.119,18.03 c0.031,0,0.062,0,0.094,0c10.007-0.05,18.081-8.205,18.03-18.212L511.33,173.609z"></path> </g> </g> </g></svg>
                  <span class="ml-3">
                      Absen Tutor
                  </span>
                </a>
              </li>

              <li>
                <a href="{{ route('admin.tutor') }}"
                class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg {{ (Route::currentRouteName() === 'admin.tutor') ? 'bg-gray-100 ' : 'hover:bg-gray-100 ' }} group">
                  <svg aria-hidden="true" class="w-6 h-6 {{ (Route::currentRouteName() === 'admin.tutor') ? 'text-gray-900' : 'text-gray-500  group-hover:text-gray-900 ' }} transition duration-75"  
                   fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.8311 15.6402C17.5011 15.2002 18.3811 15.6802 18.3811 16.4802V17.7702C18.3811 19.0402 17.3911 20.4002 16.2011 20.8002L13.0111 21.8602C12.4511 22.0502 11.5411 22.0502 10.9911 21.8602L7.80109 20.8002C6.60109 20.4002 5.62109 19.0402 5.62109 17.7702V16.4702C5.62109 15.6802 6.50109 15.2002 7.16109 15.6302L9.22109 16.9702C10.0111 17.5002 11.0111 17.7602 12.0111 17.7602C13.0111 17.7602 14.0111 17.5002 14.8011 16.9702L16.8311 15.6402Z" fill="currentColor"></path> <path d="M19.9795 6.45859L13.9895 2.52859C12.9095 1.81859 11.1295 1.81859 10.0495 2.52859L4.02953 6.45859C2.09953 7.70859 2.09953 10.5386 4.02953 11.7986L5.62953 12.8386L10.0495 15.7186C11.1295 16.4286 12.9095 16.4286 13.9895 15.7186L18.3795 12.8386L19.7495 11.9386V14.9986C19.7495 15.4086 20.0895 15.7486 20.4995 15.7486C20.9095 15.7486 21.2495 15.4086 21.2495 14.9986V10.0786C21.6495 8.78859 21.2395 7.28859 19.9795 6.45859Z" fill="currentColor"></path> </g></svg>
                  <span class="ml-3">
                      Daftar Tutor
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
