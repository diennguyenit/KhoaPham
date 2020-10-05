<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('student_class')->insert([
            [
                'student_id' => 1,
                'class_id' => 1
            ],
            [
                'student_id' => 2,
                'class_id' => 1
            ],
            [
                'student_id' => 3,
                'class_id' => 1
            ],
            [
                'student_id' => 1,
                'class_id' => 2
            ],
            [
                'student_id' => 2,
                'class_id' => 2
            ],
            [
                'student_id' => 1,
                'class_id' => 3
            ],
            [
                'student_id' => 1,
                'class_id' => 3
            ],
            [
                'student_id' => 4,
                'class_id' => 2
            ],
            [
                'student_id' => 5,
                'class_id' => 3
            ]
        ]);
    }
}
