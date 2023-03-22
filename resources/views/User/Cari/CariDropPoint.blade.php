@extends('layouts.main')
@section('container')

<div class="p-5" style="margin-left: 50px">
  <div class="row ">
    <div class="col-sm-4">
      <form class="cilok">
        <label for="Cname">Cari lokasi</label>
        <input  type="text" style="border-top: none; border-left: none; 
        border-right: none" id="Clokasi" name="Cname">
      </form>
    </div>
    
    <div class="col-sm-5">
        <img class="rounded mx-auto d-block img-fluid" src="/image/mapIndo.png" alt="">
      </div>
  
</div>
</div>

@endsection