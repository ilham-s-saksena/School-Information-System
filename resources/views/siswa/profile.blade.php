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

<section class="h-full w-full relative ">

<form enctype="multipart/form-data" action="{{route('ganti-profile')}}" method="POST" class=" h-screen flex flex-col justify-center">
    @csrf
    <div class="mx-auto w-full max-w-md bg-gray-100 shadow-xl rounded-lg px-5">
        <h1 class="text-center py-3 font-bold text-xl">User Profile</h1>
        
        @if(session('success'))
            <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <img id="foto-show" src="/img/{{ Auth::guard('siswa')->user()->foto }}" class="w-24 mt-2 mx-auto shadow-xl rounded-full" alt="">
        <label for="foto" class="w-fit mx-auto px-3 mt-2 mb-3 text-sm hover:bg-orange-500 flex text-center justify-center rounded-md border-2 border-orange-500 hover:text-orange-50 font-semibold cursor-pointer bg-orange-50 text-orange-500 shadow-none hover:shadow-lg transition-all py-1">
            Ganti Foto Profil
        </label>
        <input type="file" name="foto" id="foto" accept=".jpg, .jpeg, .png" class="hidden">


        <div>
            <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                </svg>
            </span>
            <input type="text" id="disabled-input" aria-label="disabled input" name="username" value="{{ Auth::guard('siswa')->user()->username }}" disable class="rounded-none rounded-e-lg cursor-not-allowed bg-gray-50 border text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" disabled readonly>
            </div>
        </div>

        <div class="">
            <div class="flex w-full justify-center items-center px-3">
                <hr class="flex-1 h-px  bg-gray-500 border-0">
                <p class="block mt-3 mb-2 text-sm font-medium text-gray-900 px-3">Ubah Password</p>
                <hr class="flex-1 h-px  bg-gray-500 border-0">

            </div>
            <label for="pw" class="block text-sm font-medium text-gray-900">Password Lama</p>
            <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"  data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"></path>
                </svg>
            </span>
            <input type="password" id="pw" name="password-lama" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="masukkan password lama">
            </div>
            @if ($errors->has('password-lama'))
                <span class="text-red-500">{{ $errors->first('password-lama') }}</span>
            @endif
            @error('password-lama')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
        <label for="pw-l" class="block mt-2 text-sm font-medium text-gray-900">Password Baru</p>
            <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"  data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"></path>
                </svg>
            </span>
            <input type="password" id="pw-l" name="password-baru" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="masukkan password baru">
            </div>

            @error('password-baru')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div>
        <label for="pw-k" class="block mt-2 text-sm font-medium text-gray-900">Konfirmasi Password Baru</p>
            <div class="flex">
            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"  data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z"></path>
                </svg>
            </span>
            <input type="password" id="pw-k" name="konfirmasi-password-baru" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-orange-500 focus:border-orange-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="masukkan ulang password baru">
            </div>
            @error('konfirmasi-password-baru')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button class="w-full mt-7 mb-3 bg-orange-500 flex text-center justify-center rounded-md border-2 border-orange-500 text-orange-100 font-bold hover:bg-orange-100 hover:text-orange-500 shadow-none hover:shadow-lg hover:scale-105 transition-all py-1">
            Simpan Perubahan
        </button>

    <div class="text-sm text-gray-400 flex justify-center mt-5 mb-2">© 2024-2025 <a href="#" class="hover:underline">PKBM Harapan Bangsa™</a>. All Rights Reserved.</div>
    </div>
    
</form>



</section>



  


<script>
    document.getElementById('foto').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('foto-show').src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
</script>

</body>
</html>

