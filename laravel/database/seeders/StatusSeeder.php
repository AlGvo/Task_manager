<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'to do'
        ]);
        DB::table('statuses')->insert([
            'name' => 'in progres'
        ]);
        DB::table('statuses')->insert([
            'name' => 'done'
        ]);
    }
}
