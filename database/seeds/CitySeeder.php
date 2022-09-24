<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [ 'name' => 'Bisa Remote' ],
            [ 'name' => 'Bandung' ],
            [ 'name' => 'Jakarta' ],
            [ 'name' => 'Yogyakarta' ],
        ];

        foreach ($datas as $item) {
            City::create($item);
        }
    }
}
