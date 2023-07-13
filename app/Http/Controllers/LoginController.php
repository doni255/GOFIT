<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Pegawai;
 
use Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $loginData = $request->all();
        $validate = Validator::make($loginData, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(is_null($request->username) || is_null($request->password)) {
            return response(['message' => 'Username / Password Empty'], 400);
        }         
        
        $cekPegawai = Pegawai::where('nama_pegawai', '=', $loginData['username'])->first();

        

        if ($cekPegawai) {
            // Periksa apakah password dari pengguna cocok dengan password yang tersimpan dalam bentuk teks biasa (TIDAK DISARANKAN)
            if ($loginData['password'] == $cekPegawai['password']) {
                $Pegawai = Pegawai::where('nama_pegawai', $loginData['username'])->first();

                session()->flash('login-notification', 'Login Berhasil 😊');
                
            }
            else {
                return response([
                    'message' => 'Password salah',
                ], 400);
            }
        } else {
            return response([
                'message' => 'Username tidak ditemukan',
            ], 400);
            
        }


        $token = $Pegawai->createToken('Authentication Token')->accessToken;
        return response([
            'message' => 'Login pegawai success',
            'data' => $Pegawai,
            'token' => $token,
            'token_type' => 'Bearer',
        ]);

        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
    }

   

    public function logout(Request $request)
{
    // $this->guard()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    Session::flash('logout-notification', 'You have been logged out successfully.');

    return redirect('/loginpage');
}

}
