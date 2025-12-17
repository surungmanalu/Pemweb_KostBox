@extends('layout')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-brand-900 py-24">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-brand-900 via-brand-800 to-black opacity-90"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Tentang Kostbox
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-brand-100">
                Solusi penitipan barang terpercaya untuk mahasiswa dan masyarakat umum.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Siapa Kami?</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Kostbox hadir sebagai jawaban atas masalah penyimpanan barang yang sering dialami oleh mahasiswa dan perantau. 
                    Kami memahami betapa repotnya harus memindahkan semua barang saat libur semester atau pindah kos.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Dengan sistem keamanan 24 jam dan lokasi yang strategis, kami menjamin keamanan barang-barang berharga Anda 
                    sehingga Anda bisa pulang kampung atau berlibur dengan tenang.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-brand-50 p-6 rounded-xl text-center">
                    <div class="text-brand-600 font-bold text-3xl mb-2">100+</div>
                    <div class="text-gray-600">Pelanggan Puas</div>
                </div>
                <div class="bg-brand-50 p-6 rounded-xl text-center">
                    <div class="text-brand-600 font-bold text-3xl mb-2">24/7</div>
                    <div class="text-gray-600">Keamanan</div>
                </div>
                <div class="bg-brand-50 p-6 rounded-xl text-center">
                    <div class="text-brand-600 font-bold text-3xl mb-2">100%</div>
                    <div class="text-gray-600">Aman</div>
                </div>
                <div class="bg-brand-50 p-6 rounded-xl text-center">
                    <div class="text-brand-600 font-bold text-3xl mb-2">Lokasi</div>
                    <div class="text-gray-600">Strategis</div>
                </div>
            </div>
        </div>

        <!-- Vision Mission -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Visi & Misi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-gray-200 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-brand-100 rounded-lg flex items-center justify-center text-brand-600 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Visi</h3>
                    <p class="text-gray-600">
                        Menjadi penyedia layanan penitipan barang nomor satu yang paling dipercaya dan diandalkan di Indonesia.
                    </p>
                </div>
                <div class="bg-white border border-gray-200 p-8 rounded-2xl hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-brand-100 rounded-lg flex items-center justify-center text-brand-600 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Misi</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-brand-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Memberikan pelayanan keamanan terbaik
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-brand-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Menawarkan harga yang terjangkau bagi mahasiswa
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-brand-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Memudahkan proses penitipan dengan teknologi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
