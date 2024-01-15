<nav class="fixed z-10 w-full" style="backdrop-filter: blur(2px);">
  <div class="flex flex-wrap items-center justify-between mx-auto p-6 md:px-20">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="./Logo.svg" alt="Flowbite Logo" class="h-16" />
    </a>
    <button id="toggleButton" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>

    <div class="hidden w-full h-screen md:h-auto md:block md:w-auto" id="navbar-default">
      <ul class="font-medium h-screen md:h-auto flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:items-center">
        <li>
          <a href="./index.php" class="block py-2 px-3 text-white bg-[#132758] rounded md:bg-transparent md:p-0 md:hover:text-blue-700" aria-current="page">Beranda</a>
        </li>
        <li>
          <a href="./tentang.php" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Tentang</a>
        </li>
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
          <a href="#" class="block py-4 px-8 text-white bg-[#00A693] rounded-lg hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-y-3 md:px-6 md:hover:bg-[#132758]"><span class="me-2">Map Interaktif</span><i class="fa-regular fa-map"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get references to the button and the navbar
    const toggleButton = document.getElementById('toggleButton');
    const navbar = document.getElementById('navbar-default');

    // Add a click event listener to the button
    toggleButton.addEventListener('click', function() {
      // Toggle the 'hidden' class on the navbar
      navbar.classList.toggle('hidden');
    });
  });
</script>