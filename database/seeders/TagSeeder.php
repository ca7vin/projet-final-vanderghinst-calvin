<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Photography',
        ]);
        DB::table('tags')->insert([
            'name' => 'Design',
        ]);
        DB::table('tags')->insert([
            'name' => 'Education',
        ]);
        DB::table('tags')->insert([
            'name' => 'Machine Learning',
        ]);
        DB::table('tags')->insert([
            'name' => 'Front-end',
        ]);
        DB::table('tags')->insert([
            'name' => 'Back-end',
        ]);
        //
    }
}
