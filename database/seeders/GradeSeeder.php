<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grades')->insert([
            [
                'blok' => 1,
                'EC' => 2.5,
                'course_name' => 'Program & Career Orientation',
                'best_grade' => 6.7
            ],
            [
                'blok' => 1,
                'EC' => 7.5,
                'course_name' => 'Computer science basics',
                'best_grade' => 6.4
            ],
            [
                'blok' => 1,
                'EC' => 5,
                'course_name' => 'Programming Basics',
                'best_grade' => 9.0
            ],
            [
                'blok' => 2,
                'EC' => 10,
                'course_name' => 'Objected-oriented programming',
                'best_grade' => 7.0
            ],
            [
                'blok' => 2,
                'EC' => 2.5,
                'course_name' => 'Professional Skills 1',
                'best_grade' => 5.4
            ]
        ]);
    }
}
