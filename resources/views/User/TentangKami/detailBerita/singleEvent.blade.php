@extends('layouts.main')
@section('container')
<div class="container mt-5 justify-content-center" style="display: flex">
    <div class="col-sm-9 mt-5 shadow p-4 " style="background-color: var(--bgRina);">
        <article>
            <h3 class="p-5" style="text-align: center;">{{ $singEvent["title"] }}</h3>
            {!! $singEvent->body !!}
            {{-- <p>{{ $singNews["body"] }}</p> --}}
        </article> <br>
        <a style="text-decoration : none" href="/event">Kembali</a>
    </div> 
</div><br><br><br><br>


@endsection