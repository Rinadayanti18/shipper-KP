
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
       {{-- ***** Header ***** --}}

       <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid" style="padding-left: 50px ; padding-right: 50px ;">
                <a style="padding-right: 100px" href="/">
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
                            <a class="nav-rin {{ $title === 'Berita dan Acara' || 
                                                 $title === 'Berita' ||
                                                 $title === 'Event' ||
                                                 $title === 'Karyawan' ||
                                                 $title === 'Karir' || 
                                                 $title === 'Profil Perusahaan' ? 'active' : '' }} 
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
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="color: #9e6feeda"><i
                                        class="bi bi-emoji-sunglasses"></i>
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profil">Informasi Pribadi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/pesananU">Order Saya</a> </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" style="border-radius: 20%"
                                                class="dropdown-item">Keluar</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item ">
                                <a style="color: #9e6feeda" href="/masuk">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    Masuk/Daftar</a>
                            </li>
                        @endauth
                    </ul>
                    {{-- <form class="d-flex" style="margin-left: 40%">
                        <button class="btn btn-outline-success" type="submit">Masuk/Daftar</button>
                    </form> --}}
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5"style="display:block">
        <div class="col-sm-9">
            <article>
                <h3>{{ $singNews["title"] }}</h3>
                <p>{{ $singNews["body"] }}</p>
            </article>
        </div>
        
       
        <a href="/beritadanacara">Kembali</a>
    </div>
</body>
</html>





