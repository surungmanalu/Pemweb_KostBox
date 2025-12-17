<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostbox - Solusi Penitipan Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            200: '#fed7aa',
                            300: '#fdba74',
                            400: '#fb923c',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                            800: '#9a3412',
                            900: '#7c2d12',
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-brand-500 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-brand-500/30">
                            K
                        </div>
                        <span class="font-bold text-2xl tracking-tight text-gray-900">Kost<span class="text-brand-500">box</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/') }}" class="text-sm font-medium {{ request()->is('/') ? 'text-brand-600' : 'text-gray-600 hover:text-brand-500' }} transition-colors">Home</a>
                    <a href="#services" class="text-sm font-medium text-gray-600 hover:text-brand-500 transition-colors">Layanan</a>
                    <a href="#faq" class="text-sm font-medium text-gray-600 hover:text-brand-500 transition-colors">FAQ</a>
                    
                    @auth
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium {{ request()->routeIs('admin.*') ? 'text-brand-600' : 'text-gray-600 hover:text-brand-500' }} transition-colors">Admin Dashboard</a>
                        @else
                            <a href="{{ route('deposits.index') }}" class="text-sm font-medium {{ request()->routeIs('deposits.*') ? 'text-brand-600' : 'text-gray-600 hover:text-brand-500' }} transition-colors">Dashboard</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-5 py-2.5 rounded-full bg-gray-100 text-gray-900 font-medium text-sm hover:bg-gray-200 transition-all">
                                Logout
                            </button>
                        </form>
                    @else
                        <div class="flex items-center gap-4">
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-900 hover:text-brand-600 transition-colors">Masuk</a>
                            <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-full bg-brand-500 text-white font-medium text-sm hover:bg-brand-600 shadow-lg shadow-brand-500/30 hover:shadow-brand-500/40 transition-all transform hover:-translate-y-0.5">
                                Daftar Sekarang
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-gray-500 hover:text-gray-900 focus:outline-none p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white border-t border-gray-100" id="mobile-menu">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="{{ url('/') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->is('/') ? 'bg-brand-50 text-brand-600' : 'text-gray-700 hover:bg-gray-50' }}">Home</a>
                <a href="#services" class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">Layanan</a>
                
                @auth
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('admin.*') ? 'bg-brand-50 text-brand-600' : 'text-gray-700 hover:bg-gray-50' }}">Admin Dashboard</a>
                    @else
                        <a href="{{ route('deposits.index') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('deposits.*') ? 'bg-brand-50 text-brand-600' : 'text-gray-700 hover:bg-gray-50' }}">Dashboard</a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST" class="block w-full">
                        @csrf
                        <button type="submit" class="w-full text-left px-3 py-2 rounded-lg text-base font-medium text-red-600 hover:bg-red-50">
                            Logout
                        </button>
                    </form>
                @else
                    <div class="pt-4 mt-4 border-t border-gray-100 grid grid-cols-2 gap-4">
                        <a href="{{ route('login') }}" class="flex justify-center items-center px-4 py-2 border border-gray-300 rounded-lg text-base font-medium text-gray-700 hover:bg-gray-50">
                            Masuk
                        </a>
                        <a href="{{ route('register') }}" class="flex justify-center items-center px-4 py-2 border border-transparent rounded-lg text-base font-medium text-white bg-brand-500 hover:bg-brand-600">
                            Daftar
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center text-white font-bold text-lg">K</div>
                        <span class="font-bold text-xl">Kostbox</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Solusi penitipan barang aman dan terpercaya untuk mahasiswa dan umum. Praktis, murah, dan anti ribet.
                    </p>
                </div>
                
                <div>
                    <h3 class="font-bold text-lg mb-6">Layanan</h3>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li><a href="{{ route('deposits.create') }}" class="hover:text-brand-500 transition-colors">Penitipan Barang</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-6">Perusahaan</h3>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li><a href="{{ route('about') }}" class="hover:text-brand-500 transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-6">Hubungi Kami</h3>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Purbalingga</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>+62831 5531 1055</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">© 2025 Kostbox. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.407-.06 4.123-.06h.08zm-1.634 14.634a5.332 5.332 0 110-10.664 5.332 5.332 0 010 10.664zm0-8.832a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm5.225-3.616a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>