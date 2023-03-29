@extends('layouts.main')
@section('container')
    <div class="slider-home container-fluid content" style="padding-right:0px ; padding-left:0px;">
        <img class="imageSlider img-fluid" src="/image/Banner-Layanan.jpeg" alt="Informasi GOPress" style="width: 100%">
    </div>
    <div class="container justify-content-center" style="display: flex">
        <div class="col-sm-9 shadow">
            <div class="p-5 ">

                <table class="table  " style="border-radius: 20px">
                    <tr>
                        <th>Nama</th>
                        {{-- @foreach ($pengguna as $punya) --}}
                        <th>{{ auth()->user()->name }}</th>
                        {{-- @endforeach --}}
                    </tr>
                    <tr>
                        <th>Username</th>
                        <th>{{ auth()->user()->username }}</th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th>{{ auth()->user()->email }}</th>
                    </tr>
                    <tr>
                        <th>No. Tlp</th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                    </tr>
                </table>
                
            </div>
        </div>

    </div>
@endsection
