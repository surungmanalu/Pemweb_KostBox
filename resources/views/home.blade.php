@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Solusi Penitipan Barang</span>
                        <span class="block text-brand-500">Aman & Terpercaya</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Layanan packing, angkut, gudang, hingga cargo. Cocok untuk mahasiswa, perantau, dan umum. Simpan barangmu dengan tenang bersama kami.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 md:py-4 md:text-lg transition-all transform hover:-translate-y-1">
                                Mulai Titip
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#services" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-brand-700 bg-brand-100 hover:bg-brand-200 md:py-4 md:text-lg transition-all">
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 bg-gray-50 flex items-center justify-center">
        <!-- Placeholder for Hero Image -->
        <!-- Hero Image -->
        <img src="{{ asset('images/warehouse-hero.jpg') }}" alt="Gudang Kostbox" class="w-full h-full object-cover">
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-brand-600 font-semibold tracking-wide uppercase">Layanan Kami</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Solusi Lengkap Kebutuhan Logistik
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                Kami menyediakan berbagai layanan untuk memudahkan urusan pindahan dan penyimpanan barang Anda.
            </p>
        </div>

        <div class="mt-10">
            <div class="max-w-3xl mx-auto">
                <!-- Service 1 -->
                <a href="{{ route('deposits.create') }}" class="relative bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all cursor-pointer block group border border-transparent hover:border-brand-200">
                    <dt>
                        <div class="absolute flex items-center justify-center h-16 w-16 rounded-xl bg-brand-500 text-white group-hover:scale-110 transition-transform shadow-lg shadow-brand-500/30">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </div>
                        <p class="ml-24 text-xl leading-6 font-bold text-gray-900 group-hover:text-brand-600 transition-colors">Penitipan Barang</p>
                    </dt>
                    <dd class="mt-4 ml-24 text-base text-gray-500 leading-relaxed">
                        Simpan barang harian, bulanan, hingga tahunan. Gudang aman, bersih, dan terjaga 24 jam. Klik di sini untuk mulai menitipkan barang Anda.
                    </dd>
                    <div class="mt-6 ml-24 flex items-center text-brand-600 font-medium group-hover:translate-x-2 transition-transform">
                        Mulai Titip
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Yang Sering Ditanyakan</h2>
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <h3 class="font-bold text-lg text-gray-900">Barang disimpan di mana? Aman?</h3>
                <p class="mt-2 text-gray-600">Disimpan di gudang mitra terpercaya yang sudah dikurasi oleh tim Kostbox. Akses terbatas dan diawasi penuh CCTV 24 jam.</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-4">
                <h3 class="font-bold text-lg text-gray-900">Bisa titip cuma 1 kardus atau 1 koper?</h3>
                <p class="mt-2 text-gray-600">Bisa banget! Tidak ada minimal barang, sedikit pun tetap kami terima dengan senang hati.</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-4">
                <h3 class="font-bold text-lg text-gray-900">Ada garansi kalau barang hilang?</h3>
                <p class="mt-2 text-gray-600">Ada! Kami memberikan garansi kehilangan hingga Rp1.000.000 untuk memberikan ketenangan pikiran bagi Anda.</p>
            </div>
        </div>
    </div>
</section>
@endsection
