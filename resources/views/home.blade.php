@extends('layouts.layout')

@section('title', 'Home')
<div class="absolute inset-0 -z-10">
    <img class="object-cover w-screen h-4/6 md:h-screen" src="{{ asset('storage/bg.jpg') }}" alt="">
    <div class="absolute inset-0 bg-black opacity-70"></div>
</div>
@section('content')
    <div id="home" class="relative flex flex-col justify-between h-screen m-auto">
        <div
            class="headline relative flex flex-col justify-center items-center h-full mt-24 mb-16 px-6 text-center text-[#f5f5fa]">
            <div class="flex flex-col gap-2 md:gap-4">
                <h1 class="text-5xl md:text-8xl font-bold text-red-600">PRIMAUTO</h1>
                <h2 class="text-2xl md:text-4xl font-bold">USED CAR</h2>
                <p class="text-base md:text-xl md:text-balance">Jual beli mobil bekas berkualitas, transaksi
                    terpercaya, mudah, dan cepat hanya di Honda Autoland. Temukan ragam model mobil bekas Honda dengan
                    penawaran terbaik sekarang juga</p>
            </div>
        </div>
        <div class="feature bg-black w-auto mt-auto">
            <div class="flex flex-col md:flex-row text-[#f5f5fa] p-4 md:p-9 justify-evenly items-center">
                <div class="flex flex-col items-center text-center w-full md:w-1/3 gap-1">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6em" height="4em" viewBox="0 0 640 512">
                            <path fill="#f5f5fa"
                                d="M629.657 343.598L528.971 444.284c-9.373 9.372-24.568 9.372-33.941 0L394.343 343.598c-9.373-9.373-9.373-24.569 0-33.941l10.823-10.823c9.562-9.562 25.133-9.34 34.419.492L480 342.118V160H292.451a24.005 24.005 0 0 1-16.971-7.029l-16-16C244.361 121.851 255.069 96 276.451 96H520c13.255 0 24 10.745 24 24v222.118l40.416-42.792c9.285-9.831 24.856-10.054 34.419-.492l10.823 10.823c9.372 9.372 9.372 24.569-.001 33.941m-265.138 15.431A23.999 23.999 0 0 0 347.548 352H160V169.881l40.416 42.792c9.286 9.831 24.856 10.054 34.419.491l10.822-10.822c9.373-9.373 9.373-24.569 0-33.941L144.971 67.716c-9.373-9.373-24.569-9.373-33.941 0L10.343 168.402c-9.373 9.373-9.373 24.569 0 33.941l10.822 10.822c9.562 9.562 25.133 9.34 34.419-.491L96 169.881V392c0 13.255 10.745 24 24 24h243.549c21.382 0 32.09-25.851 16.971-40.971z" />
                        </svg>
                    </span>
                    <p class="text-base md:text-xl text-pretty">Menerima tukar tambah serta pembayaran secara cash/kredit.
                    </p>
                </div>
                <div class="flex flex-col items-center text-center w-full md:w-1/3 gap-1 mt-4 lg:mt-0">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6em" height="4em" viewBox="0 0 20 20">
                            <path fill="#f5f5fa"
                                d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm16.5 9a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3" />
                        </svg>
                    </span>
                    <p class="text-base md:text-xl text-pretty">Saat melakukan pembelian, mendapatkan garansi 1
                        tahun/20.000 km.</p>
                </div>
                <div class="flex flex-col items-center text-center w-full md:w-1/3 gap-1 mt-4 lg:mt-0">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6em" height="4em" viewBox="0 0 640 512">
                            <path fill="#f5f5fa"
                                d="m512.1 191l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4c-11.8-4.4-22.6-10.7-32.1-18.6c-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3c-2-12-2.1-24.6 0-37.1c1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7c9.5-7.9 20.4-14.2 32.1-18.6c5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4c11.8 4.4 22.6 10.7 32.1 18.6c4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3c2 12 2.1 24.6 0 37.1c-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7c-9.5 7.9-20.4 14.2-32.1 18.6c-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0m-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8c-38.5-29.7-82.4 14.3-52.8 52.8M386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1c-8.9 24.2-26.4 46.4-42.6 65.8c-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6c-24.6 4.2-50.4 4.4-75.9 0c-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3c-16.2-19.4-33.3-41.6-42.2-65.7c-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29c8.9-24.2 26-46.4 42.2-65.8c7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5c24.6-4.2 50.5-4.4 76-.1c11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3c16.2 19.4 33.2 41.6 42.1 65.8c4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5m-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7c-59.2 77 28.7 164.9 105.7 105.7m243.4 182.7l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4c-11.8-4.4-22.6-10.7-32.1-18.6c-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3c-2-12-2.1-24.6 0-37.1c1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7c9.5-7.9 20.4-14.2 32.1-18.6c5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4c11.8 4.4 22.6 10.7 32.1 18.6c4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3c2 12 2.1 24.6 0 37.1c-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7c-9.5 7.9-20.4 14.2-32.1 18.6c-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0M501.6 431c38.5 29.6 82.4-14.3 52.8-52.8c-38.5-29.6-82.4 14.3-52.8 52.8" />
                        </svg>
                    </span>
                    <p class="text-base md:text-xl text-pretty">Mobil telah diinpeksi serta telah direkondisi menggunakan
                        part original
                        Honda.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
