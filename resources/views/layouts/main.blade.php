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

    {{-- LINK BOOTSTRAP ICON Nia --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
     <!-- Fontawesome CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>



    <title>GoPress Indonesia | {{ $title }}</title>



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
                        {{-- <li class="nav-item dropdown">
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
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-rin {{ $title === 'Drop Off' ? 'active' : '' }} " href="/dropoff">Order</a>
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
                                                 $title === 'Single Event' ||
                                                 $title === 'Karyawan' ||
                                                 $title === 'Single Employee' ||
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
                                    {{-- <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/pesananU">Order Saya</a> </li> --}}
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

    {{-- ***** End Header ***** --}}


    <div class="navbar_main">
        {{-- Banner Home --}}
        {{-- <div class="navbar_display"
            style="{{ $title === 'Home' ? 'display : block' : '' }}">
            @include('layouts.navbarTambahan.navbarTambahan')
        </div> --}}
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
        <div class="navbar_display" style="{{ $title === 'perusahaan' ? 'display : block' : '' }}">
            @include('layouts.Informasi.tentangKami.profil')
        </div>
        <div class="navbar_display" style="{{ $title === 'Berita dan Acara' ||
                                              $title === 'Berita' ||
                                              $title === 'Event' ||
                                              $title === 'Single Event' ||
                                              $title === 'Single Employee' ||
                                              $title === 'Karyawan' ? 'display : block' : '' }}">
            @include('layouts.Informasi.tentangKami.berita')
        </div>
        <div class="navbar_display" style="{{ $title === 'Karir' ? 'display : block' : '' }}">
            @include('layouts.Informasi.tentangKami.karir')
        </div>

    </div>





    <div class="container-fluid">
        @yield('container')
    </div>

    {{-- ***** Footer ***** --}}



    <div class="footer">
        <footer class="text-center text-lg-start text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks :</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div class="icon-socmed">
                    <a href="" class="me-4 text-reset" style="text-decoration: none;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="text-decoration: none;">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="text-decoration: none;">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="text-decoration: none;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="text-decoration: none;">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset" style="text-decoration: none;">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fa-solid fa-truck-fast me-2"></i>Go Express
                            </h6>
                            <p>
                                Entrust your products to us with a fast, safe and practical service system.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                OTHERS
                            </h6>
                            <p>
                                <a href="/company" class="text-reset">Company</a>
                            </p>
                            <p>
                                <a href="/news" class="text-reset">News</a>
                            </p>
                            <p>
                                <a href="/event" class="text-reset">Event</a>
                            </p>
                            <p>
                                <a href="/service" class="text-reset">Service</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Jl. Janti Gg. Arjuna No. 59, Karangjambe,
                                Banguntapan, Bantul,
                                Yogyakarta 5519</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                GOPRESS.CO.ID
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 021 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 021 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
        </footer>
        <!-- Footer -->
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
