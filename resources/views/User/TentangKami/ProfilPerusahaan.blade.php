@extends('layouts.main')
@section('container')

<div class="justify-content-center mb-5" style="display: flex">
    <div class="p-5 mt-5 " >
       <div>
           <p style="text-align: center"><b>
               GO Express berkomitmen untuk memanfaatkan sistem IT yang canggih <br> untuk meningkatkan efisiensi 
               dan kualitas bagi pelanggan
           </b></p> <br>
           <div class="row">
            <div class="col-sm-3">
                <img class="mb-3" src="image/pro-1.png"  alt="Paris" width="250" height="180"> 
                <p>Beroperasi 365 hari</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <img class="mb-3" src="image/pro-2.png"  alt="Paris" width="250" height="180"> 
                <p>Menjangkau seluruh Indonesia</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <img class="mb-3" src="image/pro-3.png" class="float-start" alt="Paris" width="250" height="180">
                <p>24 jam layanan keluhan pelanggan</p> 
            </div>

           </div>
           <div class="row mb-5 justify-content-center" style="display: flex">
            <div class="col-sm-3">
                <img class="float-start mb-3" src="image/pro-1.png"  alt="Paris" width="250" height="180"> 
                <p>Beroperasi 365 hari</p>
            </div>
            
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <img class="float-end mb-3" src="image/pro-3.png"  alt="Paris" width="250" height="180">
                <p>24 jam layanan keluhan pelanggan</p> 
            </div>

           </div>



            {{-- <div class="container">
            <div>

                <img src="image/pro-1.png" class="float-start" alt="Paris" width="250" height="180"> 
                <p>Operasional 365 hari</p>
            </div>
               <img src="image/mapIndo.png" class="float-end" alt="Paris" width="250" height="180"> 
           </div> --}}
           
       </div>
       
      
        <ul class="pagination justify-content-center" style="display: flex">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>

    </div>

    
</div>

@endsection