@extends('layouts.main')
@section('container')
    <div class="container" style="margin-bottom: 20%">
      <div class="row">
        <div class="card">
            <div class="card-header">
                Cek Ongkir
            </div>
            <div class="card-body">
                <div class="">
                    <form class="form-horizontal" role="form" method="POST" action="/cektarif">
                        @csrf
                        <div class="form-group-sm">
                            <div class="row">
                                <div class="col">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Provinsi Asal</label>
                                            <select name="province_origin" id="" class="form-control">
                                                <option value="">--Provinsi--</option>
                                                @foreach ($provinces as $province => $value)
                                                    <option value="{{ $province }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kota Asal</label>
                                            <select name="city_origin" class="form-control" id="">
                                                <option value="">--Kota--</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kurir</label>
                                            <select name="courier" class="form-control" id="">
                                                @foreach ($couriers as $courier => $value)
                                                    <option value="{{ $courier }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="col-md-6">
                                        <div class="form-gorup">
                                            <label for="">Provinsi Tujuan</label>
                                            <select name="province_destination" class="form-control" id="">
                                                <option value="">--Provinsi--</option>
                                                @foreach ($provinces as $province => $value)
                                                    <option value="{{ $province }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kota Tujuan</label>
                                            <select name="city_destination" class="form-control" id="">
                                                <option value="">--Kota--</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Berat (g)</label>
                                            <input type="number" name="weight" id="" class="form-control" value="1000">
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            
    
                            
    
                            <button name="tes" type="submit" class="btn btn-block btn-event" style="background-color: var(--dasar); color: aliceblue">Submit</button>
                            {{-- <div class="col-md-6">
                                @foreach ($fee as $asal)
                                    {{ $asal }}
                                @endforeach
                            </div> --}}
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="card d-none ongkir">
                                        <div class="card-body">
                                            <ul class="list-group" id="ongkir"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="">

                        
                        @if (isset($_POST['tes']))
                            <h2>{{ $cost["code"] }}</h2>

                            {{ $i = 0 }}
                            @foreach ($cost["costs"] as $harga)
                                <p>{{ "hh" }}</p>
                                {{-- @foreach ($harga as $hrg)
                                    <p>{{ $hrg }}</p>
                                @endforeach --}}
                                {{ $i++ }}
                            @endforeach
                            
                            {{-- <p>{{ $cost["costs"] }}</p> --}}
                        @else
                            <h2>tes 1212</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="province_from"]').on('change', function() {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="origin"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="origin"]').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="origin"]').empty();
                }
            });
        });
        $(document).ready(function() {
            $('select[name="province_to"]').on('change', function() {
                var cityId = $(this).val();
                if (cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="destination"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="destination"]').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="destination"]').empty();
                }
            });
        });
    </script> --}}

    <script>
        // let tes = (e) => {
        //     e.preventDefault()
        //     console.log('teessss');
        // }

        $(document).ready(function(){
            $('select[name="province_origin"]').on('change', function(){
                let provinceId = $(this).val();
                if(provinceId){
                    jQuery.ajax({
                        url: '/province/' + provinceId + '/cities',
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="city_origin"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="city_origin"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    $('select[name="city_origin"]').empty();
                }
            });

            $('select[name="province_destination"]').on('change', function(){
                let provinceId = $(this).val();
                if(provinceId){
                    jQuery.ajax({
                        url: '/province/' + provinceId + '/cities',
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="city_destination"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="city_destination"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    $('select[name="city_destination"]').empty();
                }
            });

            // function tes(e) {
            //     e.preventDefault()
            //     return false
            // }

             //ajax check ongkir
        // let isProcessing = false;
        // $('.btn-event').click(function (e) {
        //     e.preventDefault();

        //     let token            = $("meta[name='csrf']").attr("content");
        //     let city_origin      = $('select[name=city_origin]').val();
        //     let city_destination = $('select[name=city_destination]').val();
        //     let courier          = $('select[name=courier]').val();
        //     let weight           = $('#weight').val();

        //     if(isProcessing){
        //         return;
        //     }

        //     isProcessing = true;
        //     jQuery.ajax({
        //         url: "/ongkir",
        //         data: {
        //             _token:              token,
        //             city_origin:         city_origin,
        //             city_destination:    city_destination,
        //             courier:             courier,
        //             weight:              weight,
        //         },
        //         dataType: "JSON",
        //         type: "POST",
        //         success: function (response) {
        //             isProcessing = false;
        //             if (response) {
        //                 $('#ongkir').empty();
        //                 $('.ongkir').addClass('d-block');
        //                 $.each(response[0]['costs'], function (key, value) {
        //                     $('#ongkir').append('<li class="list-group-item">'+response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</li>')
        //                 });

        //             }
        //         }
        //     });

        // });


        });
    </script>
@endsection
