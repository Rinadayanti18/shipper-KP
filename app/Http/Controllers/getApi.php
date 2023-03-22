<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\City;
use App\Models\Province;
use App\Models\Courier;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class getApi extends Controller
{
   public function index(){
   //  $daftarProvinsi = RajaOngkir::provinsi()->all();
    //return $daftarProvinsi;
    //dd($daftarProvinsi);
   //  return view('/User.Cari.CekTarif',
   //  ['title'=> 'Cek Tarif'],
   //   ['daftarProvinsi'=>$daftarProvinsi]);
    
    // $provinsi = Province::all();
    // return view('/User.Cari.CekTarif', compact('provinsi','cekongkir'), [
    //     'title'=> 'Cek Tarif'
    // ]);

       $couriers = Courier::pluck('title','code');
       $provinces = Province::pluck('title','province_id');
       return view('/User.Cari.CekTarif', compact('couriers','provinces'), [
             'title'=> 'Cek Tarif'
         ]);
    
   }

   public function getCities($id){
      $city = City::where('province_id', $id)->pluck('title','city_id');
      return json_encode($city);
   }

   public function submit(Request $request){
      // if(isset($request->tes)) {
         $couriers = Courier::pluck('title','code');
         $provinces = Province::pluck('title','province_id');
         $cost = RajaOngkir::ongkosKirim([
            'origin'       => $request->city_origin,
            'destination'  => $request->city_destination,
            'weight'       => $request->weight,
            'courier'      => $request->courier,
         ])->get();
         // dd($cost[0]);
         // dd($cost[0]["costs"]);
   
         return view('/User.Cari.CekTarif', ['cost' => $cost[0], 'couriers' => $couriers, 'provinces' => $provinces], [
            'title'=> 'Cek Tarif'
         ]);
         
         // return view('/User.Cari.CekTarif', compact('cost','couriers','provinces'), [
         //    'title'=> 'Cek Tarif'
         // ]);
      // }

      // return response()->json($cost);

      // $fee = (number_format($cost[0]['costs'][0]['cost'][0]['value']));
      // $etd = ($cost[0]['costs'][0]['cost'][0]['etd']);
      // dd($cost[0]['costs'][0]['cost'][0]);

      
      // $city_ori = City::where('province_id', 3)->pluck('title','city_id');
      // $prov_ori = Province::where($request->province_origin)->pluck('title');

      // $city_des = City::where('province_id', $request->province_destination)->pluck('title');
      // $prov_des = Province::where($request->province_destination)->pluck('title');
      // dd($city_ori);
   }

   
}
