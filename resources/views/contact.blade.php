@extends('layouts.layout')

@section('title', 'Contact')
<div class="absolute inset-0 -z-10 hidden lg:block">
    <img class="object-cover w-screen h-4/6 md:h-screen" src="{{ asset('storage/bg.jpg') }}" alt="">
    <div class="absolute inset-0 bg-black opacity-70"></div>
</div>
@section('content')
    <div class="flex flex-col h-screen">
        <div class="p-6 mt-10 md:mt-0 md:p-20 text-[#13131a] lg:text-[#f5f5fa] flex-grow">
            <div class="text-2xl md:text-5xl font-semibold mb-4">
                <h1 class="text-red-500">Contact</h1>
                <p class="text-3xl md:text-5xl">Reach out. Contact</p>
                <p class="text-3xl md:text-5xl">details below</p>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-10">
                <div class="mb-4 w-full lg:w-6/12 lg:hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5261.506144159022!2d106.89707680946479!3d-6.157457640660078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f53d4addf2f9%3A0x511a861c984c17ed!2sprimauto!5e0!3m2!1sid!2sid!4v1712749558501!5m2!1sid!2sid"
                        width="100%" height="250" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-full lg:w-6/12 hidden lg:block">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5261.506144159022!2d106.89707680946479!3d-6.157457640660078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f53d4addf2f9%3A0x511a861c984c17ed!2sprimauto!5e0!3m2!1sid!2sid!4v1712749558501!5m2!1sid!2sid"
                        width="100%" height="415" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="flex flex-col w-full lg:w-6/12 lg:pl-6 lg:gap-6 text-xl lg:text-2xl overflow-y-auto">
                    <div class="location mb-4">
                        <h2 class="font-semibold">Location</h2>
                        <p class="text-base lg:text-lg">Jl. Boulevard Bar. Raya No.2 Blok XB1,
                            Klp. Gading Bar., Kec. Klp.
                            Gading,
                            Jakarta, Daerah Khusus Ibukota Jakarta 14240</p>
                    </div>
                    <div class="flex flex-col grid-cols-12 gap-6 lg:grid mb-4">
                        <div class="col-span-6">
                            <h2 class="font-semibold">Email</h2>
                            <p class="text-base lg:text-lg">hondaprimauto@gmail.com</p>
                        </div>
                        <div class="col-span-6">
                            <h2 class="font-semibold">Hotline</h2>
                            <p class="text-base lg:text-lg">0813-9988-5850</p>
                        </div>
                    </div>
                    <div class="flex flex-col grid-cols-12 gap-6 lg:grid">
                        <div class="col-span-6">
                            <h2 class="font-semibold">Contact Person 1</h2>
                            <p class="text-base lg:text-lg">0812-902-1564</p>
                            <a href="https://wa.me/628129021564" target="_blank">
                                <p
                                    class="text-base lg:text-lg text-red-500 lg:hover:text-white transition duration-300 ease-in-out">
                                    [ Maureen ]</p>
                            </a>
                        </div>
                        <div class="col-span-6">
                            <h2 class="font-semibold">Contact Person 2</h2>
                            <p class="text-base lg:text-lg">0896-6766-9909</p>
                            <a href="https://wa.me/6289667669909" target="_blank">
                                <p
                                    class="text-base lg:text-lg text-red-500 lg:hover:text-white transition duration-300 ease-in-out">
                                    [ Marcel ]</p>
                            </a>
                        </div>
                    </div>
                    <div class="WaButton mt-4 lg:text-[#f5f5fa]">
                        @include('components.buttonwa')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
