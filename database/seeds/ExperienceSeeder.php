<?php

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [ 'title' => 'Freshgraduate' ],
            [ 'title' => '1-3 tahun' ],
            [ 'title' => '3-5 tahun' ],
            [ 'title' => '5-10 tahun' ],
            [ 'title' => 'Lebih dari 10 tahun' ],
        ];

        foreach ($datas as $item) {
            Experience::create($item);
        }
    }
}
