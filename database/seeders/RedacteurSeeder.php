<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RedacteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('redacteurs')->insert([
            'name' => 'Redacteur 1',
        ]);
        DB::table('redacteurs')->insert([
            'name' => 'Redacteur 2',
        ]);
        DB::table('redacteurs')->insert([
            'name' => 'Redacteur 3',
        ]);
        DB::table('redacteurs')->insert([
            'name' => 'Redacteur 4',
        ]);
    }
}
