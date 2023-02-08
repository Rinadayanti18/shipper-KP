@extends('layouts.main')
@section('container')
    <div class="container shadow nilah" style="margin-bottom: 5%">

        <h4>Barang Berbahaya</h4>
        {{-- Row1 --}}
        <div class="container-fluid mt-3">
            <div class="row">

                <div class="col p-3  ">
                    <img src="/Bahaya_Larangan/bubukMesiu.jpg" alt="Bubuk Mesiu">
                    <div>
                        <h5>Barang berbahaya kelas 1</h5>
                        <ul>
                            <li>Kembang Api</li>
                            <li>Amuinisi/Kartrid</li>
                            <li>Inflator Airbag</li>
                            <li>Komposisi TNT</li>
                            <li>Suar</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3  ">
                    <img src="/Bahaya_Larangan/aerosol.jpg" alt="Aerosol">
                    <div>
                        <h5>Barang berbahaya kelas 2</h5>
                        <ul>
                            <li>Aerosol</li>
                            <li>Tabung Gas (berisi)</li>
                            <li>Silikon</li>
                            <li>Fire Stop</li>
                            <li>Kutek</li>
                            <li>Gas CO2</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3  ">
                    <img src="/Bahaya_Larangan/catKaleng.jpg" alt="Cat Kaleng">
                    <div>
                        <h5>Barang berbahaya kelas 3</h5>
                        <ul>
                            <li>Lem</li>
                            <li>Perfume</li>
                            <li>Cat Kaleng</li>
                            <li>Oli</li>
                            <li>Sanpoly</li>
                            <li>Toner</li>
                            <li>Pelampung Bensin</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        {{-- End of Row1 --}}

        {{-- Row2 --}}
        <div class="container-fluid mt-3">
            <div class="row">

                <div class="col p-3 ">
                    <img src="/Bahaya_Larangan/karbon.jpg" alt="">
                    <div>
                        <h5>Barang berbahaya kelas 4</h5>
                        <ul>
                            <li>Alkali Metal</li>
                            <li>Aluminium Fosfit</li>
                            <li>Karbon</li>
                            <li>Kamper</li>
                            <li>Kain Berminyak</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3 ">
                    <img src="/Bahaya_Larangan/zatPengoksidasi.jpg" alt="Zat Pengoksidasi">
                    <div>
                        <h5>Barang berbahaya kelas 5</h5>
                        <ul>
                            <li>Peroksida Organik</li>
                            <li>Zat Pengoksidasi</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3 ">
                    <img src="/Bahaya_Larangan/obatTanaman.jpg" alt="Obat Tanaman">
                    <div>
                        <h5>Barang berbahaya kelas 6</h5>
                        <ul>
                            <li>Obat Tanaman</li>
                            <li>Serbuk Toner</li>
                            <li>Racun Semut & Kecoa</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        {{-- End of Row2 --}}

        {{-- Row3 --}}
        <div class="container-fluid mt-3">
            <div class="row">

                <div class="col p-3 ">
                    <img src="/Bahaya_Larangan/radioaktif.jpg" alt="Radioaktif">
                    <div>
                        <h5>Barang berbahaya kelas 7</h5>
                        <ul>
                            <li>Material Radioaktif</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3 ">
                    <img src="/Bahaya_Larangan/cairanKorosif.jpg" alt="Cairan Korosif">
                    <div>
                        <h5>Barang berbahaya kelas 8</h5>
                        <ul>
                            <li>Cairan Corrosive</li>
                            <li>Cairan Pembersih Kerak</li>
                        </ul>
                    </div>
                </div>
                <div class="col p-3 ">
                    <img src="/Bahaya_Larangan/Baterai.jpg" alt="Baterai">
                    <div>
                        <h5>Barang berbahaya kelas 9</h5>
                        <div class="row">
                            <div class="col p-1.5">
                                <ul>
                                    <li>Baterai</li>
                                    <li>Tangki Kosong</li>
                                    <li>Baterai Emergency</li>
                                    <li>Baterai Laptop</li>
                                    <li>Power Bank</li>
                                    <li>Aki Kering</li>
                                    <li>Laptop</li>
                                    <li>Cairan Racun Serangga</li>
                                </ul>
                            </div>
                            <div class="col p-1.5">
                                <ul>
                                    <li>Zippo</li>
                                    <li>Timbangan Digital</li>
                                    <li>Mic</li>
                                    <li>Dinamo</li>
                                    <li>Cylinder Head</li>
                                    <li>Magnet</li>
                                    <li>Baterai Lithium</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- End of Row3 --}}
        
    </div>
@endsection
