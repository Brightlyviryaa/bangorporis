@extends('layout/app')

@section('title')
    <title>Burger bangor - Home page</title>
@endsection

@section('content')
    <section
        class="flex min-h-[50vh] flex-col-reverse items-center justify-center bg-gradient-to-b from-[#90B523] to-transparent px-10 py-11 lg:flex-row lg:justify-between lg:px-[7.5rem]">
        <div
            class="mt-10 flex max-w-[455px] flex-col items-center justify-center text-center lg:mt-0 lg:block lg:text-start">
            <h1 class="font-inter text-[3rem] font-[800] text-black">Lebih <b>enak</b>, <br /> Lebih <b>murah.</b></h1>
            <p class="mt-3 font-inter text-[1.3rem] font-normal text-black">Sejak 2019 kami telah berproses melewati segala
                rintangan
                menyajikan burger terbaik untuk pelanggan setia
                kami</p>
            <div class="mt-10 flex w-full flex-row items-center justify-center lg:mt-5 lg:items-start lg:justify-start">
                <a
                    class="mx-2 cursor-pointer rounded-full bg-[#90B523] px-5 py-4 font-inter text-lg text-white hover:bg-[#758c32] active:bg-[#6e842e]">Kontak
                    Kami</a>
                <a
                    class="mx-2 cursor-pointer rounded-full bg-black px-5 py-4 font-inter text-lg text-white hover:bg-slate-800 active:bg-slate-900">Lokasi
                    Kami</a>
            </div>
        </div>
        <div class="flex w-full items-center justify-center lg:w-1/3">
            <img src={{ asset('images/burger_master.png') }} alt="Burger"
                class="h-full max-h-[50%] w-full max-w-[50%] lg:max-h-[100%] lg:max-w-[100%]">
        </div>
    </section>
    <section class="mx-auto mt-[8rem] flex min-h-[70vh] max-w-7xl flex-col flex-wrap justify-center">
        <h1 class="text-center font-inter text-[3rem] font-[800] text-black">Our Menus</h1>
        <div class="mb-[4rem] mt-[5rem] flex w-full flex-row flex-wrap items-center justify-between md:items-start">
            @foreach ($menus as $menu)
                <div class="mt-[1rem] flex h-[25rem] w-[17.35rem] flex-col rounded-2xl shadow-2xl">
                    <img src={{ asset('images/burger_master.png') }} alt="{{ $menu['nama'] }}"
                        class="h-[50%] rounded-t-2xl bg-black object-cover">
                    <div class="flex h-full flex-col items-center justify-center p-4 text-center font-inter">
                        <h3 class="text-[24px] font-[600]">{{ $menu['nama'] }}</h3>
                        <p class="mt-3.5 text-[15px] font-[200]">{{ 'Rp. ' . number_format($menu['harga']) }}</p>
                        <a class="mt-3.5 rounded-full bg-[#90B523] px-3 py-2 text-white hover:bg-[#758c32] active:bg-[#6e842e]"
                            href="#">Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>

        <a class="group relative mx-auto mb-[7.5rem] mt-[2.5rem] font-inter text-[32px] font-[500] text-[#354017] transition-transform"
            href="#">
            Lihat Semua Menu
            <span class="group-hover:ml-5 group-hover:transition-transform">-></span>
        </a>
    </section>
    <section class="min-h-[70vh] bg-[#E6EECD] px-10 py-5">

        <h1 class="text-inter text-center font-inter text-[3rem] font-[800] text-black">
            Pertanyaan Umum</h1>

        {{-- QnA Section --}}
        <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-black"
            data-inactive-classes="text-black" class="mt-[2.5rem]">
            <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex w-full items-center justify-between border-b border-black py-5 text-left font-medium text-black"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span>Apa itu burger bangor?</span>
                    <svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="border-b border-gray-200 py-3">
                    <p class="mb-2 text-black">Burger bangor merupakan restoran F&B lokal yang menyajikan burger dan menu
                        lainnya. Daging
                        Burger bangor menggunakan 100% australian beef yang enak namun tidak memakan biaya yang besar untuk
                        bisa menikmati
                        Burger bangor.
                    </p>
                </div>
            </div>

            <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-black"
                data-inactive-classes="text-black">
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex w-full items-center justify-between border-b border-black py-5 text-left font-medium text-black"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                        <span>Dimana burger bangor poris?</span>
                        <svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="border-b border-gray-200 py-3">
                        <p class="mb-2 text-black">berikut adalah alamat dari burger bangor poris indah Ruko poris paradise
                            exclusive Disebelah lab. Biomed A4 No.26,
                            RT.003/RW.003, Poris Gaga, Kec. Cipondoh, Kota Tangerang, Banten 15148
                        </p>
                    </div>
                </div>

                <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-black"
                    data-inactive-classes="text-black">
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex w-full items-center justify-between border-b border-black py-5 text-left font-medium text-black"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="true"
                            aria-controls="accordion-flush-body-3">
                            <span>Bagaimana cara memesan burger bangor?</span>
                            <svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="border-b border-gray-200 py-3">
                            <p class="mb-2 text-black">Burger bangor tersedia di Grab, Go Food, Shopee Food, Air Asia Food,
                                atau langsung datang ke outlet
                            </p>
                        </div>
                    </div>

                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-black"
                        data-inactive-classes="text-black">
                        <h2 id="accordion-flush-heading-4">
                            <button type="button"
                                class="flex w-full items-center justify-between border-b border-black py-5 text-left font-medium text-black"
                                data-accordion-target="#accordion-flush-body-4" aria-expanded="true"
                                aria-controls="accordion-flush-body-3">
                                <span>Apakah burger bangor poris menerima bulk order / orderan langsung banyak untuk suatu
                                    acara?</span>
                                <svg data-accordion-icon class="h-3 w-3 shrink-0 rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                            <div class="border-b border-gray-200 py-3">
                                <p class="mb-2 text-black">Kami menerima permintaan banyak untuk acara, penjelasan lebih
                                    lanjut hubungi kami melalui whatsapp.
                                </p>
                            </div>
                        </div>
                        {{-- QnA Section --}}
    </section>
@endsection
