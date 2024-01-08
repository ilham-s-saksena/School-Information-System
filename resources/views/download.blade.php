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
<h1 class="text-center pb-3 font-bold text-md">Download Aplikasi Android Tutor</h1>

<div class="flex items-center justify-between">
    <div class="flex justify-around flex-1">
        <span class="font-semibold text-gray-700">PKBM Harapan Bangsa.apk</span>
        <span class="text-gray-500">20,8 Mb</span>
    </div>

    <a id="downloadButton" href="{{ url('/download/PKBMharbang.apk') }}" class="text-white text-center bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm pr-5 pl-3 py-2.5 inline-flex items-center me-2">
    <svg id="normalIcon" class="w-4 h-4 me-2 " data-slot="icon" fill="none" stroke-width="3" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
    </svg>
    Download
</a>
</div>




<div class="text-sm text-gray-400 flex justify-center mt-5 mb-2">© 2024-2025 <a href="#" class="hover:underline">PKBM Harapan Bangsa™</a>. All Rights Reserved.</div>
</div>

</section>

<div class="animate-spin hidden"></div>

<script>
    const downloadButton = document.getElementById('downloadButton');
    const normalIcon = document.getElementById('normalIcon');

    downloadButton.addEventListener('click', (event) => {
        event.preventDefault();

        // Ubah SVG ke animasi spin
        normalIcon.innerHTML = `
            <svg aria-hidden="true" class="w-4 h-4 text-white animate-spin fill-orange-200" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
        `;

        // Simulasikan unduhan file selama 3 detik
        setTimeout(() => {
            // Ubah kembali SVG setelah unduhan selesai
            normalIcon.innerHTML = `
                <svg class="w-4 h-4 me-2" data-slot="icon" fill="none" stroke-width="3" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"></path>
                </svg>
            `;
        }, 3000);

        // Mulai unduh file
        window.location.href = event.target.href;
    });
</script>



  


        
</body>
</html>
