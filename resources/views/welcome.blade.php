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

    <body class="antialiased">

        
    <nav class=" border-gray-200 dark:bg-gray-900 dark:border-gray-700 sticky w-full top-0 bg-white/75 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="/img/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-lg sm:text-2xl font-semibold whitespace-nowrap ">PKBM Harapan Bangsa</span>
        </a>

        <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200  dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col items-center font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white/25 ">
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-orange-700 rounded md:bg-transparent md:text-orange-700 md:p-0 " aria-current="page">Beranda</a>
            </li>

            <li>
                <a href="#program" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0">Program</a>
            </li>
            <li>
                <a href="#fasilitas" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0">Fasilitas</a>
            </li>
            <li>
                <a href="#kegiatan" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0">Kegiatan</a>
            </li>

            <a href="{{ route('pilih-login') }}" class="bg-orange-600 text-white px-3 flex items-center justify-between w-full py-2 rounded-lg hover:bg-gray-50 hover:text-orange-600 hover:shadow-md md:hover:bg-transparent md:border-0 transition-colors ">
                Login
                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                </svg>
            </a>
            

            </ul>
        </div>
        </div>
    </nav>

    <main>
        <section class="h-[35vh] sm:h-[50vh] bg-cover bg-no-repeat bg-center shadow-xl" style="background-image: url('/img/banner1.jpg');"></section>
        <section class="w-fit p-2 bg-orange-100 text-gray-800 mx-auto text-center rounded-full shadow-xl text-3xl font-bold -mt-16 sm:-mt-24 z-20">
            <img src="/img/logo.png" alt="logo-pkbm-harbang" class="mx-auto rounded-full w-32 sm:w-44 z-20">
        </section>
        <section class="flex items-center justify-center sm:flex-row flex-col sm:px-20 px-6 bg-gradient-to-b from-orange-100 to-white pt-20 sm:pt-10 -mt-24 -z-10">
            
            <div class="flex-1 order-2 sm:order-1 px-0 sm:px-14 sm:text-md mt-0 text-md">
                <span class="italic font-semibold mb-3">Assalamu'alaikum Warahmatullahi Wabarakatuh</span>
                
                <p class="text-justify indent-5 mb-2">
                PKBM Harapan Bangsa hadir sebagai cahaya baru dalam dunia pendidikan di kecamatan Kalibagor, Banyumas. Sebagai lembaga pendidikan alternatif, kami bertekad untuk memberikan akses pendidikan kesetaraan bagi semua lapisan masyarakat, mulai dari tingkat dasar hingga menengah atas. Keberadaan kami tidak sekadar menjadi pilihan, tetapi harapan bagi mereka yang menginginkan pendidikan yang berkualitas tanpa terkekang oleh batasan-batasan tertentu.
                </p>
                
                <p class="text-justify indent-5 mb-2">
                Misi kami tak hanya sekadar memberikan pengetahuan, tapi juga membekali setiap warga belajar dengan keterampilan dan sikap mental yang dibutuhkan dalam menghadapi tantangan di era modern ini. Dengan pendekatan yang holistik, kami yakin setiap individu yang belajar di PKBM Harapan Bangsa dapat memiliki bekal yang setara dengan lulusan sekolah formal. Kami percaya, dengan meningkatkan tingkat pendidikan dan pengetahuan, kami juga turut meningkatkan taraf hidup masyarakat di sekitar kami
                </p>
                
                <p class="text-justify indent-5 mb-3">
                Kami mengundang Anda semua, baik itu siswa, orang tua, maupun seluruh elemen masyarakat, untuk bergabung dan mendukung perjuangan kami dalam membentuk generasi yang memiliki daya saing dan kualitas pendidikan yang tinggi. Bersama, mari kita wujudkan mimpi untuk memajukan pendidikan di Kalibagor dan sekitarnya melalui PKBM Harapan Bangsa.
                </p>
                <span class="italic font-semibold sm:mb-5 mb-0">Wassalamu'alaikum Warahmatullahi Wabarakatuh</span>
            </div>

            <div class="w-full max-w-sm flex flex-col items-center justify-center order-1 sm:order-2 py-2 relative">
                <span class="absolute left-1/2 bottom-1/2 sm:bottom-1/4 blur-lg w-44 h-44 sm:w-96 sm:h-96 rounded-full -translate-x-1/2 bg-orange-300 z-0"></span>
                <span class="absolute left-1/2 bottom-1/2 sm:bottom-1/4 blur-sm w-36 h-36 sm:w-80 sm:h-80 rounded-full -translate-x-1/2 bg-orange-400/75 z-0"></span>
                <img src="/img/profile.png" class="px-5 w-2/3 sm:w-full z-20" alt="ketua-pkbm-harbang">
                <h2 class="flex flex-col text-center italic">
                    <span class="font-bold text-gray-950">Ketua PKBM Harapan Bangsa</span>
                    <span class="font-semibold text-gray-800">Sumarsih Ely Wahyuni S.Pd. AUD.</span>
                </h2>
            </div>

        </section>

        <section id="program" class="max-w-screen bg-gradient-to-b from-white  to-yellow-100 py-5">
            <div class="sm:px-20 px-6">
                <h1 class="text-center text-2xl font-bold mb-5">VISI MISI</h1>
            </div>
            <div class="sm:px-20 px-6">
                <h1 class="text-center text-2xl font-bold mb-5">
                    Program Kami
                </h1>
                <div class="grid sm:grid-cols-3 grid-cols-1 gap-4">
                    <div class="w-full bg-gradient-to-br from-orange-100/50 to-green-100/50 border-2 border-orange-300 px-3 py-2 rounded-xl shadow hover:scale-105 transition-all group cursor-pointer hover:bg-gradient-to-tr hover:border-white hover:shadow-xl">
                        <h1 class="text-center text-xl font-bold ">KEJAR PAKET A</h1>
                        <div class="flex space-x-3 items-center px-5">
                            <div class="flex-1 border-b-2 border-orange-300 group-hover:border-white"></div>
                            <h2 class="text-center font-semibold italic ">Setara SD</h2>
                            <div class="flex-1 border-b-2 border-orange-300 group-hover:border-white"></div>
                        </div>
                        <img src="/img/a.svg" alt="" class="px-20 py-3 ">
                        <ul class="text-sm px-10 font-medium my-3 list-disc">
                            <li>Menyelesaikan pendidikan setara dengan tingkat Sekolah Dasar (SD).</li>
                            <li>Mendapatkan sertifikat kesetaraan setara dengan lulusan SD.</li>
                            <li>Materi pelajaran meliputi dasar-dasar sesuai kurikulum setara SD.</li>
                        </ul>
                    </div>

                    <div class="w-full bg-gradient-to-br from-orange-100/50 to-green-100/50 border-2 border-orange-300 px-3 py-2 rounded-xl shadow hover:scale-105 transition-all group cursor-pointer hover:bg-gradient-to-tr hover:border-white hover:shadow-xl">
                        <h1 class="text-center text-xl font-bold ">KEJAR PAKET B</h1>
                        <div class="flex space-x-3 items-center px-5">
                            <div class="flex-1 border-b-2 border-orange-300 group-hover:border-white"></div>
                            <h2 class="text-center font-semibold italic ">Setara SMP</h2>
                            <div class="flex-1 border-b-2 border-orange-300 group-hover:border-white"></div>
                        </div>
                        <img src="/img/b.svg" alt="" class="px-20 py-3 ">
                        <ul class="text-sm px-10 font-medium my-3 list-disc">
                            <li>Menyelesaikan pendidikan setara dengan tingkat Sekolah Menengah Pertama (SMP).</li>
                            <li>Meraih sertifikat kesetaraan setara dengan lulusan SMP.</li>
                            <li>Materi pelajaran lebih kompleks sesuai kurikulum setara SMP.</li>
                        </ul>
                    </div>

                    <div class="w-full bg-gradient-to-br from-orange-100/50 to-green-100/50 border-2 border-orange-300 px-3 py-2 rounded-xl shadow hover:scale-105 transition-all group cursor-pointer hover:bg-gradient-to-tr hover:border-white hover:shadow-xl">
                        <h1 class="text-center text-xl font-bold ">KEJAR PAKET C</h1>
                        <div class="flex space-x-3 items-center px-5">
                            <div class="flex-1 border-b-2 border-orange-300 group-hover:border-white"></div>
                            <h2 class="text-center font-semibold italic ">Setara SMA</h2>
                            <div class="flex-1 border-b-2 border-orange-300 group-hover:border-white"></div>
                        </div>
                        <img src="/img/c.svg" alt="" class="px-20 py-3 ">
                        <ul class="text-sm px-10 font-medium my-3 list-disc">
                            <li>Menyelesaikan pendidikan setara dengan tingkat Sekolah Menengah Atas (SMA).</li>
                            <li>Memperoleh sertifikat kesetaraan setara dengan lulusan SMA.</li>
                            <li>Materi pelajaran lebih tinggi sesuai kurikulum setara SMA.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        
<section class="pt-5 bg-gradient-to-b from-yellow-100 via-white to-yellow-100">
    <div class=" flex flex-col items-center ">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold mb-3">Tenaga Pengajar Kami</h2>
            <p class="text-gray-500 text-md px-5 sm:text-lg font-semibold">
            	Tutor Berpengalaman dan Expert di bidangnya! <br> Bergabung bersama kami menuju pendidikan yang gemilang
            </p>
        </div> 

        <div id="default-carousel" class="relative mt-5 text-center w-full max-w-xl overflow-hidden" data-carousel="slide">

            
            <div class=" h-80 sm:h-96  relative w-full text-center">
                <figure class="w-full duration-700 hidden ease-in-out " data-carousel-item="">
                    <div class="grid grid-cols-2 gap-2 px-4">

                    
                    
                    <!-- FARIDA -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/farida.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Farida Nur Anisa S.M</div>
	                        </div>
	                    </figcaption>

                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel Ekonomi</div>
                        </div>

                    </div>

                    <!-- LIA -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/lia.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Liana Niftatu Rahmah</div>
	                        </div>
	                    </figcaption>

                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel B. Indonesia</div>
                        </div>

	                    
                    </div>
                    </div>
                </figure>

                <figure class="duration-700 hidden ease-in-out " data-carousel-item="">
                    <div class="grid grid-cols-2 gap-2 px-4">

                    
                    <!-- ZULFATIN -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/zulfatin.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Zulfatin Alfa Zahroh S.Pd</div>
	                        </div>
	                    </figcaption>

                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel PAI</div>
                        </div>

	                    
                    </div>


                    <!-- ESA -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/esa.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Esa Melinia Wati S.Pd</div>
	                        </div>
	                    </figcaption>

                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel B. Jawa</div>
                        </div>

	                    
                    </div>
                    </div>
                </figure>

                <figure class="duration-700 hidden ease-in-out " data-carousel-item="">
                    <div class="grid grid-cols-2 gap-2 px-4">

                    
                    <!-- YUNDA -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/yunda.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Ayunda Noviolina</div>
	                        </div>
	                    </figcaption>
                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel IPA</div>
                        </div>
                    </div>
                    
                    <!-- FAHMI -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/fahmi.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Fahmi Ayatun S.Pd</div>
	                        </div>
	                    </figcaption>

                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel Matematika</div>
                        </div>
                    </div>
                    </div>
                </figure>

                <figure class="duration-700 hidden ease-in-out " data-carousel-item="">
                    <div class="grid grid-cols-2 gap-2 px-4">

                    
                    <!-- UMI -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/umi.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Umi Hani S.Ag</div>
	                        </div>
	                    </figcaption>
                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel IPS</div>
                        </div>
                    </div>
                    
                    <!-- BETI -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/beti.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Beti Priani</div>
	                        </div>
	                    </figcaption>

                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Paket A</div>
                        </div>
                    </div>
                    </div>
                </figure>


                <figure class="duration-700 hidden ease-in-out " data-carousel-item="">
                    <div class="grid grid-cols-2 gap-2 px-4">

                    
                    <!-- HARI -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/hari.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Hari Prasojo S.Pd</div>
	                        </div>
	                    </figcaption>
                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel B. Inggris</div>
                        </div>
                    </div>
                    
                    <!-- ONI -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/oni.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Carkoni S.Pd</div>
	                        </div>
	                    </figcaption>

                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel B. Inggris</div>
                        </div>
                    </div>
                    </div>
                </figure>

                <figure class="duration-700 hidden ease-in-out " data-carousel-item="">
                    <div class="grid grid-cols-2 gap-2 px-4">

                    
                    <!-- BUDI -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/budi.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Budi Setriana S.Pd</div>
	                        </div>
	                    </figcaption>
                    
                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel Sosiologi</div>
                        </div>
                    </div>
                    
                    <!-- ILHAM -->
                    <div class="bg-white h-80 sm:h-full shadow-xl p-2 sm:p-4 border  rounded-xl">
                    	<div style="background-image: url('/tutor/ilham.jpg');" class="bg-cover rounded-t-lg bg-top bg-no-repeat w-full h-48 sm:h-64"></div>
	                    <figcaption class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE pSnS_Sqc_IApyugF_VpP B1cgbA6Bb4LQo0qFJKck">
	                        <div class="mt-3 font-bold">
	                            <div class=" _A6LflweZRUwrcL6M2Tk g3OYBOqwXUEW4dRGogkH a0Ed69aMSu0vgf4oysz0">Ilham Sidik Saksena S.Kom</div>
	                        </div>
	                    </figcaption>

                        <div class="justify-center text-gray-600">
							<div class=" MxG1ClE4KPrIvlL5_Q5x XdjN1uxS_rsa3F90ox40 K1PPCJwslha8GUIvV_Cr eCx_6PNzncAD5yo7Qcic">Tutor Mapel TIK</div>
                        </div>
                    </div>
                    </div>
                </figure>
                
            </div>

            <div class="mt-10 space-x-5">
                <button type="button" class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE _ryfipzijJEI18CFfJIm j34KztD3SBxL_tQWzosr avTmsFU5TwHXQh07Ji35 group qHIOIw8TObHgD3VvKa5x" data-carousel-prev="">
                    <span class="text-gray-600 WvrFEtphYDYX1sAkd4TH V6K1lgYle5x1_8j4in7F">
                        <svg class="w-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                        
                    </span>
                </button>
                <button type="button" class="kqgYncRJQ7spwKfig6It _WclR59Ji8jwfmjPtOei neyUwteEn7DOg9pBSJJE j34KztD3SBxL_tQWzosr avTmsFU5TwHXQh07Ji35 group qHIOIw8TObHgD3VvKa5x" data-carousel-next="">
                    <span class="text-gray-600 WvrFEtphYDYX1sAkd4TH V6K1lgYle5x1_8j4in7F">
                        <svg class="w-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        
                    </span>
                </button>
            </div>
        </div>
    </div>
    </section>
          
          
        
        <section id="fasilitas" class="max-w-screen bg-gradient-to-b to-green-200 via-100-200 from-yellow-100 pt-20 pb-20 px-5">
            <div class="grid sm:grid-cols-3 grid-cols-1 items-center">
                <div class="text-center sm:text-right px-5">
                    <h1 class="font-extrabold text-3xl">FASILITAS</h1>
                    <h2 class="font-semibold italic py-2">PKBM Harapan Bangsa berkomitmen sepenuh hati untuk memberikan pendidikan kesetaraan kepada seluruh lapisan masyarakat. Kami selalu berupaya menyediakan fasilitas terbaik bagi semua warga belajar.</h2>
                </div>
                <div class="grid sm:grid-cols-3 grid-cols-1 sm:col-span-2 col-span-1  gap-2">
                    <div class="w-full py-2 bg-orange-100/50 hover:bg-orange-100/100 rounded-lg hover:shadow-xl">
                        <svg class="h-36 mx-auto" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M98.157 134.861C98.6386 134.862 99.1156 134.767 99.5605 134.583C100.005 134.398 100.409 134.128 100.749 133.787C102.845 131.72 105.073 129.793 107.42 128.017C109.531 129.88 112.135 131.092 114.919 131.508C117.703 131.924 120.548 131.526 123.111 130.362C125.674 129.198 127.845 127.317 129.364 124.947C130.882 122.577 131.683 119.818 131.67 117.004C131.67 116.648 131.59 116.314 131.565 115.964C134.184 115.221 136.847 114.637 139.537 114.214C140.408 114.087 141.204 113.65 141.779 112.984C142.354 112.318 142.671 111.467 142.67 110.587V95.0026C142.67 94.0301 142.284 93.0974 141.596 92.4098C140.908 91.7221 139.976 91.3358 139.003 91.3358C138.031 91.3358 137.098 91.7221 136.41 92.4098C135.723 93.0974 135.336 94.0301 135.336 95.0026V107.493C133.333 107.882 131.296 108.397 129.249 108.969C127.522 106.327 124.987 104.313 122.022 103.228C119.057 102.143 115.821 102.045 112.796 102.948C109.77 103.851 107.118 105.707 105.233 108.24C103.348 110.773 102.331 113.846 102.335 117.004C102.35 118.702 102.664 120.385 103.262 121.975C100.548 124.007 97.9765 126.221 95.5638 128.602C95.0512 129.115 94.7021 129.768 94.5606 130.479C94.4192 131.191 94.4918 131.928 94.7693 132.598C95.0468 133.268 95.5166 133.84 96.1195 134.243C96.7224 134.646 97.4312 134.861 98.1563 134.861L98.157 134.861ZM117.002 109.67C118.495 109.674 119.952 110.134 121.176 110.989C122.4 111.844 123.334 113.052 123.852 114.452V114.456V114.46C124.165 115.272 124.329 116.133 124.336 117.004C124.336 118.454 123.906 119.872 123.1 121.078C122.294 122.284 121.149 123.224 119.809 123.779C118.469 124.334 116.994 124.479 115.572 124.196C114.149 123.913 112.842 123.215 111.817 122.189C110.791 121.164 110.093 119.857 109.81 118.434C109.527 117.012 109.672 115.537 110.227 114.197C110.782 112.857 111.722 111.712 112.928 110.906C114.134 110.1 115.552 109.67 117.002 109.67Z" fill="black"></path> <path d="M135.337 61.3779V69.3349C135.337 70.3074 135.723 71.24 136.411 71.9277C137.098 72.6154 138.031 73.0017 139.004 73.0017C139.976 73.0017 140.909 72.6154 141.596 71.9277C142.284 71.24 142.67 70.3074 142.67 69.3349V58.3344C142.67 57.3619 142.284 56.4292 141.596 55.7416C140.909 55.0539 139.976 54.6676 139.004 54.6676C138.514 54.6685 138.03 54.5694 137.58 54.3763C137.131 54.1832 136.726 53.9003 136.389 53.5448C136.052 53.2131 135.785 52.8169 135.604 52.3798C135.424 51.9427 135.333 51.4738 135.337 51.0008C135.336 50.5122 135.434 50.0286 135.627 49.5796C135.82 49.1307 136.103 48.726 136.458 48.3903C136.789 48.052 137.185 47.7841 137.623 47.6026C138.06 47.4211 138.53 47.3297 139.004 47.3339H161.004C161.494 47.333 161.978 47.4321 162.428 47.6252C162.877 47.8183 163.282 48.1012 163.619 48.4567C163.956 48.7884 164.223 49.1846 164.404 49.6217C164.585 50.0587 164.676 50.5278 164.671 51.0008C164.672 51.4893 164.574 51.9729 164.381 52.4219C164.188 52.8708 163.906 53.2755 163.551 53.6112C163.219 53.9495 162.823 54.2175 162.385 54.399C161.948 54.5805 161.478 54.6719 161.004 54.6676C160.032 54.6676 159.099 55.0539 158.412 55.7416C157.724 56.4292 157.338 57.3619 157.338 58.3344V110.587C157.338 111.464 157.652 112.313 158.225 112.978C158.797 113.643 159.589 114.081 160.457 114.212C169.019 115.497 177.265 118.376 184.765 122.701C185.608 123.186 186.609 123.317 187.549 123.064C188.488 122.811 189.288 122.195 189.773 121.353C190.259 120.51 190.389 119.509 190.137 118.569C189.884 117.63 189.268 116.83 188.425 116.345C181.055 112.094 173.026 109.104 164.671 107.496V61.3819C166.206 60.846 167.596 59.9616 168.732 58.7983C169.763 57.7867 170.582 56.581 171.144 55.2507C171.706 53.9204 171.998 52.4921 172.005 51.0481C172.011 49.6041 171.731 48.1732 171.181 46.8381C170.631 45.503 169.822 44.2901 168.8 43.2696C167.787 42.2283 166.575 41.402 165.236 40.8402C163.896 40.2785 162.457 39.9928 161.004 40.0003H139.004C137.567 39.9897 136.142 40.2677 134.815 40.8179C133.487 41.3681 132.284 42.1793 131.276 43.2033C130.246 44.2148 129.426 45.4205 128.864 46.7508C128.303 48.0811 128.01 49.5095 128.004 50.9534C127.997 52.3974 128.277 53.8283 128.827 55.1634C129.377 56.4985 130.187 57.7114 131.208 58.7319C132.362 59.9202 133.775 60.8257 135.337 61.3779V61.3779Z" fill="black"></path> <path d="M139.003 76.6685C138.031 76.6685 137.098 77.0548 136.41 77.7425C135.723 78.4302 135.336 79.3628 135.336 80.3353V84.0021C135.336 84.9746 135.723 85.9073 136.41 86.595C137.098 87.2826 138.031 87.669 139.003 87.669C139.976 87.669 140.908 87.2826 141.596 86.595C142.284 85.9073 142.67 84.9746 142.67 84.0021V80.3353C142.67 79.3628 142.284 78.4302 141.596 77.7425C140.908 77.0548 139.976 76.6685 139.003 76.6685Z" fill="black"></path> <path d="M184.292 140.178C184.667 140.48 185.098 140.705 185.56 140.84C186.022 140.975 186.507 141.018 186.986 140.966C187.464 140.915 187.928 140.769 188.351 140.538C188.773 140.307 189.146 139.994 189.448 139.619C189.75 139.244 189.975 138.813 190.11 138.351C190.246 137.888 190.289 137.404 190.237 136.925C190.185 136.446 190.039 135.983 189.808 135.56C189.577 135.137 189.265 134.765 188.889 134.463C180.369 127.597 170.182 123.11 159.365 121.459C158.889 121.387 158.404 121.409 157.936 121.525C157.469 121.641 157.029 121.847 156.641 122.133C156.253 122.419 155.926 122.778 155.677 123.191C155.429 123.603 155.264 124.06 155.192 124.536C155.12 125.013 155.142 125.498 155.258 125.966C155.374 126.433 155.58 126.873 155.866 127.261C156.152 127.648 156.511 127.976 156.924 128.225C157.336 128.473 157.793 128.638 158.269 128.71C167.804 130.166 176.783 134.123 184.292 140.178V140.178Z" fill="black"></path> <path d="M146.337 175.673C145.364 175.673 144.432 176.059 143.744 176.747C143.056 177.434 142.67 178.367 142.67 179.34V183.006C142.67 183.979 143.056 184.912 143.744 185.599C144.432 186.287 145.364 186.673 146.337 186.673C147.309 186.673 148.242 186.287 148.93 185.599C149.617 184.912 150.004 183.979 150.004 183.006V179.34C150.004 178.367 149.617 177.434 148.93 176.747C148.242 176.059 147.309 175.673 146.337 175.673Z" fill="black"></path> <path d="M142.67 135.338H43.666C42.9409 135.338 42.2321 135.553 41.6293 135.956C41.0264 136.359 40.5565 136.931 40.2791 137.601C40.0016 138.271 39.929 139.008 40.0704 139.72C40.2118 140.431 40.5609 141.084 41.0736 141.597L62.0002 162.524V241.676C62.0059 246.536 63.9393 251.196 67.3764 254.633C70.8135 258.07 75.4735 260.004 80.3343 260.01H131.67C136.531 260.004 141.191 258.07 144.628 254.633C148.065 251.196 149.998 246.536 150.004 241.676V194.007C150.004 193.034 149.618 192.102 148.93 191.414C148.242 190.726 147.31 190.34 146.337 190.34C145.365 190.34 144.432 190.726 143.744 191.414C143.057 192.102 142.67 193.034 142.67 194.007V241.676C142.667 244.592 141.507 247.388 139.445 249.451C137.382 251.513 134.586 252.673 131.67 252.676H80.3343C77.4177 252.673 74.6216 251.513 72.5593 249.451C70.497 247.388 69.337 244.592 69.3338 241.676V161.005C69.3337 160.033 68.9474 159.101 68.2598 158.413L52.5189 142.671H142.67V168.339C142.67 169.312 143.057 170.244 143.744 170.932C144.432 171.62 145.365 172.006 146.337 172.006C147.31 172.006 148.242 171.62 148.93 170.932C149.618 170.244 150.004 169.312 150.004 168.339V142.671C150.002 140.727 149.228 138.863 147.853 137.488C146.479 136.113 144.615 135.34 142.67 135.338Z" fill="black"></path> <path d="M106.002 245.342H120.669C124.558 245.338 128.286 243.792 131.036 241.042C133.786 238.292 135.333 234.564 135.337 230.675V214.681C135.337 213.709 134.95 212.776 134.263 212.088C133.575 211.401 132.642 211.014 131.67 211.014C130.697 211.014 129.765 211.401 129.077 212.088C128.389 212.776 128.003 213.709 128.003 214.681V230.675C128.001 232.619 127.227 234.483 125.853 235.858C124.478 237.233 122.614 238.006 120.669 238.009H106.002C105.03 238.009 104.097 238.395 103.409 239.083C102.722 239.77 102.335 240.703 102.335 241.675C102.335 242.648 102.722 243.581 103.409 244.268C104.097 244.956 105.03 245.342 106.002 245.342Z" fill="black"></path> <path d="M135.337 175.673C135.337 174.7 134.95 173.768 134.263 173.08C133.575 172.392 132.642 172.006 131.67 172.006C130.697 172.006 129.765 172.392 129.077 173.08C128.389 173.768 128.003 174.7 128.003 175.673V193.149C128.003 194.122 128.389 195.054 129.077 195.742C129.765 196.43 130.697 196.816 131.67 196.816C132.642 196.816 133.575 196.43 134.263 195.742C134.95 195.054 135.337 194.122 135.337 193.149V175.673Z" fill="black"></path> <path d="M80.3341 172.006H98.6682C99.6407 172.006 100.573 171.62 101.261 170.932C101.949 170.244 102.335 169.312 102.335 168.339C102.335 167.367 101.949 166.434 101.261 165.746C100.573 165.059 99.6407 164.672 98.6682 164.672H80.3341C79.3616 164.672 78.4289 165.059 77.7412 165.746C77.0536 166.434 76.6672 167.367 76.6672 168.339C76.6672 169.312 77.0536 170.244 77.7412 170.932C78.4289 171.62 79.3616 172.006 80.3341 172.006V172.006Z" fill="black"></path> <path d="M80.3341 186.673H87.6677C88.6402 186.673 89.5729 186.287 90.2605 185.599C90.9482 184.912 91.3345 183.979 91.3345 183.006C91.3345 182.034 90.9482 181.101 90.2605 180.414C89.5729 179.726 88.6402 179.34 87.6677 179.34H80.3341C79.3616 179.34 78.4289 179.726 77.7412 180.414C77.0536 181.101 76.6672 182.034 76.6672 183.006C76.6672 183.979 77.0536 184.912 77.7412 185.599C78.4289 186.287 79.3616 186.673 80.3341 186.673V186.673Z" fill="black"></path> <path d="M80.3341 201.34H98.6682C99.6407 201.34 100.573 200.954 101.261 200.266C101.949 199.579 102.335 198.646 102.335 197.674C102.335 196.701 101.949 195.768 101.261 195.081C100.573 194.393 99.6407 194.007 98.6682 194.007H80.3341C79.3616 194.007 78.4289 194.393 77.7412 195.081C77.0536 195.768 76.6672 196.701 76.6672 197.674C76.6672 198.646 77.0536 199.579 77.7412 200.266C78.4289 200.954 79.3616 201.34 80.3341 201.34V201.34Z" fill="black"></path> <path d="M80.3341 216.008H87.6677C88.6402 216.008 89.5729 215.621 90.2605 214.934C90.9482 214.246 91.3345 213.313 91.3345 212.341C91.3345 211.368 90.9482 210.436 90.2605 209.748C89.5729 209.06 88.6402 208.674 87.6677 208.674H80.3341C79.3616 208.674 78.4289 209.06 77.7412 209.748C77.0536 210.436 76.6672 211.368 76.6672 212.341C76.6672 213.313 77.0536 214.246 77.7412 214.934C78.4289 215.621 79.3616 216.008 80.3341 216.008V216.008Z" fill="black"></path> <path d="M80.3341 230.675H98.6682C99.6407 230.675 100.573 230.289 101.261 229.601C101.949 228.913 102.335 227.981 102.335 227.008C102.335 226.036 101.949 225.103 101.261 224.415C100.573 223.728 99.6407 223.341 98.6682 223.341H80.3341C79.3616 223.341 78.4289 223.728 77.7412 224.415C77.0536 225.103 76.6672 226.036 76.6672 227.008C76.6672 227.981 77.0536 228.913 77.7412 229.601C78.4289 230.289 79.3616 230.675 80.3341 230.675V230.675Z" fill="black"></path> <path d="M258.448 238.782L223.34 168.572V161.005C223.34 160.033 222.954 159.1 222.266 158.413C221.579 157.725 220.646 157.339 219.673 157.339C218.701 157.339 217.768 157.725 217.081 158.413C216.393 159.1 216.007 160.033 216.007 161.005V169.439C216.007 170.008 216.139 170.57 216.393 171.079L251.888 242.063C252.452 243.18 252.718 244.424 252.662 245.674C252.605 246.924 252.228 248.138 251.566 249.2C250.919 250.272 250.003 251.157 248.909 251.767C247.815 252.377 246.58 252.69 245.328 252.676H170.92C169.67 252.68 168.439 252.363 167.346 251.753C166.254 251.144 165.336 250.264 164.683 249.197C164.013 248.139 163.631 246.924 163.575 245.672C163.519 244.421 163.791 243.176 164.364 242.062L200.954 168.88C201.207 168.37 201.339 167.808 201.339 167.239V109.67H216.007V135.338C216.007 136.31 216.393 137.243 217.081 137.93C217.768 138.618 218.701 139.004 219.673 139.004C220.646 139.004 221.579 138.618 222.266 137.93C222.954 137.243 223.34 136.31 223.34 135.338V109.67C223.338 107.726 222.565 105.862 221.19 104.487C219.815 103.112 217.951 102.338 216.007 102.336H201.339C199.395 102.338 197.531 103.112 196.156 104.487C194.781 105.862 194.008 107.726 194.006 109.67V166.375L157.803 238.782C156.685 241.018 156.157 243.503 156.269 246.001C156.381 248.498 157.13 250.926 158.444 253.052C159.758 255.179 161.595 256.935 163.778 258.153C165.962 259.37 168.42 260.009 170.92 260.01H245.328C247.828 260.01 250.287 259.371 252.471 258.154C254.655 256.936 256.492 255.181 257.806 253.054C259.121 250.927 259.87 248.499 259.982 246.001C260.095 243.503 259.567 241.018 258.448 238.782V238.782Z" fill="black"></path> <path d="M219.674 142.671C218.701 142.671 217.768 143.058 217.081 143.745C216.393 144.433 216.007 145.366 216.007 146.338V150.005C216.007 150.977 216.393 151.91 217.081 152.598C217.768 153.285 218.701 153.672 219.674 153.672C220.646 153.672 221.579 153.285 222.266 152.598C222.954 151.91 223.34 150.977 223.34 150.005V146.338C223.34 145.366 222.954 144.433 222.266 143.745C221.579 143.058 220.646 142.671 219.674 142.671Z" fill="black"></path> <path d="M204.456 241.675C204.456 242.648 204.843 243.581 205.53 244.268C206.218 244.956 207.151 245.342 208.123 245.342H233.461C234.711 245.342 235.941 245.023 237.033 244.414C238.125 243.806 239.043 242.928 239.7 241.865C240.357 240.801 240.732 239.587 240.788 238.338C240.844 237.089 240.58 235.847 240.021 234.729L224.594 203.874C224.16 203.004 223.397 202.342 222.474 202.035C221.551 201.727 220.544 201.799 219.675 202.234C218.805 202.669 218.143 203.432 217.836 204.354C217.528 205.277 217.6 206.284 218.035 207.154L233.461 238.009H208.123C207.151 238.009 206.218 238.395 205.53 239.083C204.843 239.77 204.456 240.703 204.456 241.675Z" fill="black"></path> <path d="M62.0001 124.337C64.901 124.337 67.7367 123.477 70.1488 121.865C72.5608 120.254 74.4407 117.963 75.5509 115.283C76.661 112.603 76.9515 109.654 76.3855 106.808C75.8196 103.963 74.4226 101.35 72.3714 99.2986C70.3201 97.2473 67.7067 95.8504 64.8615 95.2844C62.0163 94.7185 59.0672 95.009 56.3871 96.1191C53.707 97.2292 51.4163 99.1092 49.8046 101.521C48.193 103.933 47.3328 106.769 47.3328 109.67C47.3368 113.559 48.8834 117.287 51.6332 120.037C54.383 122.787 58.1113 124.333 62.0001 124.337ZM62.0001 102.336C63.4505 102.336 64.8684 102.766 66.0744 103.572C67.2804 104.378 68.2204 105.523 68.7755 106.863C69.3305 108.203 69.4758 109.678 69.1928 111.101C68.9098 112.523 68.2113 113.83 67.1857 114.856C66.1601 115.881 64.8534 116.58 63.4308 116.863C62.0082 117.146 60.5336 117 59.1936 116.445C57.8535 115.89 56.7082 114.95 55.9024 113.744C55.0965 112.538 54.6664 111.12 54.6664 109.67C54.6686 107.726 55.442 105.862 56.8168 104.487C58.1917 103.112 60.0557 102.338 62.0001 102.336V102.336Z" fill="black"></path> <path d="M80.3342 87.669C82.5099 87.669 84.6367 87.0238 86.4457 85.8151C88.2548 84.6063 89.6647 82.8883 90.4973 80.8782C91.3299 78.8681 91.5478 76.6563 91.1233 74.5224C90.6988 72.3885 89.6512 70.4284 88.1127 68.89C86.5743 67.3516 84.6142 66.3039 82.4803 65.8794C80.3464 65.455 78.1346 65.6728 76.1245 66.5054C74.1144 67.338 72.3964 68.748 71.1877 70.557C69.9789 72.366 69.3337 74.4928 69.3337 76.6685C69.3369 79.585 70.4969 82.3812 72.5592 84.4435C74.6215 86.5058 77.4177 87.6658 80.3342 87.669ZM80.3342 73.0017C81.0594 73.0017 81.7684 73.2167 82.3714 73.6197C82.9744 74.0226 83.4444 74.5952 83.7219 75.2653C83.9994 75.9353 84.0721 76.6726 83.9306 77.3839C83.7891 78.0952 83.4399 78.7485 82.927 79.2613C82.4142 79.7742 81.7609 80.1234 81.0496 80.2649C80.3383 80.4064 79.601 80.3337 78.931 80.0562C78.2609 79.7787 77.6883 79.3087 77.2854 78.7057C76.8824 78.1027 76.6674 77.3937 76.6674 76.6685C76.6683 75.6963 77.0549 74.7641 77.7423 74.0766C78.4298 73.3892 79.362 73.0026 80.3342 73.0017V73.0017Z" fill="black"></path> <path d="M212.34 84.0021C212.34 86.1778 212.985 88.3047 214.194 90.1137C215.402 91.9227 217.12 93.3327 219.13 94.1653C221.14 94.9979 223.352 95.2157 225.486 94.7912C227.62 94.3668 229.58 93.3191 231.119 91.7807C232.657 90.2422 233.705 88.2821 234.129 86.1482C234.554 84.0143 234.336 81.8025 233.503 79.7924C232.671 77.7824 231.261 76.0643 229.452 74.8556C227.643 73.6468 225.516 73.0017 223.34 73.0017C220.424 73.0049 217.627 74.1649 215.565 76.2272C213.503 78.2895 212.343 81.0856 212.34 84.0021V84.0021ZM223.34 80.3353C224.065 80.3353 224.774 80.5504 225.377 80.9533C225.98 81.3562 226.45 81.9289 226.728 82.5989C227.005 83.2689 227.078 84.0062 226.936 84.7175C226.795 85.4288 226.446 86.0822 225.933 86.595C225.42 87.1078 224.767 87.457 224.055 87.5985C223.344 87.74 222.607 87.6674 221.937 87.3898C221.267 87.1123 220.694 86.6423 220.291 86.0393C219.888 85.4363 219.673 84.7274 219.673 84.0021C219.674 83.0299 220.061 82.0977 220.748 81.4103C221.436 80.7228 222.368 80.3362 223.34 80.3353V80.3353Z" fill="black"></path> <path d="M201.339 69.3349C204.24 69.3349 207.076 68.4746 209.488 66.863C211.9 65.2513 213.78 62.9606 214.89 60.2805C216 57.6004 216.291 54.6513 215.725 51.8061C215.159 48.961 213.762 46.3475 211.711 44.2962C209.659 42.245 207.046 40.8481 204.201 40.2821C201.356 39.7162 198.407 40.0066 195.726 41.1168C193.046 42.2269 190.756 44.1068 189.144 46.5189C187.532 48.9309 186.672 51.7667 186.672 54.6676C186.676 58.5563 188.223 62.2846 190.973 65.0344C193.722 67.7842 197.451 69.3308 201.339 69.3349ZM201.339 47.3339C202.79 47.3339 204.208 47.764 205.414 48.5699C206.62 49.3757 207.56 50.5211 208.115 51.8611C208.67 53.2012 208.815 54.6757 208.532 56.0983C208.249 57.5209 207.551 58.8276 206.525 59.8532C205.499 60.8789 204.193 61.5773 202.77 61.8603C201.348 62.1433 199.873 61.998 198.533 61.443C197.193 60.8879 196.048 59.9479 195.242 58.7419C194.436 57.5359 194.006 56.118 194.006 54.6676C194.008 52.7233 194.781 50.8592 196.156 49.4844C197.531 48.1095 199.395 47.3362 201.339 47.3339V47.3339Z" fill="black"></path> <path d="M58.3332 62.0012C60.5089 62.0012 62.6357 61.3561 64.4448 60.1473C66.2538 58.9386 67.6637 57.2205 68.4963 55.2105C69.3289 53.2004 69.5468 50.9886 69.1223 48.8547C68.6979 46.7208 67.6502 44.7607 66.1117 43.2222C64.5733 41.6838 62.6132 40.6361 60.4793 40.2117C58.3454 39.7872 56.1336 40.005 54.1235 40.8376C52.1135 41.6702 50.3954 43.0802 49.1867 44.8892C47.9779 46.6982 47.3328 48.8251 47.3328 51.0008C47.336 53.9173 48.496 56.7134 50.5583 58.7757C52.6206 60.838 55.4167 61.998 58.3332 62.0012V62.0012ZM58.3332 47.3339C59.0585 47.3339 59.7674 47.549 60.3704 47.9519C60.9734 48.3548 61.4434 48.9275 61.7209 49.5975C61.9985 50.2675 62.0711 51.0048 61.9296 51.7161C61.7881 52.4274 61.4389 53.0808 60.9261 53.5936C60.4133 54.1064 59.7599 54.4556 59.0486 54.5971C58.3373 54.7386 57.6 54.666 56.93 54.3885C56.26 54.1109 55.6873 53.6409 55.2844 53.0379C54.8815 52.4349 54.6664 51.726 54.6664 51.0008C54.6673 50.0285 55.0539 49.0964 55.7414 48.4089C56.4288 47.7214 57.361 47.3348 58.3332 47.3339V47.3339Z" fill="black"></path> </svg>
                        <h2 class="italic text-center">Fasilitas Pembelajaran Lengkap</h2>
                    </div>
                    <div class="w-full py-2 bg-orange-100/75 hover:bg-orange-100/100 rounded-lg hover:shadow-xl">
                        <svg class="h-36 mx-auto" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="currentColor" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M44.88,53H13.67a2.93,2.93,0,0,1-3-2.84V24.59"></path><line x1="50.68" y1="24.76" x2="50.68" y2="35.77"></line><polyline points="24.93 52.95 24.93 35.88 36.51 35.88 36.51 52.95"></polyline><path d="M7.12,16.6s-1.1,7.76,6.45,9a7.15,7.15,0,0,0,6.1-2,7.43,7.43,0,0,0,11-.1,7.37,7.37,0,0,0,5,2.49,11.77,11.77,0,0,0,5.89-2.15,6.67,6.67,0,0,0,4.68,2.15,8,8,0,0,0,7.92-9.3L49.46,6.48a1,1,0,0,0-.94-.66H12.7a1,1,0,0,0-.94.66Z"></path><line x1="7.12" y1="16.6" x2="54.21" y2="16.6"></line><line x1="19.72" y1="16.6" x2="19.72" y2="5.82"></line><line x1="30.72" y1="16.6" x2="30.72" y2="5.82"></line><line x1="41.69" y1="16.6" x2="41.69" y2="5.82"></line><circle cx="50.68" cy="45.37" r="9.6"></circle><polyline points="46.22 46.93 49.45 49.37 55.13 41.38"></polyline></g></svg>
                        <h2 class="italic text-center">Wirausaha</h2>
                    </div>
                    <div class="w-full py-2 bg-orange-100/50 hover:bg-orange-100/100 rounded-lg hover:shadow-xl">
                        <svg class="h-36 mx-auto" fill="currentColor" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="computer_x5F_desk_1_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="computer_x5F_desk"> <path d="M168.651,260.609H65.247v67.813h103.404V260.609z M161.451,321.222H72.447v-53.411h89.004V321.222z"></path> <path d="M168.651,369.222H65.247v67.8h103.404V369.222z M161.451,429.822H72.447v-53.4h89.004V429.822z"></path> <path d="M462.123,206.601H338.977v-17.467h57.955c3.73,0,6.766-3.035,6.766-6.767V87.176c0-3.731-3.035-6.766-6.766-6.766H221.823 c-3.731,0-6.767,3.035-6.767,6.766v95.191c0,3.731,3.035,6.767,6.767,6.767h57.954v17.467H114.824l-31.071-62.928 c2.124-2.365,3.429-5.479,3.429-8.901c0-3.089-1.065-5.93-2.834-8.195l23.331-34.552l27.93,22.391 c1.063,0.853,2.372,1.306,3.71,1.306c0.374,0,0.75-0.036,1.124-0.107c1.712-0.329,3.187-1.387,4.046-2.904l21.066-37.195 c0.871-1.54,1.012-3.372,0.386-5.026c-0.626-1.654-1.943-2.934-3.615-3.511l-45.397-15.672c-2.705-0.936-5.693,0.195-7.104,2.686 L96.829,76.933c-1.443,2.548-0.832,5.727,1.453,7.558l3.76,3.014l-23.492,34.793c-1.469-0.558-3.055-0.877-4.718-0.877 c-7.361,0-13.35,5.989-13.35,13.35c0,7.361,5.989,13.35,13.35,13.35c1.325,0,2.602-0.2,3.811-0.561l29.152,59.04H49.877 c-4.762,0-8.636,3.874-8.636,8.636v28.575h0.006v101.411v7.2v100.02c0,4.731,3.849,8.58,8.581,8.58h134.244 c4.73,0,8.58-3.849,8.58-8.58v-100.02v-7.2V243.811h251.64v208.777c0,4.65,3.783,8.434,8.434,8.434h9.6 c4.65,0,8.435-3.783,8.435-8.434V243.811v-1.6v-26.975C470.759,210.474,466.885,206.601,462.123,206.601z M115.57,58.453 l42.97,14.834l-19.586,34.583l-35.33-28.324L115.57,58.453z M73.832,140.922c-3.391,0-6.15-2.759-6.15-6.15 c0-3.391,2.759-6.15,6.15-6.15c3.392,0,6.15,2.759,6.15,6.15C79.981,138.163,77.223,140.922,73.832,140.922z M222.257,181.934 V87.609h174.241v94.324h-57.521v-0.312h-59.199v0.312H222.257z M331.777,189.134v17.467h-44.801v-17.467H331.777z M185.451,452.441 c0,0.762-0.619,1.381-1.38,1.381H49.828c-0.761,0-1.38-0.619-1.38-1.381v-100.02h137.004V452.441z M185.451,345.222H48.447V243.811 h137.004V345.222z M463.559,452.588c0,0.681-0.554,1.234-1.234,1.234h-9.6c-0.68,0-1.233-0.554-1.233-1.234V243.811h12.067V452.588 z M463.559,236.611h-13.668h-257.24v-0.001H48.441v-21.374c0-0.792,0.644-1.436,1.436-1.436h229.9h59.199h123.146 c0.791,0,1.436,0.644,1.436,1.436V236.611z"></path> <path d="M374.055,365.885H253.031l-18.152-51.053l-6.784,2.411l18.795,52.863v83.7c0,3.979,3.237,7.215,7.215,7.215H372.98 c3.979,0,7.215-3.236,7.215-7.215v-83.7l18.796-52.863l-6.784-2.411L374.055,365.885z M372.98,453.822H254.105l-0.015-80.736 h118.904L372.98,453.822z"></path> <path d="M281.979,407.2h63.127c2.563,0,4.647-2.085,4.647-4.647v-11.816c0-2.563-2.085-4.646-4.647-4.646h-63.127 c-2.562,0-4.647,2.084-4.647,4.646v11.816C277.332,405.115,279.418,407.2,281.979,407.2z M284.533,393.289h58.021V400h-58.021 V393.289z"></path> <rect height="7.199" width="16.2" x="107.691" y="290.916"></rect> <rect height="7.2" width="16.2" x="107.691" y="400"></rect> </g> </g></svg>
                        <h2 class="italic text-center">Lab Komputer</h2>
                    </div>
                    <div class="w-full py-2 bg-orange-100/75 hover:bg-orange-100/100 rounded-lg hover:shadow-xl">
                        <svg class="h-36 mx-auto" fill="currentColor" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-351 153 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M-283,367.8c0,9-7.3,16.3-16.3,16.3s-16.3-7.3-16.3-16.3s7.3-16.3,16.3-16.3S-283,358.8-283,367.8z M-280.8,387.3h-18.7 h-18.7c-11.3,0-18.5,9.3-18.5,21.1v0.3h74.4v-0.1C-262.1,396.7-269.2,387.3-280.8,387.3z M-239.1,367.8c0,9,7.3,16.3,16.3,16.3 s16.3-7.3,16.3-16.3s-7.3-16.3-16.3-16.3S-239.1,358.8-239.1,367.8z M-204.3,387.3H-223h-18.7c-11.3,0-18.5,9.3-18.5,21.1v0.3h74.4 v-0.1C-185.6,396.7-192.8,387.3-204.3,387.3z M-146.3,351.5c-9,0-16.3,7.3-16.3,16.3s7.3,16.3,16.3,16.3s16.3-7.3,16.3-16.3 S-137.3,351.5-146.3,351.5z M-127.8,387.3h-18.7h-18.7c-11.3,0-18.5,9.3-18.5,21.1v0.3h74.4v-0.1 C-109.1,396.7-116.3,387.3-127.8,387.3z M-245.8,363.6c0-9-7.3-16.3-16.3-16.3c-9,0-16.3,7.3-16.3,16.3c0,9,7.3,16.3,16.3,16.3 C-253.1,379.9-245.8,372.6-245.8,363.6z M-169.3,363.6c0-9-7.3-16.3-16.3-16.3c-9,0-16.3,7.3-16.3,16.3c0,9,7.3,16.3,16.3,16.3 C-176.6,379.9-169.3,372.6-169.3,363.6z M-301.1,215.1c7.2,0,13.1-5.9,13.1-13.1s-5.9-13.1-13.1-13.1s-13.1,5.9-13.1,13.1 S-308.3,215.1-301.1,215.1z M-333.7,274.4v-39.9c0-9,7.3-16.3,16.3-16.3h16.3h13.3c4.2,0,8.4,1.6,11.6,4.8 c0,0.1,13.6,13.7,13.6,13.7h6.7h0.1v-71.8h-14.5v-11.8h151.2v11.8h-12.3v155h-124.4v-71.8h-9c-1.5,0-2.9-0.6-3.9-1.5l-11.5-11.5 c-0.3-0.3-0.8-0.5-1.2-0.5c-0.9,0-1.6,0.7-1.6,1.6v42.3v58.7c0,4.5-3.7,8.2-8.2,8.2s-8.2-3.7-8.2-8.2v-57c0-0.9-0.7-1.6-1.6-1.6 s-1.6,0.7-1.6,1.6v57.1c0,4.5-3.7,8.2-8.2,8.2s-8.2-3.7-8.2-8.2v-58.7v-27.7v-13.1c0-0.9-0.7-1.6-1.6-1.6c-0.9,0-1.6,0.7-1.6,1.6 v36.7c0,3.2-2.5,5.7-5.7,5.7C-331.1,280.2-333.6,277.6-333.7,274.4z M-252.3,236.7h13.7c1.1,0,2.1,0.3,3,0.9l14.7-20.3 c0.5-0.6,1.3-0.8,1.9-0.3c0.6,0.5,0.7,1.3,0.3,1.9l-15,20.7c0.4,0.8,0.7,1.7,0.7,2.8c0,3.2-2.5,5.7-5.7,5.7h-13.4h-0.2v68.3h117.4 V165h-117.4V236.7z"></path> </g></svg>
                        <h2 class="italic text-center">Tutor Berprngalaman</h2>
                    </div>
                    <div class="w-full py-2 bg-orange-100/50 hover:bg-orange-100/100 rounded-lg hover:shadow-xl">
                        <svg class="h-36 mx-auto" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M108.14 248.352V46.6484C108.14 41.9057 104.234 38 99.4917 38H45.6484C40.9057 38 37 41.9057 37 46.6484V248.352C37 253.094 40.9057 257 45.6484 257H99.2127C104.234 257 108.14 253.094 108.14 248.352ZM42.5796 87.1006H102.561V208.178H42.5796V87.1006ZM102.561 81.521H42.5796V69.2459H102.561V81.521ZM42.5796 213.758H102.561V226.033H42.5796V213.758ZM45.6484 43.5796H99.2127C100.887 43.5796 102.282 44.9745 102.282 46.6484V63.6662H42.5796V46.6484C42.5796 44.9745 43.9745 43.5796 45.6484 43.5796ZM42.5796 248.352V231.613H102.561V248.352C102.561 250.025 101.166 251.42 99.4917 251.42H45.6484C43.9745 251.42 42.5796 250.025 42.5796 248.352Z" fill="black"></path> <path d="M123.205 257H176.77C181.512 257 185.418 253.094 185.418 248.352V46.6484C185.418 41.9057 181.512 38 176.77 38H123.205C118.463 38 114.557 41.9057 114.557 46.6484V248.352C114.557 253.094 118.463 257 123.205 257ZM120.137 213.758H180.117V226.033H120.137V213.758ZM179.838 208.178H120.137V178.048H180.117V208.178H179.838ZM176.77 251.42H123.205C121.531 251.42 120.137 250.025 120.137 248.352V231.613H180.117V248.352C179.838 250.025 178.444 251.42 176.77 251.42ZM123.205 43.5796H176.77C178.444 43.5796 179.838 44.9745 179.838 46.6484V172.469H120.137V46.6484C120.137 44.9745 121.531 43.5796 123.205 43.5796Z" fill="black"></path> <path d="M254.326 38H200.483C195.74 38 191.834 41.9057 191.834 46.6484V248.352C191.834 253.094 195.74 257 200.483 257H254.047C258.79 257 262.696 253.094 262.696 248.352V46.6484C262.975 41.9057 259.069 38 254.326 38ZM197.414 87.1006H257.395V208.178H197.414V87.1006ZM257.395 81.521H197.414V69.2459H257.395V81.521ZM197.414 213.758H257.395V226.033H197.414V213.758ZM200.483 43.5796H254.047C255.721 43.5796 257.116 44.9745 257.116 46.6484V63.6662H197.414V46.6484C197.414 44.9745 198.809 43.5796 200.483 43.5796ZM254.326 251.42H200.483C198.809 251.42 197.414 250.025 197.414 248.352V231.613H257.395V248.352C257.395 250.025 256 251.42 254.326 251.42Z" fill="black"></path> <path d="M72.4303 114.162C59.5972 114.162 49.2749 129.227 49.2749 147.64C49.2749 166.052 59.5972 181.117 72.4303 181.117C85.2634 181.117 95.5857 166.052 95.5857 147.64C95.5857 129.227 85.2634 114.162 72.4303 114.162ZM72.4303 175.259C62.666 175.259 54.8545 162.704 54.8545 147.361C54.8545 132.017 62.666 119.462 72.4303 119.462C82.1947 119.462 90.0061 132.017 90.0061 147.361C90.0061 162.704 82.1947 175.259 72.4303 175.259Z" fill="black"></path> <path d="M227.544 114.162C214.711 114.162 204.389 129.227 204.389 147.64C204.389 166.052 214.711 181.117 227.544 181.117C240.377 181.117 250.699 166.052 250.699 147.64C250.699 129.227 240.098 114.162 227.544 114.162ZM227.544 175.259C217.78 175.259 209.968 162.704 209.968 147.361C209.968 132.017 217.78 119.462 227.544 119.462C237.308 119.462 245.12 132.017 245.12 147.361C245.12 162.704 237.029 175.259 227.544 175.259Z" fill="black"></path> <path d="M151.103 135.922C163.937 135.922 174.259 120.857 174.259 102.445C174.259 84.0318 163.937 69.2458 151.103 69.2458C138.27 69.2458 127.948 84.3108 127.948 102.724C127.948 121.136 138.27 135.922 151.103 135.922ZM151.103 74.8255C160.868 74.8255 168.679 87.3796 168.679 102.724C168.679 118.067 160.868 130.622 151.103 130.622C141.339 130.622 133.528 118.067 133.528 102.724C133.528 87.3796 141.339 74.8255 151.103 74.8255Z" fill="black"></path> </svg>
                        <h2 class="italic text-center">Taman Baca Masyarakat</h2>
                    </div>
                    <div class="w-full py-2 bg-orange-100/75 hover:bg-orange-100/100 rounded-lg hover:shadow-xl">
                        <svg class="h-36 mx-auto" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M90.1501 79.1004H93.7001C94.6416 79.1004 95.5446 78.7264 96.2103 78.0607C96.8761 77.3949 97.2501 76.4919 97.2501 75.5504C97.2501 74.6089 96.8761 73.706 96.2103 73.0402C95.5446 72.3744 94.6416 72.0004 93.7001 72.0004H90.1501C89.2086 72.0004 88.3056 72.3744 87.6399 73.0402C86.9741 73.706 86.6001 74.6089 86.6001 75.5504C86.6001 76.4919 86.9741 77.3949 87.6399 78.0607C88.3056 78.7264 89.2086 79.1004 90.1501 79.1004V79.1004Z" fill="black"></path> <path d="M245.888 137.64L224.588 132.989V132.421L219.405 87.6559C218.89 83.3201 216.795 79.3263 213.521 76.438C210.246 73.5498 206.022 71.9699 201.655 72.0004H107.9C106.958 72.0004 106.056 72.3745 105.39 73.0402C104.724 73.706 104.35 74.6089 104.35 75.5504C104.35 76.492 104.724 77.3949 105.39 78.0607C106.056 78.7264 106.958 79.1004 107.9 79.1004H201.762C204.378 79.0815 206.91 80.0265 208.875 81.7551C210.839 83.4836 212.098 85.8748 212.412 88.4724V89.7504H51.1C51.1 86.9259 52.2221 84.217 54.2193 82.2197C56.2166 80.2225 58.9254 79.1004 61.75 79.1004H75.95C76.8915 79.1004 77.7945 78.7264 78.4602 78.0607C79.126 77.3949 79.5 76.492 79.5 75.5504C79.5 74.6089 79.126 73.706 78.4602 73.0402C77.7945 72.3745 76.8915 72.0004 75.95 72.0004H61.75C57.0424 72.0004 52.5276 73.8705 49.1989 77.1993C45.8701 80.5281 44 85.0428 44 89.7504V199.8C44 202.625 45.1221 205.334 47.1193 207.331C49.1166 209.328 51.8254 210.45 54.65 210.45H65.6195C66.4843 215.387 69.0621 219.861 72.8996 223.084C76.737 226.308 81.5882 228.075 86.6 228.075C91.6117 228.075 96.463 226.308 100.3 223.084C104.138 219.861 106.716 215.387 107.58 210.45H196.969C197.834 215.387 200.412 219.861 204.25 223.084C208.087 226.308 212.938 228.075 217.95 228.075C222.962 228.075 227.813 226.308 231.65 223.084C235.488 219.861 238.066 215.387 238.93 210.45H246.35C249.175 210.45 251.883 209.328 253.881 207.331C255.878 205.334 257 202.625 257 199.8V151.52C257.005 148.287 255.906 145.15 253.886 142.626C251.865 140.102 249.044 138.343 245.888 137.64ZM249.9 171.4H248.125C246.713 171.4 245.358 170.839 244.36 169.841C243.361 168.842 242.8 167.488 242.8 166.075C242.8 164.663 243.361 163.309 244.36 162.31C245.358 161.311 246.713 160.75 248.125 160.75H249.9V171.4ZM249.9 151.52V153.65H248.125C244.83 153.65 241.669 154.959 239.339 157.29C237.009 159.62 235.7 162.78 235.7 166.075C235.7 169.371 237.009 172.531 239.339 174.861C241.669 177.191 244.83 178.5 248.125 178.5H249.9V189.15H229.594C226.119 186.924 222.078 185.74 217.95 185.74C213.822 185.74 209.781 186.924 206.306 189.15H200.2V139.45H221.109L244.326 144.598C245.905 144.945 247.317 145.821 248.33 147.079C249.344 148.338 249.897 149.905 249.9 151.52ZM74.956 189.15H51.1V139.45H150.5V150.1H65.3C64.3585 150.1 63.4555 150.474 62.7898 151.14C62.124 151.806 61.75 152.709 61.75 153.65C61.75 154.592 62.124 155.495 62.7898 156.161C63.4555 156.826 64.3585 157.2 65.3 157.2H150.5V189.15H98.244C94.7686 186.924 90.7276 185.74 86.6 185.74C82.4724 185.74 78.4314 186.924 74.956 189.15V189.15ZM150.5 132.35H122.1V96.8504H150.5V132.35ZM115 132.35H86.6V96.8504H115V132.35ZM107.474 202.924C107.282 201.837 106.997 200.768 106.622 199.729V199.729V199.481C106.266 198.568 105.851 197.678 105.379 196.818V196.463H199.525C199.525 196.463 199.525 196.712 199.348 196.818C198.877 197.678 198.462 198.568 198.105 199.481V199.729C197.759 200.774 197.486 201.842 197.289 202.924C197.289 202.924 197.289 203.208 197.289 203.35H107.616L107.474 202.924ZM217.524 132.35H200.2V96.8504H213.335L217.346 131.001L217.524 132.35ZM193.1 96.8504V132.35H171.8C170.858 132.35 169.956 132.724 169.29 133.39C168.624 134.056 168.25 134.959 168.25 135.9C168.25 136.842 168.624 137.745 169.29 138.411C169.956 139.076 170.858 139.45 171.8 139.45H193.1V189.15H157.6V96.8504H193.1ZM79.5 96.8504V132.35H51.1V96.8504H79.5ZM51.1 199.8V196.25H68.1755C68.1755 196.25 68.1755 196.499 67.998 196.605C67.5269 197.465 67.1119 198.355 66.7555 199.268V199.516C66.4085 200.561 66.1357 201.629 65.939 202.711V203.137H54.65C53.7442 203.139 52.8721 202.794 52.2122 202.174C51.5522 201.554 51.1543 200.705 51.1 199.8ZM86.6 221.1C82.8339 221.1 79.2221 219.604 76.5591 216.941C73.8961 214.278 72.4 210.667 72.4 206.9C72.4 204.696 72.9133 202.522 73.8991 200.55C74.885 198.578 76.3164 196.863 78.08 195.54V195.54C80.1897 193.958 82.6983 192.995 85.3248 192.758C87.9512 192.521 90.5917 193.02 92.9504 194.2C95.3091 195.379 97.2928 197.192 98.6792 199.435C100.066 201.678 100.8 204.263 100.8 206.9C100.8 210.667 99.3039 214.278 96.6409 216.941C93.9779 219.604 90.3661 221.1 86.6 221.1ZM217.95 221.1C214.184 221.1 210.572 219.604 207.909 216.941C205.246 214.278 203.75 210.667 203.75 206.9C203.75 204.696 204.263 202.522 205.249 200.55C206.235 198.578 207.666 196.863 209.43 195.54V195.54C211.54 193.958 214.048 192.995 216.675 192.758C219.301 192.521 221.942 193.02 224.3 194.2C226.659 195.379 228.643 197.192 230.029 199.435C231.416 201.678 232.15 204.263 232.15 206.9C232.15 210.667 230.654 214.278 227.991 216.941C225.328 219.604 221.716 221.1 217.95 221.1ZM249.9 199.8C249.9 200.742 249.526 201.645 248.86 202.311C248.194 202.976 247.292 203.35 246.35 203.35H238.966C238.966 203.35 238.966 203.066 238.966 202.924C238.774 201.837 238.489 200.768 238.114 199.729V199.729V199.481C237.758 198.568 237.343 197.678 236.871 196.818C236.871 196.818 236.871 196.57 236.694 196.463H249.9V199.8Z" fill="black"></path> </svg>
                        <h2 class="italic text-center">Study Tour</h2>
                    </div>

                </div>
            </div>
        </section>

        <section id="kegiatan" class="max-w-screen bg-gradient-to-t to-green-200 via-100-200 from-teal-300 pt-5 pb-20 px-5">
            <div class="grid sm:grid-cols-3 grid-cols-1 items-center">
                <div class="grid sm:grid-cols-3 grid-cols-1 sm:col-span-2 col-span-1  gap-4">
                    <div class="col-span-1 sm:col-span-2 w-full py-2 rounded-lg hover:shadow-xl h-52 bg-cover bg-no-repeat bg-center shadow-xl relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img1.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Jambore Pendidikan Kesetaraan
                        </div>
                    </div>

                    <div class="w-full py-2 bg-cover h-52 bg-no-repeat bg-center shadow-xl rounded-lg relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img3.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Pentas Seni
                        </div>
                    </div>
                    
                    <div class="w-full py-2 rounded-lg bg-cover h-52 bg-no-repeat bg-center shadow-xl relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img5.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Senam Pagi
                        </div>
                    </div>
                    
                    <div class="col-span-1 sm:col-span-2 w-full py-2 rounded-lg bg-cover h-52 bg-no-repeat bg-center shadow-xl relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img6.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Study Tour
                        </div>
                    </div>

                    <div class="col-span-1 sm:col-span-2 w-full py-2 rounded-lg hover:shadow-xl h-52 bg-cover bg-no-repeat bg-center shadow-xl relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img7.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Kegiatan P5
                        </div>
                    </div>
                    
                    <div class="w-full py-2 bg-cover h-52 bg-no-repeat bg-center shadow-xl rounded-lg relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img8.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Kegiatan P5
                        </div>
                    </div>
                    
                    <div class="col-span-1 sm:col-span-2 w-full py-2 rounded-lg hover:shadow-xl h-52 bg-cover bg-no-repeat bg-center shadow-xl relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img11.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Program PKW
                        </div>
                    </div>
                    
                    <div class="w-full py-2 bg-cover h-52 bg-no-repeat bg-center shadow-xl rounded-lg relative group hover:scale-105 transition-all" 
                    style="background-image: url('/img/img10.jpg');">
                        <div class="absolute bottom-0 w-full text-center bg-black/75 rounded-b-lg font-bold text-transparent transition-all duration-200 h-0 py-0 group-hover:h-fit group-hover:py-2 group-hover:text-white">
                            Program PKW
                        </div>
                    </div>

                </div>
                <div class="text-center sm:text-left px-5 sm:order-last order-first ">
                    <h1 class="font-extrabold text-3xl">KEGIATAN</h1>
                    <h2 class="font-semibold italic py-2">Kegiatan-kegiatan yang dilaksanakan oleh PKBM Harapan Bangsa meliputi beragam aktivitas yang didesain untuk memperkaya pengalaman belajar para siswa serta meningkatkan keterampilan mereka dalam berbagai bidang.</h2>
                </div>

            </div>
        </section>

        <footer class="p-4 bg-teal-300 md:p-8 lg:p-10 ">
            <div class="mx-auto max-w-screen-xl text-center">
                <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 ">
                    <div class="">
                        <img src="img/logo.png" alt="" class="h-14">
                    </div>
                    PKBM Harapan Bangsa    
                </a>
                <div class="my-6 text-gray-500 grid grid-cols-1 sm:grid-cols-2 gap-4 px-0 sm:px-44">
                    <div class="text-center sm:text-right text-gray-800">
                        <h1 class="font-bold">Alamat</h1>
                        <h2 class="text-gray-500">Jl. Kalianja No 10, RT 01 RW 02, Desa Petir, Kecamatan Kalibagor, Kabupaten Banyumas, Kode pos 53191</h2>
                    </div>
                    <div class="text-center sm:text-left text-gray-800">
                        <h1 class="font-bold">Kontak</h1>
                        <h2 class="text-gray-500">
                            <span class="flex justify-center sm:justify-start">Email : <span> pkbmharapanbangsa@gmail.com</span></span>
                            <span class="flex justify-center sm:justify-start">Whatsapp : <span> +62 858-7636-5917</span></span>
                        </h2>
                    </div>
                </div>
                <ul class="flex flex-wrap justify-center space-x-4 items-center mb-6 text-gray-900 ">
                    <a target="_blank" href="https://facebook.com/profile.php?id=100082708192315&locale=id_ID" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a target="_blank" href="https://instagram.com/pkbm_harapan_bangsa" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                    <a target="_blank" href="https://twitter.com/pkbmharbang" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                    <a target="_blank" href="https://wa.me/6285876365917" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5 p-0.5" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>whatsapp [#128]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7599.000000)" fill="currentColor"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M259.821,7453.12124 C259.58,7453.80344 258.622,7454.36761 257.858,7454.53266 C257.335,7454.64369 256.653,7454.73172 254.355,7453.77943 C251.774,7452.71011 248.19,7448.90097 248.19,7446.36621 C248.19,7445.07582 248.934,7443.57337 250.235,7443.57337 C250.861,7443.57337 250.999,7443.58538 251.205,7444.07952 C251.446,7444.6617 252.034,7446.09613 252.104,7446.24317 C252.393,7446.84635 251.81,7447.19946 251.387,7447.72462 C251.252,7447.88266 251.099,7448.05372 251.27,7448.3478 C251.44,7448.63589 252.028,7449.59418 252.892,7450.36341 C254.008,7451.35771 254.913,7451.6748 255.237,7451.80984 C255.478,7451.90987 255.766,7451.88687 255.942,7451.69881 C256.165,7451.45774 256.442,7451.05762 256.724,7450.6635 C256.923,7450.38141 257.176,7450.3464 257.441,7450.44643 C257.62,7450.50845 259.895,7451.56477 259.991,7451.73382 C260.062,7451.85686 260.062,7452.43903 259.821,7453.12124 M254.002,7439 L253.997,7439 L253.997,7439 C248.484,7439 244,7443.48535 244,7449 C244,7451.18666 244.705,7453.21526 245.904,7454.86076 L244.658,7458.57687 L248.501,7457.3485 C250.082,7458.39482 251.969,7459 254.002,7459 C259.515,7459 264,7454.51465 264,7449 C264,7443.48535 259.515,7439 254.002,7439" id="whatsapp-[#128]"> </path> </g> </g> </g> </g></svg>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/@pkbmharapanbangsa1886" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>youtube [#168]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7442.000000)" fill="currentColor"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289" id="youtube-[#168]"> </path> </g> </g> </g> </g></svg>
                    </a>
                </ul>
                <span class="text-sm text-gray-500 sm:text-center ">© 2024-2025 <a href="#" class="hover:underline">PKBM Harapan Bangsa™</a>. All Rights Reserved.</span>
            </div>
            </footer>

    </main>


  
<div class="fixed bottom-12 right-12 sm:bottom-20 sm:right-20 z-40 border">
        <div class="relative group cursor-pointer">
            <div class="group-hover:bg-green-700 group-hover:w-0 group-hover:h-0 absolute top-1/2 -translate-y-1/2 right-4 transition-all bg-white w-60 z-10 font-bold text-green-500 pl-5 border border-green-700 rounded-l-full text-lg py-2">
                <span class="group-hover:hidden delay-1000">Lihat Absen Siswa</span>
            </div>
            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" id="qr" type="button" class="text-green-700 absolute top-1/2 -translate-y-1/2 -left-1/2 -translate-x-1/2 border border-green-700 bg-white z-40 group-hover:bg-green-700 group-hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-5 text-center inline-flex items-center me-2 ">
                <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23 4C23 2.34315 21.6569 1 20 1H16C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 21.4477 9 22 9C22.5523 9 23 8.55228 23 8V4Z" fill="currentColor"></path> <path d="M23 16C23 15.4477 22.5523 15 22 15C21.4477 15 21 15.4477 21 16V20C21 20.5523 20.5523 21 20 21H16C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23H20C21.6569 23 23 21.6569 23 20V16Z" fill="currentColor"></path> <path d="M4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16V20C1 21.6569 2.34315 23 4 23H8C8.55228 23 9 22.5523 9 22C9 21.4477 8.55228 21 8 21H4Z" fill="currentColor"></path> <path d="M1 8C1 8.55228 1.44772 9 2 9C2.55228 9 3 8.55228 3 8V4C3 3.44772 3.44772 3 4 3H8C8.55228 3 9 2.55228 9 2C9 1.44772 8.55228 1 8 1H4C2.34315 1 1 2.34315 1 4V8Z" fill="currentColor"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6C11 5.44772 10.5523 5 10 5H6C5.44772 5 5 5.44772 5 6V10C5 10.5523 5.44772 11 6 11H10C10.5523 11 11 10.5523 11 10V6ZM9 7.5C9 7.22386 8.77614 7 8.5 7H7.5C7.22386 7 7 7.22386 7 7.5V8.5C7 8.77614 7.22386 9 7.5 9H8.5C8.77614 9 9 8.77614 9 8.5V7.5Z" fill="currentColor"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18 13C18.5523 13 19 13.4477 19 14V18C19 18.5523 18.5523 19 18 19H14C13.4477 19 13 18.5523 13 18V14C13 13.4477 13.4477 13 14 13H18ZM15 15.5C15 15.2239 15.2239 15 15.5 15H16.5C16.7761 15 17 15.2239 17 15.5V16.5C17 16.7761 16.7761 17 16.5 17H15.5C15.2239 17 15 16.7761 15 16.5V15.5Z" fill="currentColor"></path> <path d="M14 5C13.4477 5 13 5.44772 13 6C13 6.55229 13.4477 7 14 7H16.5C16.7761 7 17 7.22386 17 7.5V10C17 10.5523 17.4477 11 18 11C18.5523 11 19 10.5523 19 10V6C19 5.44772 18.5523 5 18 5H14Z" fill="currentColor"></path> <path d="M14 8C13.4477 8 13 8.44771 13 9V10C13 10.5523 13.4477 11 14 11C14.5523 11 15 10.5523 15 10V9C15 8.44772 14.5523 8 14 8Z" fill="currentColor"></path> <path d="M6 13C5.44772 13 5 13.4477 5 14V16C5 16.5523 5.44772 17 6 17C6.55229 17 7 16.5523 7 16V15.5C7 15.2239 7.22386 15 7.5 15H10C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13H6Z" fill="currentColor"></path> <path d="M10 17C9.44771 17 9 17.4477 9 18C9 18.5523 9.44771 19 10 19C10.5523 19 11 18.5523 11 18C11 17.4477 10.5523 17 10 17Z" fill="currentColor"></path> </g></svg>
            </button>
        </div>
    </div>

    <div id="popup-modal" tabindex="-1" class=" hidden  bg-black/80 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                

                <div class="p-4">
                    <div class="text-center border-4 py-2 rounded-lg mt-8 border-gray-400 text-gray-500 font-bold text-lg">
                        Cek Kehadiran Siswa
                    </div>
                    <video id="preview" class="w-96 h-64 mt-2 p-1 border-4 rounded-lg border-dashed border-gray-400"></video>
                </div>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23 4C23 2.34315 21.6569 1 20 1H16C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 21.4477 9 22 9C22.5523 9 23 8.55228 23 8V4Z" fill="currentColor"></path> <path d="M23 16C23 15.4477 22.5523 15 22 15C21.4477 15 21 15.4477 21 16V20C21 20.5523 20.5523 21 20 21H16C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23H20C21.6569 23 23 21.6569 23 20V16Z" fill="currentColor"></path> <path d="M4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 2.55228 15 2 15C1.44772 15 1 15.4477 1 16V20C1 21.6569 2.34315 23 4 23H8C8.55228 23 9 22.5523 9 22C9 21.4477 8.55228 21 8 21H4Z" fill="currentColor"></path> <path d="M1 8C1 8.55228 1.44772 9 2 9C2.55228 9 3 8.55228 3 8V4C3 3.44772 3.44772 3 4 3H8C8.55228 3 9 2.55228 9 2C9 1.44772 8.55228 1 8 1H4C2.34315 1 1 2.34315 1 4V8Z" fill="currentColor"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6C11 5.44772 10.5523 5 10 5H6C5.44772 5 5 5.44772 5 6V10C5 10.5523 5.44772 11 6 11H10C10.5523 11 11 10.5523 11 10V6ZM9 7.5C9 7.22386 8.77614 7 8.5 7H7.5C7.22386 7 7 7.22386 7 7.5V8.5C7 8.77614 7.22386 9 7.5 9H8.5C8.77614 9 9 8.77614 9 8.5V7.5Z" fill="currentColor"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18 13C18.5523 13 19 13.4477 19 14V18C19 18.5523 18.5523 19 18 19H14C13.4477 19 13 18.5523 13 18V14C13 13.4477 13.4477 13 14 13H18ZM15 15.5C15 15.2239 15.2239 15 15.5 15H16.5C16.7761 15 17 15.2239 17 15.5V16.5C17 16.7761 16.7761 17 16.5 17H15.5C15.2239 17 15 16.7761 15 16.5V15.5Z" fill="currentColor"></path> <path d="M14 5C13.4477 5 13 5.44772 13 6C13 6.55229 13.4477 7 14 7H16.5C16.7761 7 17 7.22386 17 7.5V10C17 10.5523 17.4477 11 18 11C18.5523 11 19 10.5523 19 10V6C19 5.44772 18.5523 5 18 5H14Z" fill="currentColor"></path> <path d="M14 8C13.4477 8 13 8.44771 13 9V10C13 10.5523 13.4477 11 14 11C14.5523 11 15 10.5523 15 10V9C15 8.44772 14.5523 8 14 8Z" fill="currentColor"></path> <path d="M6 13C5.44772 13 5 13.4477 5 14V16C5 16.5523 5.44772 17 6 17C6.55229 17 7 16.5523 7 16V15.5C7 15.2239 7.22386 15 7.5 15H10C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13H6Z" fill="currentColor"></path> <path d="M10 17C9.44771 17 9 17.4477 9 18C9 18.5523 9.44771 19 10 19C10.5523 19 11 18.5523 11 18C11 17.4477 10.5523 17 10 17Z" fill="currentColor"></path> </g></svg>

                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Arahkan Kamera ke Kode QR Pada Kartu Tanda Siswa</h3>
                    <button id="change" type="button" class="text-white w-full text-center bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 justify-center me-2 mb-2">
    Putar Kamera
</button>
<button id="stop" data-modal-hide="popup-modal" type="button" class="text-white w-full text-center bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 justify-center me-2">
    Tutup
</button>
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

<form id="myForm" action="/cek-absen-siswa" method="get" class="hidden">
    @csrf
    <input type="hidden" name="idSiswa" id="scannedNumber" value="">
    <button type="submit">Process</button>
</form>

<script type="text/javascript" src="/asset/js/instascan.min.js"></script>

<script>
    var scanner;
    var isFrontCamera = 1;

    document.getElementById('qr').addEventListener('click', function(){
        startScanner();
    });

    function startScanner() {
        scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
            document.getElementById('scannedNumber').value = content;
            scanner.stop();
            console.log('Scanner stopped');
            document.getElementById('myForm').submit();
        });
        
        

        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                
                scanner.start(cameras[isFrontCamera])
                document.getElementById('change').addEventListener('click', function(){
                    if(isFrontCamera == 1){
                        isFrontCamera = isFrontCamera - 1;
                    } else {
                        isFrontCamera = isFrontCamera + 1;
                    }
                    scanner.stop();
                    scanner.start(cameras[isFrontCamera])
                });
                
                // scanner.start(isFrontCamera ? cameras[1] : cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
        
        document.getElementById('stop').addEventListener('click', function(){
            scanner.stop();
            isFrontCamera = 1;
        });
    }
</script>



        
    </body>
</html>
