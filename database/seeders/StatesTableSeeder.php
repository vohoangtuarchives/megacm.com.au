<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('country_states')->delete();

        $states = json_decode(file_get_contents(resource_path('data/states.json')), true);

        DB::table('country_states')->insert($states);
    }
}