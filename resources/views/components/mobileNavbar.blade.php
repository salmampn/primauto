<!-- Mobile Navbar -->
<nav id="mobileNavbar" class="flex justify-between pb-1 bg-white fixed top-0 left-0 right-0 z-10 md:hidden">
    <div class="flex justify-between w-full px-4">
        <div class="flex gap-2">
            <img class="w-12" src="{{ asset('storage/logo.png') }}" alt="Primauto Logo">
            <div class="m-auto">
                <i class="flex text-md font-bold m-auto">
                    <h1>Prim</h1>
                    <h1 class="text-red-500">auto</h1>
                </i>
                <p class="text-center font-semibold text-sm">Used Car</p>
            </div>
        </div>
        <button id="menuBtn" class="focus:outline-none">
            <!-- Hamburger Menu Icon -->
            <svg class="w-8 h-8 text-black transition duration-300 ease-in-out transform hover:scale-110"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
    <div id="mobileMenu"
        class="fixed top-0 left-0 right-0 h-screen bg-white text-xl font-semibold hidden transform transition-transform duration-300 ease-in-out">
        <div class="flex justify-end px-4 py-2">
            <!-- Close Button -->
            <button id="closeBtn" class="focus:outline-none">
                <svg class="w-8 h-8 text-black transition duration-300 ease-in-out transform hover:scale-110"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center justify-center h-full gap-4 text-2xl">
            <!-- Menu Items -->
            <a href="" class="menu-item hover:text-red-500 transition duration-300 ease-in-out">Home</a>
            <a href="" class="menu-item hover:text-red-500 transition duration-300 ease-in-out">Products</a>
            <a href="" class="menu-item hover:text-red-500 transition duration-300 ease-in-out">Contact</a>
        </div>
    </div>
</nav>
