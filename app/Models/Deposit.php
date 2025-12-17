<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    // Ini memberi izin kolom mana saja yang boleh diisi
    protected $fillable = [
        'nama_pelanggan',
        'nomor_hp',
        'deskripsi_barang',
        'foto_barang',
        'status',
        'ukuran_box',  
        'durasi',
        'total_biaya',
    ];
}