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
        //Isi bagian ini dengan perintah untuk membuat struktur tabel 'mahasiswas'.
        //Gunakan Schema::create dan tambahkan kolom sesuai kebutuhan
        //Semua kolom menggunakan tipe data string, untuk nim menggunakan unique
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
