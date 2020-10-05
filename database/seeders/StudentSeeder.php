<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'name'=>'Nguyễn Văn A'
            ],
            [
                'name'=>'Nguyễn Văn B'
            ],
            [
                'name'=>'Nguyễn Văn C'
            ],
            [
                'name'=>'Nguyễn Văn D'
            ],
            [
                'name'=>'Nguyễn Văn E'
            ],
        ]);
    }
}
