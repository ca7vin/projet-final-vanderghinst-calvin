<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profs')->insert([
            'subject' => '',
            'bio_short' => '',
            'bio_long' => '',
            'phone' => '',
            'skype' => '',
        ]);
        //
    }
}
