<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Resources\MahasiswaResource;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller

    //TODO ( Praktikan Nomor Urut 1 )
    
   { public function index()

    $Mahasiswa = Mahasiswa ::latest()->paginate(10);
    return new MahasiswaResource(True, 'List Data Mahasiswa', $Mahasiswa);
    {
    // Tambahkan fungsi index yang akan menampilkan List Data Mahasiswa
    public function show(string $id):
    {
        $Mahasiswa = Mahasiswa::find(id: $id);
        return new MahasiswaResource(True, 'Detail Data Mahasiswa!', $Mahasiswa);
    }
    // dan fungsi show yang akan menampilkan Detail Data Mahasiswa yang dipilih

    //TODO ( Praktikan Nomor Urut 2 )
    // Tambahkan fungsi store yang akan menyimpan data Mahasiswa baru

    //TODO ( Praktikan Nomor Urut 3 )
    // Tambahkan fungsi update yang mengubah data Mahasiswa yang dipilih

    //TODO ( Praktikan Nomor Urut 4 )
    // Tambahkan fungsi destroy yang akan menghapus data Mahasiswa yang dipilih
}

