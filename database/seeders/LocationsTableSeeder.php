<?php

namespace Database\Seeders;
use App\Models\Province;
use App\Models\City;
use Kavist\RajaOngkir\Facades\RajaOngkir;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $daftarProvinsi = RajaOngkir::provinsi()->all();
       foreach ($daftarProvinsi as $provinceRow) {
        Province::create([
            'province_id' => $provinceRow['province_id'],
            'title' => $provinceRow['province']
        ]);
        $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
        foreach ($daftarKota as $cityRow){
            City::create([
                'province_id' => $provinceRow['province_id'],
                'city_id' => $cityRow['city_id'],
                'title' => $cityRow['city_name']
            ]);
        }
       }
    }
}
