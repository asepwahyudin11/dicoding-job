<?php

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [ 'name' => 'Back-End Developer' ],
            [ 'name' => 'Front-End Developer' ],
            [ 'name' => 'Product Manager' ],
            [ 'name' => 'Product Designer' ],
            [ 'name' => 'iOS Developer' ],
            [ 'name' => 'Android Developer' ],
            [ 'name' => 'Database Administrator' ],
            [ 'name' => 'Data Science' ],
        ];

        foreach ($datas as $item) {
            Skill::create($item);
        }
    }
}
