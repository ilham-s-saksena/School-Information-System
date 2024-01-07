<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PKBM Harapan Bangsa</title>
    <link rel="icon" href="/favicon.png" type="image/png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<section class="h-screen w-screen relative">

<div class="absolute w-full max-w-md bg-gray-100 shadow-xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-lg px-5">
    <img src="/img/logo.png" class="w-1/4 mx-auto mt-2" alt="">
<h1 class="text-center pb-3 font-bold text-xl">Pilih Login Sebagai</h1>
<a href="{{ route('siswa-login') }}" class="w-full bg-white flex text-center justify-center rounded-md border-2 border-orange-500 text-orange-500 font-bold hover:bg-orange-400 hover:text-orange-100 shadow-none hover:shadow-lg hover:scale-105 transition-all py-1">
    SISWA
</a>
<a href=" {{ route('login')}} " class="w-full my-3 bg-orange-500 flex text-center justify-center rounded-md border-2 border-orange-500 text-orange-100 font-bold hover:bg-orange-100 hover:text-orange-500 shadow-none hover:shadow-lg hover:scale-105 transition-all py-1">
    TUTOR
</a>

<div class="text-sm text-gray-400 flex justify-center mt-5 mb-2">© 2024-2025 <a href="#" class="hover:underline">PKBM Harapan Bangsa™</a>. All Rights Reserved.</div>
</div>

</section>



  


        
</body>
</html>
