<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SkillSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(JobSkillRequirementSeeder::class);
    }
}
