<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Event;
use App\Models\Karyawan;
use App\Models\ProfilPerusahaan;

class PostController extends Controller
{
    public function berita(){
       
        return view ('User.TentangKami.BeritadanAcara', 
        ['title' => 'Berita dan Acara',
        'newses' => Berita::paginate(3)
        ]);
    }

    public function SingleBerita($id)
    {
        return view ('User.TentangKami.detailBerita.singleBerita', [
            'title' => "Berita",
            'singNews' => Berita::find($id)
        ]);
    }

    public function event(){
        return view ('User.TentangKami.detailBerita.event', 
        ['title' => 'Event'],
        ['events' => Event::paginate(3)]
    );
    }

    public function SingleEvent($id)
    {
        return view ('User.TentangKami.detailBerita.singleEvent', [
            'title' => "Single Event",
            'singEvent' => Event::find($id)
        ]);
    }


    public function karyawan(){
        return view ('User.TentangKami.detailBerita.karyawan', 
        ['title' => 'Karyawan'],
        ['karyawan' => Karyawan::paginate(3)]
    );
    }

    public function singleEmployee($id){
        return view ('User.TentangKami.detailBerita.singleEmployee',[
            'title' => 'Single Employee',
        'singEmployee' => Karyawan::find($id)]
    );
    }

    public function perusahaan(){
        return view ('User.TentangKami.ProfilPerusahaan', 
        ['title' => 'perusahaan'],
        ['perusahaan' => ProfilPerusahaan::paginate(1)]
    );
    }

    // public function singlePerusahaan($id){
    //     return view ('User.TentangKami.singleProfilPerusahaan',[
    //         'title' => 'Single Profil Perusahaan',
    //     'singEmployee' => ProfilPerusahaan::find($id)]
    // );
    // }
}
