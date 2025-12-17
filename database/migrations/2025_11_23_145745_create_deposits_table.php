<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
{
    Schema::create('deposits', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelanggan');
        $table->string('nomor_hp');
        $table->text('deskripsi_barang');
        $table->string('foto_barang')->nullable();
        
        // --- INI KOLOM BARU KITA ---
        $table->string('ukuran_box'); // kecil, sedang, besar
        $table->integer('total_biaya')->default(0); // Buat nyimpen hasil hitungan
        // ---------------------------

        $table->enum('status', ['masuk', 'keluar'])->default('masuk');
        $table->timestamps(); // created_at dipakai sebagai jam masuk
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
