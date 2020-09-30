<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('configs')->insert([
            [
                'name' => 'phone 1',
                'title' => 'phone 1',
                'value'=> '+84 357 1357',
                'description' => null,
                'config_type_id' => 3
            ],
            [
                'name' => 'phone 2',
                'title' => 'phone 2',
                'value'=> '+84 789 6789',
                'description' => null,
                'config_type_id' => 3
            ],
            [
                'name' => 'email',
                'title' => 'email',
                'value'=> 'support@gmail.com',
                'description' => null,
                'config_type_id' => 4
            ]
        ]);
    }
}
