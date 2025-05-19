<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    //TODO
    //Buat fungsi Register agar user dapat mendaftarkan akunnya dan mendapatkan Token
    public function register (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|uniqe:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

         if ($validator->fails()){
            return response()->json($validator->errors(), 401);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::makes($request->password),
        ]);
    }

    //TODO
    //Buat fungsi login agar user dapat login pada akun yang telah terdaftar dan mendapatkan Token

    //TODO
    //Buat fungsi logout agar user dapat keluar dari akunnya ketika tidak digunakan
}