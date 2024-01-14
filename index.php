<?php
include "navbar.php"
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

  <title>Beranda | Way Kalam</title>

</head>

<body class="bg-slate-100 overflow-x-hidden">
  <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
  <div id="carouselExampleIndicators" class="relative" data-te-carousel-init data-te-ride="carousel" data-car>
    <!--Carousel indicators-->
    <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-te-carousel-indicators>
      <button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
      <button type="button" data-te-target="#carouselExampleIndicators" data-te-slide-to="2" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
    </div>

    <!--Carousel items-->
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] h-screen">
      <!--First item-->
      <div class="relative float-left -mr-[100%] w-full h-[100%] transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none backdrop-filter backdrop-brightness-150" data-te-carousel-item data-te-carousel-active>
        <img src="./images/gambar2.png" class="block w-full" alt="Wild Landscape" />
      </div>
      <!--Second item-->
      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
        <img src="./images/gambar1.png" class="block w-full" alt="Camera" />
      </div>
      <!--Third item-->
      <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
        <img src="./images/gambar1.png" class="block w-full" alt="Exotic Fruits" />
      </div>
    </div>

    <!--Carousel controls - prev item-->
    <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleIndicators" data-te-slide="prev">
      <span class="inline-block h-8 w-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </span>
      <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
    </button>
    <!--Carousel controls - next item-->
    <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleIndicators" data-te-slide="next">
      <span class="inline-block h-8 w-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </span>
      <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
    </button>
  </div>

  <section class="md:px-16 md:py-40 flex gap-40 justify-center">
    <h2 class="font-extrabold text-[32px] grid-cols-1 font-bigShoulders bg-gradient-to-r from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">Way Kalam</h2>
    <div class="md:w-[65%]">
      <p class="text-[20px] mb-8">Desa Way Kalam merupakan sebuah desa wisata yang terletak di lereng gunung Rajabasa kabupaten Lampung Selatan. Hampir semua wisata yang ada di desa Way Kalam berhubungan dengan alam. Di Desa Wisata Way Kalam kamu diajak untuk merasakan experience yang memacu adrenalin dan menambah pengetahuan. Air terjun dan taman edukatif "Lebah Kelanceng" merupakan sarana yang tepat. Tak jarang wisatawan asing memilih Desa Way Kalam sebagai destinasi wisata mereka.....</p>
      <a href="#" class="py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </section>

  <section class="md:px-10 md:pb-20 flex justify-center w-full">
    <iframe src="https://drive.google.com/file/d/1AVUQN7lWLPwGtA1c-EjdJjRkD_9u4etG/preview" width="810" height="457" class="rounded-2xl" allowfullscreen allow='autoplay'></iframe>
    <div class="bg-[#132758] flex justify-center items-center flex-col rounded-2xl ms-20" style="background-image: url(./images/visit.png); background-repeat: no-repeat; background-size: cover; min-width: 457px; min-height: 457px;">
      <div class="flex justify-center items-center flex-col">
        <p style="font-size: 64px; font-family: 'Big Shoulders Display', sans-serif; font-weight: 900; background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">2000+</p>
        <p class="text-2xl text-white">Pengunjung Air Terjun</p>
      </div>
      <div class="flex justify-center items-center flex-col">
        <p style="font-size: 64px; font-family: 'Big Shoulders Display', sans-serif; font-weight: 900; background: var(--p2, linear-gradient(137deg, #fff 24.22%, #7cdbf0 105.58%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">22+</p>
        <p class="text-2xl text-white">Homestay</p>
      </div>
    </div>
  </section>

  <section class="md:px-20 md:py-20 bg-[#E2F6FF]" style="background-image: url(./images/bg1.svg); background-repeat: no-repeat; background-size: cover;">
    <div class="flex justify-center w-full items-center">
      <div class="w-[50%]">
        <h2 class="font-bigShoulders text-[32px] font-extrabold bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">WISATA</h2>
        <p class="font-bigShoulders text-[64px] font-extrabold text-[#132758]">EXPLORE THE VILLAGE AND PRECISION BEHIN OUR HEALING AND ENJOY</p>
      </div>
      <div class="ms-20 w-[50%]">
        <p class="text-[#132758] text-[20px] mb-8">
          Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.
        </p>
        <a href="#" class="py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="md:p-20 flex gap-20 justify-center">
      <div class="relative grid h-[50rem] w-full max-w-[50rem] flex-col items-end overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
        <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url(./images/gambar2.png)] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
          <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
        </div>
        <div class="relative p-6 px-6 py-14 md:px-12 text-left">
          <h2 class="mb-6 block text-[32px] font-extrabold font-bigShoulders leading-[1.5] tracking-normal text-white antialiased">
            AIR TERJUN WAY KALAM
          </h2>
          <h5 class="block mb-4 text-xl antialiased font-normal leading-snug tracking-normal text-white">
            Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.
          </h5>
          <a href="#" class="block py-4 px-8 text-center text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-[#132758] md:border-0 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="relative grid h-[50rem] w-full max-w-[28rem] flex-col items-end overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
        <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url(./images/gambar2.png)] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
          <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
        </div>
        <div class="relative p-6 px-6 py-14 md:px-12 text-left">
          <h2 class="mb-6 block text-[32px] font-extrabold font-bigShoulders leading-[1.5] tracking-normal text-white antialiased">
            AIR TERJUN ANAKAN
          </h2>
          <h5 class="block mb-4 text-xl antialiased font-normal leading-snug tracking-normal text-white">
            Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.
          </h5>
          <a href="#" class="block py-4 px-8 text-center text-white border-[#EBFAFD] rounded-lg hover:bg-gray-100 md:hover:bg-[#132758] md:border-2 border-spacing-2 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="relative grid h-[50rem] w-full max-w-[28rem] flex-col items-end overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
        <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url(./images/gambar2.png)] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
          <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
        </div>
        <div class="relative p-6 px-6 py-14 md:px-12 text-left">
          <h2 class="mb-6 block text-[32px] font-extrabold font-bigShoulders leading-[1.5] tracking-normal text-white antialiased">
            CAMPING GROUND
          </h2>
          <h5 class="block mb-4 text-xl antialiased font-normal leading-snug tracking-normal text-white">
            Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan.  Berlokasi di kawasan lereng gunung Rajabasa.
          </h5>
          <a href="#" class="block py-4 px-8 text-center text-white border-[#EBFAFD] rounded-lg hover:bg-gray-100 md:hover:bg-[#132758] md:border-2 border-spacing-2 md:p-y-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <div class="flex justify-center w-screen items-center md:py-20">
      <div class="w-[50%]">
        <h2 class="font-bigShoulders text-[32px] font-extrabold bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PRODUK UMKM DESA</h2>
        <p class="font-bigShoulders text-[64px] font-extrabold text-[#132758] md:pb-8">YUK, LIAT PRODUK UMKM DESA WAY KALAM!</p>
        <a href="#" class="py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:py-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="ms-20">
        <div class="carousel space-x-4">
          <div class="carousel-item">
            <img class="rounded-lg" src="./images/umkm1.png" alt="Burger" />
          </div>
          <div class="carousel-item">
            <img class="rounded-lg" src="./images/umkm1.png" alt="Burger" />
          </div>
          <div class="carousel-item">
            <img class="rounded-lg" src="./images/umkm1.png" alt="Burger" />
          </div>
          <div class="carousel-item">
            <img class="rounded-lg md:mr-24" src="./images/umkm1.png" alt="Burger" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="md:p-20 flex gap-20 justify-center w-full items-center">
      <div class="w-[50%]"><img src="./images/penghargaan1.png" alt="Anugerah Desa Wisata Indonesia 2023"></div>
      <div class="w-[50%]">
        <h2 class="font-bigShoulders text-[32px] font-extrabold bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PENGHARGAAN</h2>
        <p class="font-bigShoulders text-[64px] font-extrabold text-[#132758]">ANUGRAH DESA WISATA INDONESIA 2023</p>
        <p class="text-[20px]">Desa Wisata Way Kalam tak ada henti hentinya mencetak prestasi di tingkat nasional. Kali ini, Way Kalam dipilih oleh Kemenparekraf sebagai Anugerah Desa Wisata Indonesia 2023 dengan tema Desa Sebagai Simbol Kebangkitan Nasional. </p>
      </div>
    </div>

    <div class="md:p-20 flex gap-20 justify-center w-full items-center">
      <div class="w-[50%]">
        <h2 class="font-bigShoulders text-[32px] font-extrabold bg-gradient-to-br from-[#00A693] via-[#00A693] to-[#132758] inline-block text-transparent bg-clip-text">PENGHARGAAN</h2>
        <p class="font-bigShoulders text-[64px] font-extrabold text-[#132758]">300 BESAR ANUGRAH DESA WISATA INDONESIA 2022</p>
        <p class="text-[20px]">Desa Way Kalam merupakan satu dari 300 besar Anugerah Desa Wisata Indonesia Tahun 2022. Tidak hanya tahun 2022, pada tahun 2021 Desa Way Kalam juga menerima penghargaan yang sama sebagai desa wisata yang berkualitas.  </p>
      </div>
      <div class="w-[50%]"><img src="./images/penghargaan2.png" alt="Anugerah Desa Wisata Indonesia 2023"></div>
    </div>

    <div class="bg-[#132758] w-screen flex md:p-20 gap-20 items-center" style="background-image: url(./images/bg-penghargaan.png); background-repeat: no-repeat; background-size: cover;">
      <p class="w-[50%] font-bigShoulders text-[64px] font-black bg-gradient-to-br from-[#ffffff] via-[#ffffff] to-[#7CDBF0] inline-block text-transparent bg-clip-text">LIHAT PENGHARGAAN DESA WAY KALAM LEBIH BANYAK</p>
      <div class="w-[50%]">
        <p class="text-[20px] mb-8">Desa Wisata Way Kalam adalah salah satu dari sekian banyak desa wisata yang berkembang di wilayah Kabupaten Lampung Selatan</p>
        <a href="#" class="py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:py-3 md:px-6"><span class="me-2">Lihat Selengkapnya</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/daisyui@0.0.6/dist/full.js"></script>
</body>

</html>