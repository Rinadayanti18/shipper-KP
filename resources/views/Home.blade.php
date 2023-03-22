@extends('layouts.main')
@section('container')


<div>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/Content/content1-num1.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item ">
                <img src="/image/Content/content1.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item ">
                <img src="/image/Content/content2.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item ">
                <img src="/image/Content/content3.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="/image/Content/content4.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="/image/Content/content5.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="/image/Content/content6.png" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    {{-- <div class="justify-content-center" style="display: flex">
        <div class="col-sm-9 ">
            <div class="row mb-2">
                <div class="col-md-5">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">Lacak Pengiriman</h3>

                            <a href="#" class="stretched-link">Continue reading</a>
                            <p class="card-text mb-auto">Kamu bisa masukkan maksimal sampai dengan 20 kode pengiriman
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Biaya Pengiriman</h3>

                            <a href="#" class="stretched-link">Continue reading</a>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> --}}




    <div class="container">
        <div class="row d-flex">
            <div class="col-md-5 col-sm py-2 px-1 ">
                <div class="card card1_LacakPengiriman" style="width: 350px;">
                    <div class="card-body">
                        <div class="col-sm">
                            <h4 class="card-title">Lacak Pengiriman</h4>
                            <br>
                            <i class="fas fa-truck"></i><span> Kode Pengiriman</span>
                            <form action="">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Contoh: 0309-XXXXXXX"></textarea>
                                </div>
                            </form>
                            <br>
                            <a id="lacakPengiriman_css" class="btn">LACAK PENGIRIMAN</a>
                            <p class="card-text">Kamu bisa masukkan maksimal sampai dengan 20 Kode Pengiriman.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-md-7 col-sm py-2 px-1 ">
                <div class="card card2_BiayaPengiriman" style="width: 400px; ">
                    <div class="card-body">
                        <div class="col-sm">
                            <h4 class="card-title">Biaya Pengiriman</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Berat</th>
                                            <th>Lokasi Penjemputan</th>
                                            <th>Lokasi Tujuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <select id="ukuranButton_BiayaPengiriman_berat" name=""
                                                    class="form-control">
                                                    <!-- <option> -pilih berat- </option>   -->
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                    <option value="">7</option>
                                                    <option value="">8</option>
                                                    <option value="">9</option>
                                                    <option value="">10</option>
                                                    <option value="">11</option>
                                                    <option value="">12</option>
                                                    <option value="">13</option>
                                                    <option value="">14</option>
                                                    <option value="">15</option>
                                                    <option value="">16</option>
                                                    <option value="">17</option>
                                                    <option value="">18</option>
                                                    <option value="">19</option>
                                                    <option value="">20</option>
                                                    <option value="">21</option>
                                                    <option value="">22</option>
                                                    <option value="">23</option>
                                                    <option value="">24</option>
                                                    <option value="">25</option>
                                                </select>
                                            </th>
                                            <!-- Lokasi Penjemputan -->
                                            <td>
                                                <input id="ukuranButton_BiayaPengiriman_jemput" type="text"
                                                    class="form-control" placeholder="Penjemputan">
                                            </td>
                                            <!-- Biaya Pengiriman -->
                                            <td>
                                                <input id="ukuranButton_BiayaPengiriman_tujuan" type="text"
                                                    class="form-control" placeholder="Tujuan">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                            <td>
                                                <a id="tambahTujuan_css" href="#" class="btn text-center">Tambah
                                                    tujuan</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <a id="cekOngkir_css" href="#" class="btn">CEK ONGKIR</a>
                            <br>
                            <p class="card-text">Kamu bisa masukkan maksimal sampai dengan 3 tujuan.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <br><br>


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
                                        <div class="row">
                                            <div class="col-4 dashboard-col-icon">
                                                <img loading="lazy" src="/img/USER.png" class="dashboard-icon"
                                                    alt="users">
                                            </div>
                                            <div class="col-8 dashboard-text">
                                                <h4 class="dashboard-heading">Users:</h4>
                                                <h3 class="dashboard-sub-heading tx-purple">2.000.000++</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="dashboard-item col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-4 dashboard-col-icon">
                                                <img loading="lazy" src="/img/BOX.png" class="dashboard-icon"
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
                                                <img loading="lazy" src="/img/ontime.png" class="dashboard-icon"
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
                                <div class="container">

                                    <div class="dashboard-coverage-content row align-items-center">
                                        <div class="dashboard-coverage-content-city col-md-12 col-sm-12 coverage-text">
                                            <h3 class="dashboard-coverage-city-title">Area jangkauan:</h3>
                                            <div class="dashboard-coverage-city tx-purple">
                                                <p>Jakarta - Bogor - Depok - Tangerang - Tangerang Selatan - Ciamis -
                                                    Pandeglang - Cilegon - Serang - Bekasi - Cikarang - Sukabumi - Garut
                                                    - Cirebon - Bandung - Bandung Barat - Cimahi - Tasikmalaya -
                                                    Kuningan - Majalengka - Purwakarta - Subang - Indramayu - Karawang -
                                                    Semarang - Surakarta - Yogyakarta - Bantul - Sleman - Klaten -
                                                    Sukoharjo - Solo - Magelang - Purbalingga - Purwokerto - Cilacap -
                                                    Karanganyar - Tegal - Pekalongan - Surabaya - Sidoarjo - Pasuruan -
                                                    Malang - Jombang - Jember - Ngawi - Gresik - Madiun - Malang
                                                    -Situbondo - Kediri - Banyuwangi - Batu - Lumajang - Blitar -
                                                    Mojokerto - Bondowoso - Banjarnegara - Banyumas - Ponorogo -
                                                    Mojokerto - Denpasar - Badung - Gianyar - Makassar - Medan - Deli
                                                    Serdang - Palembang - Lampung - Gowa - Sorong dan segera di kota
                                                    lainnya!</p>
                                            </div>
                                            <a href="https://paxel.co/id/berita-dan-promo/area-jangkauan-paxel"
                                                class="btn btn-primary-paxel text-white text-center"
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
                    <p class="masthead-description my-4">Kami akan menambahkan lebih banyak layanan yang lebih sesuai
                        untuk kebutuhanmu</p>
                    <a href="https://paxel.co/id/layanan-kami" target="_blank"
                        class="btn bg-purple btn-primary-paxel">Info lengkap &nbsp;
                        <img loading="lazy" class="icon-arrow" src="https://paxel.co/images/icon/arrow-right-white.svg"
                            alt="Info lengkap">
                    </a>
                </div>
                <div class="col-md-8 card-content-ourservice">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://paxel.app.link/CreateShipment" class="text-black-paxel" target="_blank"
                                style="text-decoration: none;">
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
                                                        Pengiriman Sameday
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Kirim dan terima paket Kamu di hari yang sama, dalam dan luar kota
                                    </p>
                                </div>
                            </a>
                            <a href="https://paxel.app.link/paxelmarketco" class="text-black-paxel" target="_blank"
                                style="text-decoration: none;">
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
                                                        GoPressMarket
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Mau jajanan se-Nusantara? Gak perlu keluar rumah, beli aja di aplikasi GoPress
                                    </p>
                                </div>
                            </a>
                        </div>
                        <!-- BATAS KONTEN LAYANAN KAMI 3 -->
                        <div class="col-md-6">
                            <a href="https://paxel.app.link/PaxelBox" class="text-black-paxel" target="_blank"
                                style="text-decoration: none;">
                                <div class="card ourservice-card col-md-12 col-sm-12 mb-4"
                                    style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06);border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3" style="align-self:center;">
                                                    <img loading="lazy"
                                                        src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-AW42IM7-2OCNSTN-FY8C04V-S6BJKLV.png"
                                                        width="56px" alt="">
                                                </div>
                                                <div class="col-9 mt-2" style="align-self:center;">
                                                    <h1 style="font-size: 24px;font-family: unset;font-weight: bold;">
                                                        GoPressBox
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Smart loker untuk simpan/titip barang dan untuk pick-up atau drop-off kiriman
                                    </p>
                                </div>
                            </a>
                            <a href="https://paxel.app.link/PaxelBigShipment" class="text-black-paxel" target="_blank"
                                style="text-decoration: none;">
                                <div class="card ourservice-card col-md-12 col-sm-12 mb-4"
                                    style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06);border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3" style="align-self:center;">
                                                    <img loading="lazy"
                                                        src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-0T16TST-SFUMPI6-FPPTADM-OTI6M5B.png"
                                                        width="56px" alt="">
                                                </div>
                                                <div class="col-9 mt-2" style="align-self:center;">
                                                    <h1 style="font-size: 24px;font-family: unset;font-weight: bold;">
                                                        GoPressBig
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        Kirim paket hingga berat 20kg dan dimensi hingga 50x50x80 cm? GoPressBig aja
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
                <!-- <div class="col-md-8">
        <ul class="nav nav-tabs">
                      <li class="col-4 text-center">
            <a href="#our-service-0" aria-controls="our-service-0" class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-KORRTMK-F6044JE-FUFY6DW-UDBQSAJ.png" alt="Pengiriman Sameday ">
              <span class="nav-text">
                Pengiriman Sameday 
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-1" aria-controls="our-service-1" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-AW42IM7-2OCNSTN-FY8C04V-S6BJKLV.png" alt="PaxelBox">
              <span class="nav-text">
                PaxelBox
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-2" aria-controls="our-service-2" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-8YFO3F0-LJPXCCL-ENY16M6-JLIKB08.png" alt="PaxelMarket">
              <span class="nav-text">
                PaxelMarket
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-3" aria-controls="our-service-3" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-0T16TST-SFUMPI6-FPPTADM-OTI6M5B.png" alt="PaxelBig">
              <span class="nav-text">
                PaxelBig
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-4" aria-controls="our-service-4" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-our-service-C3NIA4C-1C27R1L-Y7GV7BH-N142VBG.png" alt="Pengiriman Instant">
              <span class="nav-text">
                Pengiriman Instant
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-5" aria-controls="our-service-5" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-P6KAGQU-QWHLP0T-UKVSFVO-X7YKIBW.png" alt="Instant Multidrop">
              <span class="nav-text">
                Instant Multidrop
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-6" aria-controls="our-service-6" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-our-service-HO6R13F-XX476W4-M36FGY6-DUUDMPS.png" alt="PaxelRecycle">
              <span class="nav-text">
                PaxelRecycle
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-7" aria-controls="our-service-7" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-our-service-FTHD8IX-8IJQ47F-NDFSB31-5NEJ4CJ.png" alt="Lew@tBox">
              <span class="nav-text">
                Lew@tBox
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-8" aria-controls="our-service-8" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-our-service-XAEXNN6-KQM6RH7-IGP0QQC-VCQ175U.png" alt="PaxelAmplop">
              <span class="nav-text">
                PaxelAmplop
              </span>
            </a>
          </li>
                      <li class="col-4 text-center">
            <a href="#our-service-9" aria-controls="our-service-9" class="nav-link " data-toggle="tab" role="tab" aria-selected="true">
              <img loading="lazy" src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/icon-our-service-KNXB01S-LOYS7UP-WSVHH46-1VPRTP8.jpg" alt="PPOB">
              <span class="nav-text">
                PPOB
              </span>
            </a>
          </li>
                    </ul>
      </div> -->
            </div>
        </div>
    </section>

    <!-- PEMBARUAN -->
    <section id="articles-update" class="articles-update">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="articles-title-banner-homepage">
                        Pembaruan </h3>
                    <p class="articles-desc-banner-homepage">Temukan update terbaru dari tim kami</p>
                    <a href="https://paxel.co/id/berita-dan-promo"
                        class="articles-button-banner-homepage btn bg-purple btn-primary-paxel">
                        <span class="articles-button-desc-banner-homepage" style=" ">
                            Lebih Banyak <img loading="lazy" class="articles-button-desc-arrow-banner-homepage"
                                src="/img/arrow.png" alt="arrow-right-white"
                                style="margin-bottom: 6px; height: 45px; width: 45px; margin: 1px 0 1px 10px; object-fit: contain;">
                        </span>
                    </a>
                </div>

                <div class="col-md-9">
                    <a href="/areaJangkauan" style="color: inherit; text-decoration:none;">
                        <div class="card"
                            style="margin-bottom: 10px; padding: 12px 20px; border-radius: 8px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06); background-color: #ffffff;">
                            <div class="card-body" style="">
                                <div class="row">
                                    <div class="col-md-2 col-4">
                                        <img loading="lazy"
                                            src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/article-HR8QX0C-YE7MBXF-IATQFHB-VQWEID1.jpg"
                                            alt="Area Jangkauan GoPress Makin Luas, Cek Rute GoPress Agent Berikut Ini!"
                                            onerror="this.onerror=null;this.src='/images/content/no-data.png';"
                                            class="img-articles-homepage">
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <h5 class="articles-homepage-title">Area Jangkauan GoPress Makin Luas, Cek
                                            Daftar Lokasi GoPress Agent Berikut Ini!</h5>
                                        <div class="articles-homepage-desc">[Update] Area jangkauan GoPress makin luas
                                            dengan terus hadirnya layanan GoPress di berbagai daerah di Indonesia.
                                            Seperti GoPress Agent yang terus hadir di berbagai daerah dan siap melayani
                                            #SahabatGoPress dalam mengirim paket ke dalam dan luar kota dengan tarif
                                            FLAT sampai 5 kg. Melalui GoPress Agent, Kamu bisa drop atau ambil paketmu
                                            secara mandiri dengan mengunjungi langsung lokasi GoPress Agent. Jika
                                            #SahabatGoPress ingin mengirim ke area GoPress Agent dari kotamu, Kamu bisa
                                            membuat pengiriman seperti biasa di aplikasi GoPress. Kamu dapat masukkan
                                            alamat GoPress Agent tujuanmu atau cukup ketik kata kunci GoPress Agent
                                            tujuanmu (contoh: GoPress Agent Karawang) sebagai Penerima.Saat ini GoPress
                                            Agent sudah tersebar di beberapa area di Indonesia dan akan terus hadir di
                                            area lainnya. Berikut ini daftar alamat GoPress Agent yang bisa Kamu
                                            kunjungi dari lokasi terdekatmu.Saat ini GoPress Agent sudah tersebar di
                                            beberapa area di Indonesia dan akan terus hadir di area lainnya. </div>
                                    </div>
                                    <div class="col-md d-none d-sm-block">
                                        <div class="text-right articles-homepage-date">
                                            03 September 2001
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/roket" style="color: inherit; text-decoration:none;">
                        <div class="card"
                            style="margin-bottom: 10px; padding: 12px 20px; border-radius: 8px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06); background-color: #ffffff;">
                            <div class="card-body" style="">
                                <div class="row">
                                    <div class="col-md-2 col-4">
                                        <img loading="lazy"
                                            src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/article-UPFTYI7-YM64OBI-27QCCCH-UUC4ICP.jpg"
                                            alt="Roketkan Bisnismu dengan Join Menjadi Member GoPressin Club"
                                            onerror="this.onerror=null;this.src='/images/content/no-data.png';"
                                            class="img-articles-homepage">
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <h5 class="articles-homepage-title">Roketkan Bisnismu dengan Join Menjadi Member
                                            GoPressin Club</h5>
                                        <div class="articles-homepage-desc">Online Seller yang ingin bisnisnya semakin
                                            meroket wajib merapat buat tau info satu ini! GoPressin Club 2.0 akan segera
                                            hadir dengan berbagai benefit yang membantu mengembangkan bisnis UMKM.
                                            GoPressin Club 2.0 sendiri adalah loyalty program yang diperuntukkan bagi
                                            seluruh UMKM pengguna GoPress.

                                            Baca Juga: Ketahui 5 Ciri-ciri Peluang Usaha yang Baik dan Potensial Sebelum
                                            Memulai Bisnis


                                            Kamu bisa melakukan pembelian membership GoPressin Club 2.0 mulai dari 28
                                            Januari 2023. Saat ingin melakukan pembelian membership, pastikan aplikasi
                                            GoPress-mu sudah terupdate ke versi terbaru 2.16. Jangan sampai ketinggalan,
                                            karena ada penawaran Cashback 25% dan GRATIS Asuransi Kesehatan, lho untuk
                                            pembelian paket membership di 28 Januari-3 Februari 2023.
                                            Sama seperti versi sebelumnya, GoPressin Club 2.0 memiliki dua pilihan paket
                                            member yang dapat Kamu pilih, yaitu paket Member Gold dan Silver.
                                            Masing-masing paket member tersebut memiliki biaya berlangganan yang berbeda
                                            dengan rangkaian benefit yang tentunya menguntungkan bisnismu.
                                            Kamu bisa membeli paket Silver seharga Rp 300.000 atau paket Gold seharga Rp
                                            900.000 dengan keduanya memiliki masa aktif 12 bulan. Berikut ini beragam
                                            benefit yang bisa Kamu dapatkan saat menjadi member GoPressin Club.
                                            Benefit GoPressin Club 2.0 Silver Untuk Bisnismu
                                            Exclusive Welcome Kit
                                            Foto produk profesional
                                            Harga spesial peralatan bisnis
                                            Harga spesial bahan baku
                                            Diskon 7% (khusus pembayaran dengan GoPress Credit dan untuk servis Sameday,
                                            Next Day, atau Regular)
                                            Benefit GoPressin Club 2.0 Gold Untuk Bisnismu
                                            Exclusive Welcome Kit
                                            Exclusive video &amp;amp; foto produk profesionalHarga spesial peralatan
                                            bisnisHarga spesial bahan bakuMenjadi merchant GoPressMarket Join dalam
                                            event #AntarkanKebaikanCustomer service pribadiHero khususDiskon 15% (khusus
                                            pembayaran dengan GoPress Credit dan untuk servis Sameday, Next Day, atau
                                            Regular)

                                            Menarik banget, bukan, buat bisnismu saat menjadi Member GoPressin Club?
                                            Yuk, gabung menjadi member GoPressin Club untuk bisnismu semakin meroket
                                            dengan beragam benefit yang menguntungkan bisnis. Kamu bisa cek info
                                            GoPressin Club 2.0 lebih lengkap di FAQ GoPressin Club di sini, ya.Baca
                                            Juga: 5 Cara Menarik Pelanggan Untuk Membeli Produk Bisnis Online-mu</div>
                                    </div>
                                    <div class="col-md d-none d-sm-block">
                                        <div class="text-right articles-homepage-date">
                                            03 September 2001
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://paxel.co/id/berita-dan-promo/pusat-edukasi-seller-paxelmarket"
                        style="color: inherit; text-decoration:none;">
                        <div class="card"
                            style="margin-bottom: 10px; padding: 12px 20px; border-radius: 8px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.06); background-color: #ffffff;">
                            <div class="card-body" style="">
                                <div class="row">
                                    <div class="col-md-2 col-4">
                                        <img loading="lazy"
                                            src="https://s3-ap-southeast-1.amazonaws.com/paxelbucket/revamp/article-75FJR03-VFYA3XA-2R4174J-2J5JYCT.jpg"
                                            alt="Pusat Edukasi Seller GoPressMarket"
                                            onerror="this.onerror=null;this.src='/images/content/no-data.png';"
                                            class="img-articles-homepage">
                                    </div>
                                    <div class="col-md-8 col-8">
                                        <h5 class="articles-homepage-title">Pusat Edukasi Seller GoPressMarket</h5>
                                        <div class="articles-homepage-desc">Halo Seller GoPressMarket! Artikel dibuat
                                            untuk membantumu berjualan produk di GoPressMarket lebih mudah dan cepat.
                                            Yuk, pelajari selengkapnya bagaimana cara berjualan di GoPressMarket melalui
                                            pusat edukasi seller GoPressMarket berikut ini!SEPUTAR
                                            GoPressMARKETBagaimana cara bergabung menjadi merchant GoPressMarket?Cara
                                            bergabung menjadi merchant GoPressMarket:Download aplikasi GoPress di
                                            Playstore (android) atau App Store (IOS)Lakukan registrasi terlebih dahulu
                                            jika belum memiliki akun GoPressSetelah berhasil registrasi, pilih icon menu
                                            GoPressMarket di homepage Aplikasi GoPressKlik menu Profil
                                            Klik menu “Buka Toko Gratis di GoPressMarket”Isi data Toko Kamu secara
                                            lengkapKlik Daftarkan Toko setelah semua data Toko terisi lengkapSelamat!
                                            Tokomu sudah terdaftar sebagai merchant GoPressMarketBerapa komisi yang
                                            diberlakukan di GoPressMarket?Merchant dikenakan biaya sharing profit /
                                            komisi sebesar 15% dari harga jual produk yang ada / yang tayang di
                                            GoPressMarket.Apakah komisi dapat turun?Apabila dikemudian hari ada
                                            perubahan komisi, maka Merchant akan diberitahukan melalui nomor HP
                                            terdaftar dan artikel lengkap di website GoPress.co.Apakah merchant dapat
                                            melakukan penambahan kardus apabila mendapatkan order?Merchant menyediakan
                                            kardus sendiri dan memastikan packaging aman saat pengiriman. Untuk
                                            penambahan biaya, bisa dibebankan kepada pembeli ya!Mengapa merchant tidak
                                            dapat menambahkan produk?Merchant tidak dapat menambahkan produk dengan
                                            alasan sbb:Alamat tidak terjangkau, sehingga otomatis tidak dapat / belum
                                            bisa bergabung dengan GoPressMarket.Tim GoPressMarket menon-aktifkan toko
                                            merchant kamu karena melanggar syarat ketentuan atau kebijakan selama
                                            menjadi merchant GoPressMarket.Bagaimana jika alamat penjemputan saya
                                            ternyata tidak terjangkau area GoPress?Merchant diberi opsi sbb:Seller bisa
                                            melakukan koordinasi dengan tim GoPress Home, GoPress Point, atau GoPress
                                            Agent terdekat dari alamat merchant, untuk mendrop order atau menentukan
                                            alamat meeting point dengan Hero GoPress areanya yang masih
                                            terjangkau.Mengaktifkan toko apabila alamat penjemputan sudah tercover
                                            dengan info ke tim GoPressmarket melalui email:
                                            GoPressmarket@GoPress.coDimana saja area jangkauan GoPressMarket?Bisa
                                            dikirim hampir ke seluruh kota di Indonesia dengan catatan yang terjangkau
                                            area GoPress yang dapat dicek di
                                            https://paxel.co/id/detail-layanan-dan-bantuan/area-jangkauan-paxelmarket.Apakah
                                            merchant bisa mengatur jam tutup / buka toko di GoPressMarket?Bisa,
                                            pengaturan jam buka tutup Toko dapat dilakukan di menu pengaturan Toko di
                                            GoPressMarket yang ada di dalam aplikasi GoPress.Flat ongkir GoPressMarket
                                            itu pengiriman yang seperti apa?Flat ongkir 10 ribu itu hanya berlaku untuk
                                            wilayah Jawa – Bali dengan dimensi packaging Medium (contoh: dus sepatu) dan
                                            maksimal berat 5 kg per paketnya. Untuk wilayah Jawa ke Sumatera berlaku 50
                                            ribu. Sedangkan untuk Jawa ke Sulawesi, berlaku 100 ribu. Ongkir ditanggung
                                            pembeli.Ukuran paket apakah mempengaruhi flat ongkir?Untuk size Small
                                            (contoh: dus handphone) dan Medium (contoh: dus sepatu) maka akan masuk ke
                                            harga flat ongkir. Namun jika lebih dari 5 kg, dimensi packaging Large
                                            (contoh: dus mie instan) maka akan menjadi 2 resi yang berbeda.Bagaimana
                                            ketentuan penjadwalan ulang / RAP?Penjadwalan ulang / RAP hanya bisa 1x
                                            (mundur 1x24 jam dari Jadwal Awal). Jika lebih dari 1x, maka AWB akan
                                            direject dan seller harus ganti AWB-nya dengan AWB / shipment GoPress yang
                                            mana ongkirnya ditanggung oleh seller.Apa saja benefit bergabung sebagai
                                            merchant GoPressMarket?Benefit yang didapat jika bergabung di GoPressMarket
                                            adalah:Potensi makanan terjual hampir ke seluruh kota di IndonesiaMerchant
                                            bisa join promo dengan GoPressMarketPlacement di top banner halaman utama
                                            aplikasi GoPressExposure di sosial media GoPress dan GoPressMarketPlacement
                                            di top banner menu GoPressMarket di dalam aplikasi GoPressAwareness iklan di
                                            platform sosial media FB, Instagram, Tiktok dan GoogleGratis pembuatan
                                            konten video dan fotoDigital Audit (SEO web GoPress.co dan Instagram
                                            GoPressMarket)Apakah metode pembayaran menggunakan kartu kredit
                                            saja?Pembayaran di GoPressMarket dapat menggunakan Bank Transfer (Virtual
                                            Account BCA, BNI, BRI, Mandiri, Permata Bank dll), Kartu Kredit serta
                                            E-wallet (OVO, GoPay, ShopeePay dan Dana).Kapan saya akan menerima
                                            pembayaran dari customer apabila produk saya sudah terjual?Proses penerimaan
                                            pembayaran dilakukan jika makanan sudah sampai di customer maka status
                                            orderan akan otomatis completed setelah 1x24 jam (setelah diterima).Sejak
                                            kapan GoPressMarket berpindah sepenuhnya dari website ke aplikasi
                                            GoPress?GoPressMarket berpindah sepenuhnya dari website ke aplikasi GoPress
                                            sejak 15 Desember 2022. Pembeli sudah tidak bisa lagi melakukan checkout /
                                            order produk melalui website GoPressMarket.co mulai dari 27 Desember
                                            2022.Namun, jika produk di tokomu tampil di Click2Buy aplikasi GoPress, maka
                                            pembeli bisa melakukan checkout / order produk melalui website. Karena fitur
                                            Click2Buy aplikasi GoPress masih terintegrasi dengan sistem web.Apa
                                            kemudahan GoPressMarket yang berpindah di aplikasi GoPress?#Jajanbedakota
                                            lebih mudah, cepat, dengan tampilan ciamik &amp;amp; user-friendlyMudah
                                            diakses kapan saja, di mana saja, dan kelola toko hingga produk dalam satu
                                            aplikasi GoPressInfo promo dan voucher lebih terupdate dan mudah
                                            ditemukanProses pesanan dan cek pendapatan lebih cepatPenarikan saldo lebih
                                            mudah dan cepatProduk mudah ditemukan pembeli melalui kategori atau fitur
                                            search produk di bagian atas homepage menu GoPressMarketAtur hari libur toko
                                            lebih fleksibelCek ulasan pembeli dengan cepat dan mudahKirim pertanyaan
                                            24/7 langsung ke Hera (dengan klik icon Hera) di pojok kanan bawah di
                                            homepage menu GoPressMarketSEPUTAR TOKO &amp;amp; PRODUKApa perbedaan
                                            reaktivasi dan registrasi toko di GoPressMarket via aplikasi
                                            GoPress?Reaktivasi toko adalah proses pengaktifan kembali toko (lama) di
                                            GoPressMarket melalui aplikasi GoPress, yang mana toko tersebut sudah
                                            terdaftar di web GoPressmarket.co sebelum tanggal 5 Desember 2022.Sementara
                                            itu, registrasi toko adalah proses pendaftaran / buka toko baru di
                                            GoPressMarket via aplikasi GoPress.Untuk tutorial terkait reaktivasi dan
                                            registrasi toko, silakan cek di link ini https://youtu.be/tZS5KPPCvto.Apakah
                                            toko yang sudah didaftarkan perlu verifikasi?Tidak perlu verifikasi, jadi
                                            bisa langsung jualan dan menambahkan produk.Bagaimana cara mengisi data diri
                                            di Seller Dashboard?Masuk ke menu Profil Toko Kamu, kemudian pilih menu
                                            pengaturan. Silahkan mengisi data diri Toko Kamu secara lengkap dan
                                            benar.Berapa ukuran foto profil dan banner toko di GoPressMarket di dalam
                                            aplikasi GoPress?Ukuran foto profil adalah 1:1 (square), dengan size minimum
                                            400x400 pixel dan 50 kB, dan size maksimum 100 kB. Untuk ukuran foto banner
                                            adalah 2:1, dengan size minimum 408x816 pixel, dan size auto compressed
                                            menjadi 100kB.Bagaimana cara mengubah alamat penjemputan atau alamat
                                            toko?Cara mengubah alamat penjemputan atau alamat toko:Buka aplikasi
                                            GoPressKlik menu GoPressMarketKlik ProfilKlik Ke Akun TokoPilih Pengaturan
                                            TokoKlik Buka Buku Alamat GoPressKlik Tambah alamat baruCari Alamat Lokasi
                                            di Peta dan pastikan alamat terisi lengkap (sampai ke kelurahan)Masukkan
                                            Nama, lalu No. HpKlik KonfirmasiKlik Simpan PengaturanApakah untuk orderan
                                            yang sudah masuk bisa diubah alamat penjemputannya?Untuk saat ini tidak
                                            bisa, jadi pastikan alamat tokomu sudah diubah sebelum ada orderan masuk.
                                            Jika seller tetap ingin merubah alamat penjemputan saat orderan sudah masuk,
                                            maka langkah-langkah yang perlu dilakukan adalah:Seller melakukan create
                                            shipmentMenginfokan ke admin GoPressMarket untuk melakukan reject AWBAdmin
                                            GoPressMarket melakukan bulk AWB baruAdmin GoPressMarket melakukan perubahan
                                            AWBBagaimana cara produk saya bisa tayang di menu GoPressMarket di dalam
                                            aplikasi GoPress?Buka aplikasi GoPress, klik icon GoPressMarket, lalu masuk
                                            ke toko. Klik Produk, kemudian tambah Produk. Lengkapi data produk, lalu
                                            klik Tampilkan. Jika Kamu klik Simpan maka status produkmu adalah draft
                                            (tersimpan / tidak tayang).Bagaimana cara membuat produk saya menjadi
                                            variabel?Tambah produk atau edit produk di menu Produk, kemudian klik
                                            pilihan Variasi, input varian (Rasa, Ukuran, Jumlah) yang diinginkan dari
                                            produk Kamu. Input harga dan detail yang sesuai.Apa yang bisa saya lakukan
                                            jika produk saya Pre-Order (PO)?Seller bisa menuliskan keterangan bahwa
                                            produk yang dijual adalah PO pada kolom deskripsi atau pada judul produk,
                                            seperti contoh ‘H+2 Cireng Isi’.Produk yang seperti apakah yang bisa dijual
                                            dan tayang di GoPressMarket?Produk-produk Makanan dan Minuman. Baik itu
                                            makanan mentah, setengah matang, maupun matang. Serta Makanan Beku dan Non
                                            Perishable juga bisa dijual di GoPressMarket. Produk penunjang atau
                                            pendukung juga dapat tayang dan dijual. Untuk kebijakan produk yang dilarang
                                            dijual di GoPressMarket, silakan cek di link ini
                                            https://paxel.co/id/berita-dan-promo/kebijakan-produk-yang-dilarang-di-paxelmarket.Packing
                                            yang seperti apa yang cocok dengan produk saya?Seller diharapkan memiliki
                                            packing yang aman dan rapi seperti menggunakan bubble wrap dan kardus sesuai
                                            dengan produk yang akan dikirimkan ke pembeli.Mengapa produk saya
                                            ditangguhkan statusnya?Produk seller ditangguhkan karena menjual produk
                                            terlarang, serta detail produk yang dijual tidak lengkap (ukuran, dimensi,
                                            deskripsi).Apa yang seharusnya merchant lakukan jika mendapatkan order?Pihak
                                            Merchant diharapkan melakukan Penerimaan Order atau Confirmation Order.
                                            Setelah itu, jika produk siap dikirimkan, lanjut ke proses pemilihan slot
                                            penjemputan yang tersedia di hari yang sama.Apakah merchant bisa menambahkan
                                            kardus?Seller diharapkan dapat menyiapkan kardus secara mandiri. Apabila
                                            Merchant ingin menggunakan kardus GoPress, bisa membeli kardus khusus merk
                                            Alvaboard melalui GoPressMarket.Apakah masih harus kirim nota untuk
                                            pencairan dana?Untuk pencairan dana dari order yang masuk ke GoPressMarket
                                            di aplikasi GoPress tidak perlu kirim nota. Namun untuk order yang masuk
                                            melalui website GoPressMarket.co masih harus kirim nota ke Admin
                                            GoPressMarket, dan seller akan direminder oleh Admin GoPressMarket melalui
                                            Whatsapp, untuk memproses pencairan dana transaksi di dalam saldo toko
                                            seller yang ada di website. Proses pencairan dana dari order via aplikasi
                                            dan website maksimal 3 hari jam kerja.Apakah ada batas maksimum dan minimum
                                            penarikan dana dari aplikasi?Maksimal 1x/hari dengan maksimum penarikan dana
                                            Rp 25.000.000,-/hari dan minimum Rp 10.000, dengan biaya admin bank Rp
                                            3.600/sekali penarikan.Berapa lama dana akan cair setelah seller mengatur
                                            penarikan dana?Seller dapat memproses penarikan dana secara otomatis, dan
                                            proses pembayaran akan kami kirimkan melalui Bank Transfer dalam waktu 2x24
                                            jam pada hari dan jam kerja, tidak termasuk hari Sabtu dan Minggu.Bagaimana
                                            saya dapat menemukan toko saya di menu GoPressGoPressMarket yang ada di
                                            dalam aplikasi GoPress?Bisa melalui kotak pencarian yang ada di halaman
                                            depan GoPressMarket.Berapa maksimum ukuran packing kardus untuk pengiriman
                                            produk GoPressMarket?Untuk ukuran packing produk adalah dimensi maksimum
                                            30x22x12 cm dan berat maksimum 5 kg. Jika lebih dari ukuran tersebut, maka
                                            akan terhitung menjadi 2 AWB / resi.Apakah kardus ALVAboard yang digunakan
                                            untuk GoPress Delivery dan yang dijual di GoPressMarket (Toko ALVAboard)
                                            berukuran sama?Kardus ALVAboard yang digunakan untuk GoPress Delivery dan
                                            yang dijual di GoPressMarket (di dalam toko ALVAboard) berukuran berbeda.
                                            Berikut spesifikasi ukurannya:Dimensi ALVAboard untuk GoPress
                                            Delivery:Small20x20x8 cmMedium30x22x12 cmLarge35x30x25 cmCustom50x50x50
                                            cmDimensi ALVAboard yang dijual di GoPressMarket:Small20x10x8 cmMedium
                                            (Large II)40x20x20 cmLarge (Large I)60x40x30 cmXL70x50x40 cmKotak Hampers
                                            Hadiah I18x18x8 cmKotak Hampers Hadiah II20x20x10 cmKotak Hampers Hadiah
                                            III22x22x11 cmBagaimana cara penulisan nama produk?Penamaan produk
                                            mengandung: merek produk + kategori / tipe produk + khas / asal daerah +
                                            nama toko.Maksimal penamaan adalah 80 karakter termasuk spasi. Jika ada
                                            penamaan yang melebihi limit, prioritaskan merek produk, kategori / tipe
                                            produk, dan nama toko. Penamaan item tidak boleh disingkat (Spikoe Resep
                                            Kuno menjadi Spkoe, Kartika Sari menjadi KS). Untuk khas / asal daerah bisa
                                            menggunakan kata ganti Asli, Dari, Khas.Contoh penamaan produk yang
                                            salah:Spikoe Resep KunoKS Brownies Panggang OriContoh penamaan produk yang
                                            benar:Spikoe Resep Kuno Bolu Lapis Reguler Asli Surabaya Jastip Kuliner
                                            NusantaraKartika Sari Brownies Panggang Original Asli Bandung Jastip Kuliner
                                            NusantaraUntuk produk varian, penamaan pada Varian Produk mengandung
                                            maksimal 20 karakter. Misal: Paket A, Paket B, Paket C, dst. Atau, Keju,
                                            Coklat, Mocha, Nanas, dst.Bagaimana cara penulisan nama produk
                                            non-halal?Untuk produk non-halal, maka template penulisan nama produk
                                            menjadi:[Non-Halal] merek produk + kategori / tipe produk + khas / asal
                                            daerah + nama tokoContoh: [Non-Halal] Babi Guling Karya Rebo Panggang Khas
                                            Bali Babi Guling Karya ReboBerapa ukuran foto produk toko di GoPressMarket
                                            di dalam aplikasi GoPress?Ukuran foto produk adalah adalah 1:1 (square).
                                            Dengan size minimum 400x400 pixel dan 50 kB, dan size maksimum 100
                                            kB.Bagaimana panduan pemilihan foto produk?Berikut panduan pemilihan foto
                                            produk:Resolusi dan ukuran foto produk harus proporsional dan tidak
                                            stretched secara horizontal ataupun vertikalFoto produk harus jelas dan
                                            tidak terlihat pudar / kaburJika ingin menampilkan logo toko, maka tampilkan
                                            di pojok kanan / kiri di atas / bawah dengan ukuran yang kecil dan tidak
                                            menutup tampilan produkTidak diperkenankan untuk menampilkan logo kompetitor
                                            pada foto produkTidak diperkenankan untuk menampilkan nomor telepon merchant
                                            pada gambar produkWarna pada produk harus terlihat jelas (tidak ada
                                            bayangan)Bagaimana cara penulisan deskripsi produk yang baik dan
                                            benar?Deskripsi produk perlu ditulis dengan baik dan benar supaya pembeli
                                            tidak bingung dan jelas saat ingin order produk. Berikut untuk template
                                            deskripsi produk:Deskripsi singkat produk, contoh: Cookies bar yang diproses
                                            dengan cara dipanggang. Memiliki rasa khas coklat bertekstur lembut, padat,
                                            disertai potongan almond. Barang dijamin fresh.Masa layak konsumsi, contoh:
                                            Masa layak konsumsi 7 hari suhu ruang sejak diproduksi atau dikirim.Detail
                                            ukuran atau jumlah produk, contoh: 1 box berbentuk persegi panjang berukuran
                                            33x14x7 cm.Kemasan, contoh: Kemasan menggunakan mika makanan, berlapis
                                            bubble wrap, dan kardus.Apakah toko yang sudah dibuat bisa
                                            dinonaktifkan?Untuk sekarang ini tidak bisa, Jadi, seller harus mengatur
                                            hari libur toko pada Fitur Toko Libur dan mengubah status produk menjadi
                                            Disimpan.Cara mengatur hari libur toko:Buka aplikasi GoPressKlik menu
                                            GoPressMarketKlik ProfilKlik Ke Akun TokoKlik Pengaturan TokoPada Fitur Toko
                                            Libur, klik AturUbah semua hari (Senin s.d. Minggu) menjadi Toko Libur
                                            dengan klik icon lingkaranJika sudah, klik Simpan Hari Toko BukaSelesai!
                                            Ketika tombol dimatikan, pembeli tidak dapat membuat order pada hari
                                            tersebutCara mengubah status produk menjadi Disimpan:Buka aplikasi
                                            GoPressKlik menu GoPressMarketKlik ProfilKlik Ke Akun TokoKlik ProdukKlik
                                            icon titik tiga pada produk yang ingin disimpanKlik ArsipkanSelesai! Status
                                            produkmu berubah menjadi Disimpan sehingga tidak tayang di
                                            GoPressMarketBerapa produk yang harus seller tambahkan agar toko tetap ada
                                            di GoPressMarket?Kamu perlu menambahkan minimal 1 produk.Jika stok produk
                                            habis, apakah produk tersebut masih tampil di GoPressMarket?Produk masih
                                            tampil di GoPressMarket, namun tombol "+ Keranjang" tidak ada dan muncul
                                            kalimat "Produk Tidak Tersedia atau Stok Habis".Bagaimana cara mengubah
                                            status produk yang Disimpan menjadi Dipasang?Produk yang Dipasang adalah
                                            yang tampil di GoPressMarket. Cara mengubah status produk yang Disimpan
                                            menjadi Dipasang adalah:Buka aplikasi GoPressKlik menu GoPressMarketKlik
                                            ProfilKlik Ke Akun TokoKlik ProdukKlik DisimpanKlik Pasang pada produk yang
                                            ingin kamu tampilkanApakah orderan yang masuk ke GoPressMarket via aplikasi
                                            GoPress bisa batal otomatis?Bisa, order akan batal otomatis dalam 12 jam
                                            kerja jika seller tidak klik proses order, dan dalam 24 jam kerja jika
                                            seller tidak mengatur pickup request. Kemudian dana akan direfund melalui
                                            Transfer Bank ke customer maksimal 2 hari kerja (tidak termasuk tanggal
                                            merah dan weekend).Bagaimana flow jika ada orderan produk?Saat ada orderan,
                                            ada 5 tahapan yang akan seller lalui, yakni:Dibayar: order masuk yang sudah
                                            dibayar oleh pembeli. Seller perlu klik Proses Order.Diproses: order masuk
                                            yang perlu diproses oleh seller dengan cara klik Atur Penjemputan.Dikirim:
                                            order masuk yang sedang dalam pengiriman ke alamat pembeli / tujuanSelesai:
                                            order yang statusnya sudah diterima pembeli. Seller bisa cek pendapatan
                                            dengan klik Rincian Pendapatan.Dibatalkan: order yang statusnya dibatalkan,
                                            baik itu karena dibatalkan otomatis dari sistem, dibatalkan oleh pembeli,
                                            atau dibatalkan oleh seller.SEPUTAR PROMOSiapa saja yang mendapatkan
                                            promo?Seller terdaftar dan aktif di GoPressMarket berhak mendapatkan promo
                                            dengan syarat dan ketentuan yang berlaku.Bagaimana cara mendapatkan promo
                                            dari GoPressMarket?Seller bisa mendapatkan promo dari GoPressMarket jika
                                            memang masuk dalam kategori tiering Merchant yang dibuat oleh tim
                                            GoPressMarket. Merchant terpilih akan dihubungi melalui WhatsApp atau
                                            email.Bagaimana cara membuat voucher di GoPressMarket?Jika seller ingin
                                            membuat voucher secara mandiri, dapat menghubungi tim kami di email
                                            GoPressmarket@GoPress.co dengan merincikan info sbb:Bentuk promoSkema dan
                                            mekanisme promoNama voucher (jika ada request)Melampirkan foto produk yang
                                            akan dipromokanMencantumkan keterangan jika ada permintaan pembuatan kode
                                            voucher dengan pilihan sbb:- biaya voucher ditanggung merchant atau pihak
                                            yang memang ditunjuk untuk menanggung biaya atas penggunaan voucher.Apakah
                                            ada klaim voucher otomatis di GoPressMarket?Saat ini belum ada klaim voucher
                                            otomatis di dashboard seller.Dimana saya bisa mengetahui di GoPressMarket
                                            ada promo?Promo GoPressMarket dapat dicek secara berkala melalui sosial
                                            media GoPressMarket dan GoPress maupun broadcast melalui Whatsapp tim
                                            Merchant Partnership.Bagaimana cara agar produk saya bisa direview?Produk
                                            dapat direview oleh pembeli terdaftar dan telah membeli produk
                                            seller.Bagaimana cara agar produk saya tampil di halaman utama GoPressMarket
                                            di dalam aplikasi GoPress?Produk Seller dapat tampil di halaman utama
                                            GoPressMarket di dalam aplikasi GoPress apabila sesuai dan memenuhi kategori
                                            tema yang diangkat oleh tim GoPressmarket dan masuk ke kategori promo.Apa
                                            saja sosial media GoPressMarket?Merchant dapat mengunjungi IG:
                                            GoPressmarket, facebook: GoPressMarket, Tiktok: GoPress dan Youtube:
                                            Paxel.coBagaimana cara agar produk saya dapat dibuatkan konten di sosial
                                            media PaxelMarket?Merchant dapat menghubungi tim PaxelMarket melalui email:
                                            paxelmarket@paxel.coMerchant yang bisa mendapatkan benefit konten sosial
                                            media adalah merchant yang memiliki promo menarik dan sesuai pada periode
                                            atau tema yang sedang dijalankan oleh PaxelMarketMerchant yang bisa
                                            mendapatkan benefit konten sosial media adalah merchant terpilih (eksklusif,
                                            member Paxelin Club Gold, dan top tiering merchant PaxelMarket)Tidak
                                            menemukan jawaban dari masalah Kamu? Hubungi WhatsApp Admin PaxelMarket
                                            0811-9258-049.
                                        </div>
                                    </div>
                                    <div class="col-md d-none d-sm-block">
                                        <div class="text-right articles-homepage-date">
                                            03 September 2001
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      <br><br>
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






</div>



@endsection
