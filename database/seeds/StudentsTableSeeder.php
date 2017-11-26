<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = Incubator\Specialty::get();

        factory(Incubator\Student::class, 30)->create()->each(function($student) use ($specialties) {
            $student->specialty_id = $specialties->random(1)->pluck('id')[0];
            $student->save();
        });
    }
}
