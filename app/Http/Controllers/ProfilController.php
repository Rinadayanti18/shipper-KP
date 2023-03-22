<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function profil()
    {
        return view('User.UserCorporate.profil',[
            "title" => "Profil"],
            ['pengguna' => User::all()]
        );
    }
}
