<?php

use Illuminate\Database\Seeder;
use App\Amenity;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Amenity::create([
        'name' => 'Air conditioner'
      ]);
      Amenity::create([
        'name' => 'Heater'
      ]);
      Amenity::create([
        'name' => 'Security'
      ]);
      Amenity::create([
        'name' => 'Smoke detector'
      ]);
      Amenity::create([
        'name' => 'Television'
      ]);
      Amenity::create([
        'name' => 'Swimming pool'
      ]);
      Amenity::create([
        'name' => 'Lighting'
      ]);
      Amenity::create([
        'name' => 'HVAC'
      ]);
    }
}
