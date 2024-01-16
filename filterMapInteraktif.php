<?php
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/Logo.svg" type="image/x-icon">

    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@0.0.6/dist/full.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Map Interaktif | Way Kalam</title>

    <style>
        nav {
            background-color: white !important;
        }

        nav #nav-menu {
            color: black !important;
        }
    </style>
</head>

<body class="bg-slate-100 overflow-x-hidden">
    <section class="flex pt-28 md:pt-16 flex-col-reverse md:flex-row">
        <div class="md:max-w-96 bg-[#EBFAFD] p-6">
            <form class="pt-6 md:pt-16">
                <div class="flex">
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" class="block py-3 px-6 w-full z-20 text-gray-900 bg-white rounded-lg shadow-md shadow-gray-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Tujuan ..." required>
                        <button type="submit" class="absolute top-0 end-0 py-3 px-6 font-medium h-full text-[#132758] rounded-r-lg overflow-hidden hover:bg-[#132758] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="my-6 bg-white rounded-lg shadow-md shadow-gray-200">
                <div class="p-6 flex justify-between">
                    <div class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-semua.svg" alt="">
                        <p>Semua</p>
                    </div>
                    <div class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-wisata.svg" alt="">
                        <p>Wisata</p>
                    </div>
                    <div class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-umkm.svg" alt="">
                        <p>UMKM</p>
                    </div>
                </div>
                <div class="p-6 flex justify-between">
                    <div class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-homestay.svg" alt="">
                        <p>Homestay</p>
                    </div>
                    <div class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-peternakan.svg" alt="">
                        <p>Peternakan</p>
                    </div>
                    <div class="max-w-12 flex items-center flex-col justify-end">
                        <img src="./images/icon-warung.svg" alt="">
                        <p>Warung</p>
                    </div>
                </div>
            </div>

            <div class="py-6">
                <a href="" class="flex items-center py-4 px-8 text-white bg-[#7CDBF0] rounded-lg md:p-y-3 md:px-6">
                    <p class="flex items-center space-x-2 text-[#132758] font-bold">Filter Aktif: Wisata</p>
                    <img src="./images/icon-wisata.svg" alt="wisata" class="h-5 px-2 filter invert-1">
                </a>
            </div>


            <div class="space-y-6">
                <div class="max-h-32 min-h-32 shadow-md shadow-gray-200 flex bg-white rounded-lg overflow-hidden">
                    <div class="h-32 min-w-28">
                        <img src="./images/gambar1.png" alt="Air Terjun Way Kalam" class="h-full object-cover" />
                    </div>
                    <div class="p-3 w-96 flex flex-col items-start justify-around">
                        <h2 class="text-[14px] font-bold">Air Terjun Way Kalam</h2>
                        <p>Wisata</p>
                        <div class="space-x-2">
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                        </div>
                    </div>
                </div>
                <div class="max-h-32 min-h-32 shadow-md shadow-gray-200 flex bg-white rounded-lg overflow-hidden">
                    <div class="h-32 min-w-28">
                        <img src="./images/gambar1.png" alt="Air Terjun Way Kalam" class="h-full object-cover" />
                    </div>
                    <div class="p-3 w-96 flex flex-col items-start justify-around">
                        <h2 class="text-[14px] font-bold">Air Terjun Way Kalam</h2>
                        <p>Wisata</p>
                        <div class="space-x-2">
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                        </div>
                    </div>
                </div>
                <div class="max-h-32 min-h-32 shadow-md shadow-gray-200 flex bg-white rounded-lg overflow-hidden">
                    <div class="h-32 min-w-28">
                        <img src="./images/gambar1.png" alt="Air Terjun Way Kalam" class="h-full object-cover" />
                    </div>
                    <div class="p-3 w-96 flex flex-col items-start justify-around">
                        <h2 class="text-[14px] font-bold">Air Terjun Way Kalam</h2>
                        <p>Wisata</p>
                        <div class="space-x-2">
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                            <i class="fa-solid fa-star" style="color: #D3E564;"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="w-full">
            <img src="./images/map.png" alt="" class="w-full">
        </div>
    </section>

    <footer class="bg-[#132758] w-screen shadow flex justify-center" style="background-image: url(./images/footerVector.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="w-full p-4 md:p-20">
            <div class="flex gap-10 md:gap-20 items-center flex-col md:flex-row">
                <div class="flex flex-col text-left md:w-[50%]">
                    <h2 class="font-bigShoulders text-[14px] md:text-[32px] font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">HUBUNGI KAMI</h2>
                    <p class="font-bigShoulders text-[20px] md:text-[64px] text-left font-black bg-gradient-to-br from-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">MASIH RAGU DAN MEMILIKI BANYAK PERTANYAAN?</p>
                </div>
                <div class="md:w-[50%]">
                    <p class="md:text-[20px] mb-8 text-white w-[80%]">Way Kalam, Kec. Penengahan, Kabupaten Lampung Selatan, Lampung 35592 082372825801</p>
                    <div class="">
                        <a href="" class="px-2"><i class="fa-brands fa-instagram fa-2xl text-white"></i></a>
                        <a href="" class="px-2"><i class="fa-brands fa-facebook fa-2xl text-white"></i></a>
                        <a href="" class="px-2"><i class="fa-solid fa-globe fa-2xl text-white"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 lg:my-20" />
            <div class="flex justify-between items-start md:items-center flex-col md:flex-row">
                <span class=" block text-sm text-white sm:text-center">© 2023 <a href="" class="hover:underline">© 2024 CONNECTH US ALL RIGHT RESERVED</span>
                <ul class="md:font-medium flex flex-row p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:mt-0 items-start md:items-center">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Wisata</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">UMKM</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Kontak</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Testimonial</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>