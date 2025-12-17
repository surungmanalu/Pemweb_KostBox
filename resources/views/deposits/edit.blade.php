@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="md:flex md:items-center md:justify-between mb-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Edit Penitipan
            </h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500">
                Kembali
            </a>
        </div>
    </div>

    <div class="bg-white shadow-sm rounded-xl border border-gray-200 overflow-hidden">
        <div class="p-6 sm:p-8">
            @if ($errors->any())
                <div class="rounded-md bg-red-50 p-4 mb-6 border border-red-100">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">
                                Terdapat kesalahan pada input Anda
                            </h3>
                            <div class="mt-2 text-sm text-red-700">
                                <ul class="list-disc pl-5 space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('deposits.update', $deposit->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="nama_pelanggan" class="block text-sm font-medium text-gray-700">Nama Pelanggan</label>
                    <div class="mt-1">
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-md px-3 py-2 border" value="{{ old('nama_pelanggan', $deposit->nama_pelanggan) }}">
                    </div>
                </div>

                <div>
                    <label for="nomor_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                    <div class="mt-1">
                        <input type="text" name="nomor_hp" id="nomor_hp" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-md px-3 py-2 border" value="{{ old('nomor_hp', $deposit->nomor_hp) }}">
                    </div>
                </div>

                <div>
                    <label for="deskripsi_barang" class="block text-sm font-medium text-gray-700">Deskripsi Barang</label>
                    <div class="mt-1">
                        <textarea id="deskripsi_barang" name="deskripsi_barang" rows="3" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-md px-3 py-2 border">{{ old('deskripsi_barang', $deposit->deskripsi_barang) }}</textarea>
                    </div>
                </div>

                <div>
                    <label for="foto_barang" class="block text-sm font-medium text-gray-700">Foto Barang</label>
                    <div class="mt-1 flex items-center">
                        @if($deposit->foto_barang)
                            <div class="mr-4">
                                <img src="{{ asset('storage/' . $deposit->foto_barang) }}" alt="Foto Barang" class="h-20 w-20 object-cover rounded-md border border-gray-300">
                            </div>
                        @endif
                        <input type="file" name="foto_barang" id="foto_barang" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-md px-3 py-2 border">
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG. Maks: 2MB.</p>
                </div>

                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                    <div>
                        <label for="box_size" class="block text-sm font-medium text-gray-700">Ukuran Box</label>
                        <select id="box_size" name="box_size" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm rounded-md border">
                            <option value="">Pilih Ukuran</option>
                            <option value="Small" data-price="10000" {{ old('box_size', $deposit->ukuran_box) == 'Small' ? 'selected' : '' }}>Small (30x30x30 cm) - Rp 10.000/hari</option>
                            <option value="Medium" data-price="20000" {{ old('box_size', $deposit->ukuran_box) == 'Medium' ? 'selected' : '' }}>Medium (50x50x50 cm) - Rp 20.000/hari</option>
                            <option value="Large" data-price="30000" {{ old('box_size', $deposit->ukuran_box) == 'Large' ? 'selected' : '' }}>Large (100x100x100 cm) - Rp 30.000/hari</option>
                        </select>
                    </div>

                    <div>
                        <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi Penitipan (Hari)</label>
                        <div class="mt-1">
                            <input type="number" name="durasi" id="durasi" min="1" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-md px-3 py-2 border" value="{{ old('durasi', $deposit->durasi) }}">
                        </div>
                    </div>

                    <div>
                        <label for="total_biaya" class="block text-sm font-medium text-gray-700">Total Biaya</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="text" name="total_biaya" id="total_biaya" readonly class="bg-gray-50 focus:ring-brand-500 focus:border-brand-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md px-3 py-2 border text-gray-500 cursor-not-allowed" value="{{ old('total_biaya', $deposit->total_biaya) }}">
                        </div>
                    </div>
                    
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select id="status" name="status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-brand-500 focus:border-brand-500 sm:text-sm rounded-md border">
                            <option value="masuk" {{ old('status', $deposit->status) == 'masuk' ? 'selected' : '' }}>Masuk</option>
                            <option value="keluar" {{ old('status', $deposit->status) == 'keluar' ? 'selected' : '' }}>Keluar</option>
                        </select>
                    </div>
                </div>

                <div class="pt-5 border-t border-gray-200">
                    <div class="flex justify-end">
                        <button type="button" onclick="window.history.back()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500">
                            Batal
                        </button>
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 shadow-lg shadow-brand-500/30 hover:shadow-brand-500/40 transition-all transform hover:-translate-y-0.5">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const boxSizeSelect = document.getElementById('box_size');
        const durasiInput = document.getElementById('durasi');
        const totalBiayaInput = document.getElementById('total_biaya');

        function calculatePrice() {
            const selectedOption = boxSizeSelect.options[boxSizeSelect.selectedIndex];
            const pricePerDay = selectedOption.getAttribute('data-price');
            const duration = durasiInput.value;

            if (pricePerDay && duration) {
                const total = parseInt(pricePerDay) * parseInt(duration);
                totalBiayaInput.value = total;
            } else {
                totalBiayaInput.value = '';
            }
        }

        boxSizeSelect.addEventListener('change', calculatePrice);
        durasiInput.addEventListener('input', calculatePrice);
    });
</script>
@endsection