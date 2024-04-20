<nav id="navbar" class="hidden md:flex justify-between pb-1 bg-white fixed top-0 left-0 right-0 z-10">
    <div class="flex ml-10 gap-2 items-center">
        <img class="w-20" src="{{ asset('storage/logo.png') }}" alt="Primauto Logo">
        <div class="m-auto">
            <i class="flex text-2xl font-bold m-auto">
                <h1>Prim</h1>
                <h1 class="text-red-500">auto</h1>
            </i>
            <p class="text-center font-semibold">Used Car</p>
        </div>
    </div>
    <div class="flex gap-x-20 mr-10 text-xl font-semibold">
        <div
            class="m-auto hover:text-red-500 transition duration-300 ease-in-out transform hover:scale-110 active:bg-red-500 active:text-white">
            <a href="/">Home</a></div>
        <div
            class="m-auto hover:text-red-500 transition duration-300 ease-in-out transform hover:scale-110 active:bg-red-500 active:text-white">
            <a href="/products">Products</a></div>
        <div
            class="m-auto hover:text-red-500 transition duration-300 ease-in-out transform hover:scale-110 active:bg-red-500 active:text-white">
            <a href="/contact">Contact</a></div>
    </div>
</nav>
