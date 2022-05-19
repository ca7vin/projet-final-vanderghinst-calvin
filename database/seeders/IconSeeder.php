<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'name' => 'Graduation cap',
            'icon' => '<i class="fa fa-graduation-cap"></i>',
            // 'service_id' => 1,
        ]);
        DB::table('icons')->insert([
            'name' => 'Globe',
            'icon' => '<i class="fa fa-globe"></i>',
            // 'service_id' => 2,
        ]);
        DB::table('icons')->insert([
            'name' => 'Clock',
            'icon' => '<i class="fa fa-clock-o"></i>',
            // 'service_id' => 3,
        ]);
        DB::table('icons')->insert([
            'name' => 'Book',
            'icon' => '<i class="fa fa-book"></i>',
            // 'service_id' => 4,
        ]);
        //
    }
}
