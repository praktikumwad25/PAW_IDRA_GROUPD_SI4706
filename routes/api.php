<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

Route::get('/login', function (Request $request) {
    return response()->json(['message' => 'Unauthorized'], 401);
});

//TODO
//Tambahkan route untuk proses register dan login user.
//Pastikan mengarahkan ke method register dan login pada AuthController.

//TODO
//Buat group route dengan middleware 'auth:sanctum'.
//Di dalam group ini, tambahkan route untuk logout user dan resource route untuk Mahasiswa dan MataKuliah agar dapat menggunakan APInya
