<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //TODO
        //Isi bagian ini dengan perintah untuk membuat struktur tabel 'mata_kuliahs'.
        //Gunakan Schema::create dan tambahkan kolom sesuai kebutuhan
        //Kolom nama dan kode menggunakan tipe data string sedangkan kolom sks menggunakan integer
        //Kolom kode menggunakan unique
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliahs');
    }
};
