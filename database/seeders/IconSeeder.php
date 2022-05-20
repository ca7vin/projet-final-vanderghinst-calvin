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
        ]);
        DB::table('icons')->insert([
            'name' => 'Globe',
            'icon' => '<i class="fa fa-globe"></i>',
        ]);
        DB::table('icons')->insert([
            'name' => 'Clock',
            'icon' => '<i class="fa fa-clock-o"></i>',
        ]);
        DB::table('icons')->insert([
            'name' => 'Book',
            'icon' => '<i class="fa fa-book"></i>',
        ]);
        DB::table('icons')->insert([
            'name' => 'Database',
            'icon' => '<i class="fa fa-database"></i>',
        ]);
        DB::table('icons')->insert([
            'name' => 'Hourglass',
            'icon' => '<i class="fa fa-building"></i>',
        ]);
        DB::table('icons')->insert([
            'name' => 'Gear',
            'icon' => '<i class="fa fa-thumbs-up"></i>',
        ]);
        DB::table('icons')->insert([
            'name' => 'Chart',
            'icon' => '<i class="fa fa-line-chart"></i>',
        ]);
        //
    }
}
