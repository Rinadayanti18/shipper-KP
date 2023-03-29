@extends('layouts.main')
@section('container')

<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/content1.png" alt="Advantages1" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="/img/content2.png" alt="Advantages2" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="/img/content3.png" alt="Advantages3" class="d-block w-100">
        </div>
      </div>
    </div>

<div class="container">
    <div class="row d-flex">
        <div class="col-md-6 ">
            <div class="card card1_LacakPengiriman" style="width: 350px;">
                <div class="card-body">
                    <div class="col-sm">
                        <h4 class="card-title">Lacak Pengiriman</h4>
                        <a href="/lacakpaket" id="lacakPengiriman_css" class="btn">LACAK PENGIRIMAN</a>
                        <p class="card-text">Kamu bisa masukkan maksimal sampai dengan 20 Kode Pengiriman.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="col-md-6">
            <div class="card card1_LacakPengiriman" style="width: 350px;">
                <div class="card-body">
                    <div class="col-sm">
                        <h4 class="card-title">Cek Biaya Pengiriman</h4>
                        <a href="/cektarif" id="lacakPengiriman_css" class="btn">Cek Biaya Pengiriman</a>
                        <p class="card-text">
                            Anda bisa cek biaya pengiriman paket Anda disini berdasarkan daerah Asal pengirim 
                            ke daerah tujuan paket Anda. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<br>


<!--  -->

<section id="infograpic" class="dashboard">
    <div class="dashboard-counter container">
        <div class="row h-100 align-items-center">
            <div class="card dashboard-card align-items-center col-md-12 col-sm-12"
                style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06);border-radius:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="dashboard-item col-md-12 col-sm-12">
                                    <div class="row m-2">
                                        <div class="col-4 dashboard-col-icon">
                                            <img loading="lazy" src="/img/USER.png"  class="dashboard-icon" alt="users">
                                        </div>
                                        <div class="col-8 dashboard-text ">
                                            <h4 class="dashboard-heading">Users:</h4>
                                            <h3 class="dashboard-sub-heading tx-purple">2.000.000++</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="dashboard-item col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-4 dashboard-col-icon ">
                                            <img loading="lazy" src="/img/BOX.png" style="margin-left: 20px;"  class="dashboard-icon"
                                                alt="Pengiriman">
                                        </div>
                                        <div class="col-8 dashboard-text">
                                            <h4 class="dashboard-heading">Pengiriman:</h4>
                                            <h3 class="dashboard-sub-heading tx-purple">5.000.000++</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="dashboard-item col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-4 dashboard-col-icon">
                                            <img loading="lazy" src="/img/ontime.png"  style="margin-left: 20px;" class="dashboard-icon"
                                                alt="Pengiriman Tepat Waktu">
                                        </div>
                                        <div class="col-8 dashboard-text">
                                            <h4 class="dashboard-heading">Pengiriman Tepat Waktu:</h4>
                                            <h3 class="dashboard-sub-heading tx-purple">99,2%</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container m-2">

                                <div class="dashboard-coverage-content row align-items-center">
                                    <div class="dashboard-coverage-content-city col-md-12 col-sm-12 coverage-text">
                                        <h3 class="dashboard-coverage-city-title">Area jangkauan:</h3>
                                        <div class="dashboard-coverage-city tx-purple">
                                            <p>Jakarta - Bogor - Depok - Tangerang - Tangerang Selatan - Ciamis -
                                                Pandeglang - Cilegon - Serang - Bekasi - Cikarang - Sukabumi - Garut -
                                                Cirebon - Bandung - Bandung Barat - Cimahi - Tasikmalaya - Kuningan -
                                                Majalengka - Purwakarta - Subang - Indramayu - Karawang - Semarang -
                                                Surakarta - Yogyakarta - Bantul - Sleman - Klaten - Sukoharjo - Solo -
                                                Magelang - Purbalingga - Purwokerto - Cilacap - Karanganyar - Tegal -
                                                Pekalongan - Surabaya - Sidoarjo - Pasuruan - Malang - Jombang - Jember
                                                - Ngawi - Gresik - Madiun - Malang -Situbondo - Kediri - Banyuwangi -
                                                Batu - Lumajang - Blitar - Mojokerto - Bondowoso - Banjarnegara -
                                                Banyumas - Ponorogo - Mojokerto - Denpasar - Badung - Gianyar - Makassar
                                                - Medan - Deli Serdang - Palembang - Lampung - Gowa - Sorong dan segera
                                                di kota lainnya!</p>
                                        </div>
                                        <a href="/caridroppoint" class="btn text-white text-center"
                                            style="width: 100%; height: 40px; background-color: #0c0531;">Cek
                                            Selengkapnya di Sini</a><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<!-- LAYANAN KAMI -->
<section id="our-services" class="header-our-service">
    <div class="container">
        <div class="row">

            <div class="col-md-4 page-content-adjust">
                <h3 class="header-our-service-title tx-purple">
                    Layanan Kami </h3>
                <p class="masthead-description my-4">Kami akan menambahkan lebih banyak layanan yang lebih sesuai untuk
                    kebutuhanmu</p>
                <a href="https://paxel.co/id/layanan-kami" target="_blank" class="btn bg-purple btn-primary-paxel">Info
                    lengkap &nbsp;
                    <img loading="lazy" class="icon-arrow" src="https://paxel.co/images/icon/arrow-right-white.svg"
                        alt="Info lengkap">
                </a>
            </div>

            <div class="col-md-8 card-content-ourservice">

                        <!--  -->

                        <div class="card ourservice-card col-md-12 col-sm-12 mb-4"
                            style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06);border-radius: 20px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-3" style="align-self:center;">
                                            <img loading="lazy"
                                                src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-KORRTMK-F6044JE-FUFY6DW-UDBQSAJ.png"
                                                width="56px" alt="">
                                        </div>
                                        <div class="col-9 mt-2" style="align-self:center;">
                                            <h1 style="font-size: 24px;font-family: unset;font-weight: bold;">
                                                EZ Gopress
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="margin-left:20px;">
                               Estimasi waktu sampai 2-7 hari dengan cakupan seluruh Indonesia.
                            </p>
                        </div>

                        <!--  -->
                        <div class="card ourservice-card col-md-12 col-sm-12 mb-4"
                            style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06);border-radius: 20px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-3" style="align-self:center;">
                                            <img loading="lazy"
                                                src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-8YFO3F0-LJPXCCL-ENY16M6-JLIKB08.png"
                                                width="56px" alt="">
                                        </div>
                                        <div class="col-9 mt-2" style="align-self:center;">
                                            <h1 style="font-size: 24px;font-family: unset;font-weight: bold;">
                                                GoPress Super
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="margin-left:20px;">
                                Estimasi waktu sampai 1-3 hari dengan cakupan Jawa, Bali, Kalimantan, Sumatera, Sulawesi, dan Batam.
                            </p>

                        </div>

                        <div class="card ourservice-card col-md-12 col-sm-12 mb-4"
                            style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06);border-radius: 20px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-3" style="align-self:center;">
                                            <img loading="lazy"
                                                src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-8YFO3F0-LJPXCCL-ENY16M6-JLIKB08.png"
                                                width="56px" alt="">
                                        </div>
                                        <div class="col-9 mt-2" style="align-self:center;">
                                            <h1 style="font-size: 24px;font-family: unset;font-weight: bold;">
                                                GoPress ECO
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="margin-left:20px;">
                                Estimasi waktu sampai 7-17 hari dengan cakupan seluruh pulau Jawa. 
                            </p>

                        </div>
                        <!--  -->

                        <!-- BATAS KONTEN LAYANAN KAMI 3 -->
                
            </div>
        </div>
    </div>
</section>

<!-- PEMBARUAN -->
<section id="articles-update" class="articles-update mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="articles-title-banner-homepage">
                    Pembaruan </h3>
                <p class="articles-desc-banner-homepage">Temukan update terbaru dari tim kami</p>
                <!-- <a href="https://paxel.co/id/berita-dan-promo" class="articles-button-banner-homepage btn bg-purple btn-primary-paxel">
            <span class="articles-button-desc-banner-homepage" style=" ">
              Lebih Banyak <img loading="lazy" class="articles-button-desc-arrow-banner-homepage" src="/img/arrow.png" alt="arrow-right-white" style="margin-bottom: 6px; height: 45px; width: 45px; margin: 1px 0 1px 10px; object-fit: contain;">
            </span>
          </a> -->
            </div>

            <div class="col-md-9">
                <a href="/beritadanacara" style="color: inherit; text-decoration:none;">
                    <div class="card"
                        style="margin-bottom: 10px; padding: 12px 20px; border-radius: 8px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06); background-color: #ffffff;">
                        <div class="card-body" style="">
                            <div class="row">
                                <div class="col-md-2 col-4">
                                    <img loading="lazy"
                                        src="/img/content1.png"
                                        alt="Area Jangkauan GoPress Makin Luas, Cek Rute GoPress Agent Berikut Ini!"
                                        onerror="this.onerror=null;this.src='/images/content/no-data.png';"
                                        class="img-articles-homepage">
                                </div>
                                <div class="col-md-8 col-8">
                                    <h5 class="articles-homepage-title">
                                        Go Express Melampaui Catatan Pengiriman Tertingginya
                                    </h5>
                                    <div class="articles-homepage-desc">
                                        Jakarta, 15 Desember 2021 – GO Express sebagai brand jasa pengiriman yang berskala global 
                                        terbias lonjakan permintaan pengiriman pada puncak Harbolnas 12.12 kemarin.    
                                    </div>
                                </div>
                                <div class="col-md d-none d-sm-block">
                                    <div class="text-right articles-homepage-date">
                                        03 September 2022
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/beritadanacara" style="color: inherit; text-decoration:none;">
                    <div class="card"
                        style="margin-bottom: 10px; padding: 12px 20px; border-radius: 8px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06); background-color: #ffffff;">
                        <div class="card-body" style="">
                            <div class="row">
                                <div class="col-md-2 col-4">
                                    <img loading="lazy"
                                        src="/img/content2.png"
                                        alt="Roketkan Bisnismu dengan Join Menjadi Member GoPressin Club"
                                        onerror="this.onerror=null;this.src='/images/content/no-data.png';"
                                        class="img-articles-homepage">
                                </div>
                                <div class="col-md-8 col-8">
                                    <h5 class="articles-homepage-title">
                                        Pengiriman GO Express Meningkat Hingga 16,5 Juta Paket Pada Harbolnas 11.11
                                    </h5>
                                    <div class="articles-homepage-desc">
                                        Geliat bertransaksi online melalui platform digital mempengaruhi pertumbuhan 
                                        bisnis dari skala kecil hingga menengah, tak heran perkembangan teknologi sangat 
                                        mendorong gencarnya transaksi jual beli online 
                                    </div>
                                </div>
                                <div class="col-md d-none d-sm-block">
                                    <div class="text-right articles-homepage-date">
                                        03 September 2022
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/beritadanacara" style="color: inherit; text-decoration:none;">
                    <div class="card"
                        style="margin-bottom: 10px; padding: 12px 20px; border-radius: 8px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06); background-color: #ffffff;">
                        <div class="card-body" style="">
                            <div class="row">
                                <div class="col-md-2 col-4">
                                    <img loading="lazy"
                                        src="/img/content4.png"
                                        alt="Kirim Paket Nextday Lewat Paxel, Ongkir Lebih Hemat!"
                                        onerror="this.onerror=null;this.src='/images/content/no-data.png';"
                                        class="img-articles-homepage">
                                </div>
                                <div class="col-md-8 col-8">
                                    <h5 class="articles-homepage-title">
                                        Akhir Tahun GO Express Manjakan Pelanggan Dengan Pesta Diskon Ongkir
                                    </h5>
                                    <div class="articles-homepage-desc">
                                        Jakarta, 2 Desember 2021 – Sebagai perusahaan jasa kirim berskala global, 
                                        GO Express terus memaksimalkan pelayanan kepada pelanggan dengan berbagai 
                                        penggunaan teknologi terupdate hingga rangkaian program ditujukan kepada 
                                        para pelanggan setianya selama 6 tahun terakhir. 
                                    </div>
                                </div>
                                <div class="col-md d-none d-sm-block">
                                    <div class="text-right articles-homepage-date">
                                        03 September 2022
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- button search -->
<!-- <div class="box_navbarMain_search">
                <input type="checkbox" id="check">
                  <div class="search-box_navbarMain">
                      <input type="text" placeholder="Type here...">
                      <label for="check" class="icon">
                          <i class="fas fa-search"></i>
                      </label>
                  </div>
            </div> -->



@endsection