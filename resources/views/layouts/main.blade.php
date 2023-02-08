<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>GoPress Indonesia | {{ $title }}</title>



</head>

<body>

    {{-- ***** Header ***** --}}

    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid" style="padding-left: 50px ; padding-right: 50px ;">
                <a style="padding-right: 100px" href="/home">
                    <img src="/image/GoPress.png" alt="" width="100" height="60"
                        class="d-inline-block align-text-top">
                </a>
                <div class="new-toggler">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation" style="border-color: rgb(148, 196, 239)">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-rin {{ $title === 'Cek Tarif' || $title === 'Lacak Paket' || $title === 'Cari Drop Point' ? 'active' : '' }} 
                                    dropdown-toggle"
                                href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cari
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/lacakpaket">Lacak Paket</a></li>
                                <li><a class="dropdown-item" href="/cektarif">Cek Tarif</a></li>
                                <li><a class="dropdown-item" href="/caridroppoint">Cari Drop Point</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-rin {{ $title === 'Drop Off' || $title === 'Pick Up' ? 'active' : '' }}
                                    dropdown-toggle"
                                href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Order
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/pickup">Pick Up</a></li>
                                <li><a class="dropdown-item" href="/dropoff">Drop Off</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-rin {{ $title === 'Layanan' ? 'active' : '' }} " href="/layanan">Layanan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-rin {{ $title === 'FAQ' ||
                            $title === 'Panduan' ||
                            $title === 'Barang Berbahaya' ||
                            $title === 'Larangan' ||
                            $title === 'SK' ||
                            $title === 'SK Pengiriman' ||
                            $title == 'Kebijakan Cookies' ||
                            $title === 'Kebijakan Privasi'
                                ? 'active'
                                : '' }} 
                                    dropdown-toggle"
                                href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/faq">FAQ</a></li>
                                <li><a class="dropdown-item" href="/panduan">Informasi Paket</a></li>
                                <li><a class="dropdown-item" href="/skpengiriman">Ketentuan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-rin {{ $title === 'Berita dan Acara' || $title === 'Karir' || $title === 'Profil Perusahaan' ? 'active' : '' }} 
                                    dropdown-toggle"
                                href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/profilperusahaan">Profil Perusahaan</a></li>
                                <li><a class="dropdown-item" href="/beritadanacara">Berita & Acara</a></li>
                                <li><a class="dropdown-item" href="/karir">Karir</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a style="color: #9e6feeda" href="/masuk">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Masuk/Daftar</a>
                        </li>
                    </ul>
                    {{-- <form class="d-flex" style="margin-left: 40%">
                        <button class="btn btn-outline-success" type="submit">Masuk/Daftar</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    </header>

    {{-- ***** End Header ***** --}}


    <div class="navbar_main">
        {{-- ===== Banner Cari ===== --}}
        <div class="navbar_display"
            style="{{ $title === 'Cek Tarif' || $title === 'Lacak Paket' || $title === 'Cari Drop Point' ? 'display : block' : '' }}">
            @include('layouts.cari')
        </div>

        {{-- ===== Banner Order ===== --}}
        <div class="navbar_display"
            style="{{ $title === 'Drop Off' || $title === 'Pick Up' ? 'display : block' : '' }}">
            @include('layouts.order')
        </div>

        {{-- ===== Banner Layanan ===== --}}
        <div class="navbar_display" style="{{ $title === 'Layanan' ? 'display : block' : '' }}">
            @include('layouts.layanan')
        </div>

        {{-- ===== Banner Informasi ===== --}}
        <div class="navbar_display"
            style="{{ $title === 'FAQ' ||
            $title === 'Panduan' ||
            $title === 'Barang Berbahaya' ||
            $title === 'Larangan' ||
            $title === 'SK Pengiriman' ||
            $title === 'SK' ||
            $title === 'Kebijakan Privasi' ||
            $title === 'Kebijakan Cookies'
                ? 'display : block'
                : '' }}">
            @include('layouts.Informasi.informasi')
        </div>

        {{-- ===== Banner Tentang Kami ====== --}}
        <div class="navbar_display"
        style="{{ $title === 'Profil Perusahaan' ? 'display : block' : '' }}">
            @include('layouts.Informasi.tentangKami.profil')
        </div>
        <div class="navbar_display"
        style="{{ $title === 'Berita dan Acara' ? 'display : block' : '' }}">
            @include('layouts.Informasi.tentangKami.berita')
        </div>
        <div class="navbar_display"
            style="{{ $title === 'Berita dan Acara' || $title === 'Karir' ? 'display : block' : '' }}">
            @include('layouts.Informasi.tentangKami.karir')
        </div>
        
    </div>





    <div class="container">
        @yield('container')
    </div>

    {{-- ***** Footer ***** --}}



    <div class="footer">
        <p>Footer</p>
    </div>

    {{-- ***** End Footer ***** --}}


    {{-- <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-50px";
            }
        }
    </script> --}}

</body>

</html>
