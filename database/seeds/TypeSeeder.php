<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [ 'name' => 'Full-Time' ],
            [ 'name' => 'Freelance' ],
            [ 'name' => 'Intern' ],
        ];

        foreach ($datas as $item) {
            Type::create($item);
        }
    }
}
