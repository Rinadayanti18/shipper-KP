<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function masuk(){
        return view('User.UserCorporate.Masuk',[
            'title' => 'Masuk'
        ]);
    }

    // fungsi untuk post
    public function authenticate(Request $request)
    {
        // untuk memvalidasi agar user menginput data dengan benar sesuai formatnya
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // kalau formatnya sudah benar, nanti menjalankan dibawah ini :
        // dd('berhasil login'); //untuk mengecek saja, kalau input benar kasih keluar ini dulu

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/profil');
        }
        return back()->with('loginError','Gagal Masuk!');
    }

   public function logout(Request $request)
   {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
   }
}
