@extends('layouts.main')
@section('container')

<div class="container  mt-5 mb-5">
    <div class="row">
        <div class="col-sm-3 shadow" style="background-color:var(--bgRina)">
            <h5 class="d-flex justify-content-center mt-3">GOPress Indonesia</h5>
            <hr>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Berita dan Acara' ? 'active' : '' }}" href="/beritadanacara">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Event' ? 'active' : '' }}" href="/event">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Karyawan' ? 'active' : '' }}" href="/karyawan">Karyawan Terbaik</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-8 ">
            
            <div class="row ">
                @foreach ($newses as $news )
                <div class="col-sm-4  p-4">
                    <div class="shadow serv-cont card" style=" width: 275px">
                        <img src="/image/layanan/GOEZ.png" alt="GOPress EZ">
                        <div class="card-body" style="background-color:var(--bgRina)">
                            <p class="card-text">
                                <h4 style="justify-content: center ; display: flex">{{ $news->title }}</h4> <br>
                            </p>
                            {{-- tombol mengarah ke halaman singleBerita dengan menggunakan slug berita--}}
                            <a style="text-decoration : none" href="/singleBerita{{ $news->id }}">Selengkapnya</a> 
                        </div>
                    </div>
                       
                       
                </div>
                
                

                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $newses->links() }}
            </div>
         
        </div>
    </div>

   


</div> <br><br><br><br>

@endsection