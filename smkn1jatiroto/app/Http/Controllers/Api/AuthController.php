<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validator  = Validator::make($request->all(),[
            'username' => 'required',
            'password' =>'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                'success'   => false,
                'message'   => 'Ada kesalahan pada inputan anda',
                'errors'    => $validator->errors()
            ],422);
        }

        $credentials = $request->only('username','password');
        if(Auth::attempt($credentials)){
            $user   = Auth::user();
            $token  = $user->createToken('auth_token_'.$user->role)->plainTextToken;

            return response()->json([
                'success'   => true,
                'message'   => 'Login berhasil',
                'data'      =>[
                    'user'  =>[
                        'id' => $user->id,
                        'name' => $user->name,
                        'username' => $user->username,
                        'role' => $user->role,
                        'detail' => $user->profil
                    ],
                    'access_token' => $token,
                    'token_type' => 'Bearer'
                ]
            ],200);
        }
    }



    public function logout(Request $request)
    {
       $user = $request->user();

        // 1. Cek apakah user dan tokennya benar-benar ada
        if ($user && $user->currentAccessToken()) {

            // Hapus token yang sedang aktif digunakan
            $user->currentAccessToken()->delete();

            return response()->json([
                'success' => true,
                'message' => 'Logout berhasil, token telah dihapus.'
            ], 200);
        }

        // 2. Jika token tidak ditemukan / null
        return response()->json([
            'success' => false,
            'message' => 'Gagal logout: Token tidak ditemukan atau sudah tidak aktif.'
        ], 400);
    }
}
