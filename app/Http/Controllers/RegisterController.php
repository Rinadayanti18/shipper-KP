<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function daftar(){
        return view ('User.UserCorporate.daftar', [
            'title' => 'Daftar'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required | max:255 | min:3',
            //sama aja maksudnya sama yang diatasnya, tapi boelh milih mau bentuk yang mana
            'username' =>['required', 'min:3', 'max:255'],
            'email' => ['required', 'email:dns', ],
            'password' => ['required', 'min:8', 'max:25']
        ]);

        // untuk melakukan enkripsi pada password, menggunakan berikut di bawah ini :
        $validatedData['password'] = bcrypt($validatedData['password']);

        // atau cara kedua mengenkripsi menggunakan Hash atau hashing password
        // tapi jangan sampe lupa kelasnya juga harus dipanggil diatas
        // $validatedData['password'] = Hash::make($validatedData['password']);

        // kalau lolos dari validasi , maka akan menjalankan berikut dibawah ini :
        User::create($validatedData);

        // membuat pesan kalau mau
        $request->session()->flash('succes','Pendaftaran berhasil, silahkan login');

        // agar setelah melakukan pendaftaran, kembali ke halaman login atau masuk
        return redirect('/masuk');

        // atau kalau mau kedua perintah diatas dijadiin satu, jadinya seperti ini :
        //  return redirect('/masuk')->with('succes','Pendaftaran berhasil, silahkan login');
    }
}
