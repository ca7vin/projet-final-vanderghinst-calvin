<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Design',
        ]);
        DB::table('categories')->insert([
            'name' => 'International',
        ]);
        DB::table('categories')->insert([
            'name' => 'Reading',
        ]);
        DB::table('categories')->insert([
            'name' => 'Learning',
        ]);
        DB::table('categories')->insert([
            'name' => 'Education',
        ]);
        DB::table('categories')->insert([
            'name' => 'Finance',
        ]);
        //
    }
}
