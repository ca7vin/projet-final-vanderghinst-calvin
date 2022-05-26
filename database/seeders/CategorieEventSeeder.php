<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_event')->insert([
            'event_id' => 1,
            'categorie_id' => 1,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 2,
            'categorie_id' => 2,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 3,
            'categorie_id' => 3,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 4,
            'categorie_id' => 4,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 5,
            'categorie_id' => 5,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 6,
            'categorie_id' => 6,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 7,
            'categorie_id' => 1,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 8,
            'categorie_id' => 2,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 9,
            'categorie_id' => 3,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 10,
            'categorie_id' => 4,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 11,
            'categorie_id' => 5,
        ]);
        DB::table('categorie_event')->insert([
            'event_id' => 12,
            'categorie_id' => 6,
        ]);
    }
}
