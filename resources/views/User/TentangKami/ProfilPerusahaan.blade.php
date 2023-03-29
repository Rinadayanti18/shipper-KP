@extends('layouts.main')
@section('container')

<div class="justify-content-center d-flex mb-5  ">
<div class="p-5 col-sm-8 shadow mt-5 mb-5">
    <div>
        @foreach ($perusahaan as $company)
            <div class="">
                <h4>{{ $company->title }}</h4>
                {!! $company->body !!}
            </div>
            <div class="justify-content-center d-flex mt-5">
                {{ $perusahaan->links() }}
            </div>
        @endforeach
    </div>
</div>
</div>
    {{-- <div class="justify-content-center mb-5" style="display: flex">
        <div class="p-5 mt-5 ">
                <div class="row ">
                    @foreach ($perusahaan as $company)
                        <div class="col-sm-4  p-4">
                            <div class="shadow serv-cont card" style=" width: 275px">
                                <img src="/image/layanan/GOEZ.png" alt="GOPress EZ">
                                <div class="card-body" style="background-color:var(--bgRina)">
                                    <p class="card-text">
                                    <h4 style="justify-content: center ; display: flex">{{ $company->title }}</h4> <br>
                                    </p> --}}
                                    {{-- {!! $company->body !!} --}}
                                    {{-- tombol mengarah ke halaman singleBerita dengan menggunakan slug berita --}}
                                    {{-- <a style="text-decoration : none" href="/singEmployee{{ $employee->id }}">Selengkapnya</a>  --}}
                                {{-- </div>
                            </div>
                        </div>
                </div> --}}

            {{-- <div class="d-flex justify-content-center"> --}}
                {{-- {{ $perusahaan->links() }} --}}
            {{-- </div> --}}

          
        {{-- </div>
    </div> --}}
@endsection
