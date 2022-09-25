<?php

use Illuminate\Database\Seeder;
use App\Models\JobSkillRequirement;

class JobSkillRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [ 'job_id' => 1, 'skill_id' => 1 ],
            [ 'job_id' => 2, 'skill_id' => 2 ],
            [ 'job_id' => 3, 'skill_id' => 3 ],
            [ 'job_id' => 3, 'skill_id' => 4 ],
            [ 'job_id' => 4, 'skill_id' => 5 ],
            [ 'job_id' => 5, 'skill_id' => 6 ],
            [ 'job_id' => 6, 'skill_id' => 7 ],
            [ 'job_id' => 7, 'skill_id' => 8 ],
            [ 'job_id' => 7, 'skill_id' => 1 ],
            [ 'job_id' => 8, 'skill_id' => 2 ],
            [ 'job_id' => 9, 'skill_id' => 3 ],
            [ 'job_id' => 9, 'skill_id' => 4 ],
            [ 'job_id' => 9, 'skill_id' => 5 ],
            [ 'job_id' => 10, 'skill_id' => 6 ],
            [ 'job_id' => 11, 'skill_id' => 7 ],
            [ 'job_id' => 11, 'skill_id' => 8 ],
            [ 'job_id' => 12, 'skill_id' => 1 ],
            [ 'job_id' => 13, 'skill_id' => 2 ],
            [ 'job_id' => 14, 'skill_id' => 3 ],
        ];

        foreach ($datas as $item) {
            JobSkillRequirement::create($item);
        }
    }
}
