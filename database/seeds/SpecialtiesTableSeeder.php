<?php

use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = [
            ['title' => 'QA'],
            ['title' => 'iOS'],
            ['title' => 'Android'],
            ['title' => 'Frontend'],
            ['title' => 'Backend'],
        ];

        incubator\Specialty::insert($specialties);
    }
}
