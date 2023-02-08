@extends('layouts.main')
@section('container')
    <div class="container serv-list">
        <div class=" col-sm-10 mt-5 p-20 mb-5">
            <div class="row">

                <div class="col ">
                    <div class="shadow serv-cont card" style="height: 500px; width: 310px">
                        <img src="/image/layanan/GOEZ.png" alt="GOPress EZ">
                        <div class="card-body" style="background-color:#c9c9cd7d">
                            <p class="card-text">
                                <i class="bi bi-stopwatch-fill" style="margin-right: 4px"></i>Estimasi Waktu Sampai : 2 - 7
                                Hari <br>
                                <i class="bi bi-geo-fill"></i> Cakupan : Seluruh Indonesia <br> <br>
                                <small style="color: #5f23c7">Waktu pengiriman menyesuaikan area tujuan pengiriman</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col ">
                    <div class="shadow serv-cont card" style="height: 500px; width: 310px">
                        <img src="/image/layanan/GOECO.png" alt="GOPress ECO">
                        <div class="card-body" style="background-color:#c9c9cd7d; justify-content: center; display: block">
                            <p class="card-text">
                                <i class="bi bi-stopwatch-fill" style="margin-right: 4px"></i>Estimasi Waktu Sampai : 7 - 17
                                Hari <br>
                                <i class="bi bi-geo-fill"></i> Cakupan : Seluruh Pulau Jawa <br> <br>
                                <small style="color: #5f23c7">Dengan tujuan Pulau Sumatera, Kalimantan, Sulawesi, Bali
                                    (waktu pengiriman menyesuaikan area tujuan pengiriman)</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col ">
                    <div class="shadow serv-cont card" style="height: 500px; width: 310px">
                        <img src="/image/layanan/GOSuper.png" alt="GOPress Super" style="width:100%">
                        <div class="card-body" style="background-color:#c9c9cd7d">
                            <p class="card-text">
                                <i class="bi bi-stopwatch-fill" style="margin-right: 4px"></i>Estimasi Waktu Sampai : 1 - 3
                                Hari <br>
                                <i class="bi bi-geo-fill"></i> Cakupan : Jawa, Bali, Kalimantan, Sumatera, Sulawesi, Batam
                                <br> <br>
                                <small style="color: #5f23c7">*Waktu pengiriman menyesuaikan area tujuan pengiriman</small>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
