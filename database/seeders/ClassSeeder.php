<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('classes')->insert([
            [
                'name'=>'math'
            ],
            [
                'name'=>'geography'
            ],
            [
                'name'=>'biology'
            ]
        ]);
    }
}
