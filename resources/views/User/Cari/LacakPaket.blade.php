@extends('layouts.main')
@section('container')
<div>
  <div class="col-sm-9 container ">
    <div class="input-group mb-3 shadow bg-white" style="border-radius: 20px">
        <input type="text" class="form-control" placeholder="Nomor resi" aria-label="lacak"
            aria-describedby="basic-addon1" style="border-radius: 20px">
        <img class="ikonHapus" src="/image/ikonHapus.png" alt="">
    </div>

    <div >
        <button class="btn btn-outline-secondary" style="border-radius: 20px" type="button" id="button-addon1">Cari</button>
    </div>

    <div>
        <img class="rounded mx-auto d-block img-fluid" src="/image/mapIndo.png" alt="">
    </div>
</div>
</div>
    
@endsection
