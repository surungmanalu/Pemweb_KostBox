<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deposits = Deposit::latest()->get();

        return view('deposits.index', compact('deposits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deposits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi: Cek apakah inputan sudah benar
        $request->validate([
            'nama_pelanggan' => 'required',
            'nomor_hp' => 'required',
            'item_name' => 'required',
            'description' => 'required',
            'box_size' => 'required|in:Small,Medium,Large',
            'durasi' => 'required|integer|min:1',
        ]);

        // 2. Siapkan wadah data
        $data = $request->all();

        // Hitung total biaya di server untuk keamanan
        $prices = [
            'Small' => 10000,
            'Medium' => 20000,
            'Large' => 30000,
        ];
        
        $data['ukuran_box'] = $request->box_size;
        $data['total_biaya'] = $prices[$request->box_size] * $request->durasi;
        $data['deskripsi_barang'] = $request->item_name . ' - ' . $request->description;
        $data['status'] = 'masuk'; // Default status

        // 3. Cek apakah ada file foto yang diupload?
        if ($request->file('foto_barang')) {
            $data['foto_barang'] = $request->file('foto_barang')->store('foto-barang', 'public');
        }
        
        // 4. Kirim data ke Database
        Deposit::create($data);

        // 5. Kembali ke halaman utama
        return redirect()->route('deposits.index')->with('success', 'Barang berhasil dititipkan!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    
    {
        //
    }

    // 1. Menampilkan Halaman Edit (Ambil Barang)
     public function edit($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('deposits.edit', compact('deposit'));
    }

    // 2. Proses Update Data (Simpan Perubahan)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'nomor_hp' => 'required',
            'deskripsi_barang' => 'required',
            'box_size' => 'required|in:Small,Medium,Large',
            'durasi' => 'required|integer|min:1',
            'status' => 'required',
        ]);

        $deposit = Deposit::findOrFail($id);
        $data = $request->all();

        // Hitung ulang total biaya
        $prices = [
            'Small' => 10000,
            'Medium' => 20000,
            'Large' => 30000,
        ];
        
        $data['ukuran_box'] = $request->box_size;
        $data['total_biaya'] = $prices[$request->box_size] * $request->durasi;

        // Cek jika ada upload foto baru (foto lama diganti)
        if ($request->file('foto_barang')) {
            // Hapus foto lama dulu biar hemat memori
            if ($deposit->foto_barang) {
                Storage::delete('public/' . $deposit->foto_barang);
            }
            // Simpan foto baru
            $data['foto_barang'] = $request->file('foto_barang')->store('foto-barang', 'public');
        }

        $deposit->update($data);

        return redirect()->route('deposits.index')->with('success', 'Status barang berhasil diperbarui!');
    }

    // 3. Hapus Data
    public function destroy($id)
    {
        $deposit = Deposit::findOrFail($id);

        // Hapus file fotonya juga dari folder
        if ($deposit->foto_barang) {
            Storage::delete('public/' . $deposit->foto_barang);
        }

        $deposit->delete();

        return redirect()->route('deposits.index')->with('success', 'Data berhasil dihapus!');
    }
}
