<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        for ($i = 0; $i < 100; $i++) {

        }*/
        DB::table('labels')->insert([
            'name' => 'bug',
            'color' => 'yellow'
        ]);
        DB::table('labels')->insert([
            'name' => 'feature',
            'color' => 'green'
        ]);
        DB::table('labels')->insert([
            'name' => 'urgent',
            'color' => 'red'
        ]);
    }
}
