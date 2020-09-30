<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('config_types')->insert([
            [
                'name'=>'contact',
                'description'=>'liên hệ',
                'parent_id'=>null
            ],
            [
                'name'=>'qa',
                'description'=>'Q&A',
                'parent_id'=>null
            ],
            [
                'name'=>'phone',
                'description'=>'Điện thoại liên hệ',
                'parent_id'=>1
            ],
            [
                'name'=>'email',
                'description'=>'Email liên hệ',
                'parent_id'=>1
            ]
        ]);
    }
}
