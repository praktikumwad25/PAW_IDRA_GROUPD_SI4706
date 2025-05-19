<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Resources\MahasiswaResource;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    //TODO ( Praktikan Nomor Urut 1 )
    // Tambahkan fungsi index yang akan menampilkan List Data Mahasiswa
    // dan fungsi show yang akan menampilkan Detail Data Mahasiswa yang dipilih

    //TODO ( Praktikan Nomor Urut 2 )
    // Tambahkan fungsi store yang akan menyimpan data Mahasiswa baru

    //TODO ( Praktikan Nomor Urut 3 )
    // Tambahkan fungsi update yang mengubah data Mahasiswa yang dipilih
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama'=> 'sometimes|required',
            'nim'=> 'sometimes|required',
            'jurusan'=> 'sometimes|required',
            'fakultas'=> 'sometimes|required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->update([
            'nama'=> $request->nama,
            'nim'=> $request->nim,
            'jurusan'=> $request->jurusan,
            'fakultas'=> $request->fakultas,
        ]);

        return new MahasiswaResource(true, 'Data Berhasil Diubah!', $mahasiswa);
    }


    //TODO ( Praktikan Nomor Urut 4 )
    // Tambahkan fungsi destroy yang akan menghapus data Mahasiswa yang dipilih
}

