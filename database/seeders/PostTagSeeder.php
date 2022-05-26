<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id' => 1,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 2,
            'tag_id' => 2,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 3,
            'tag_id' => 3,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 4,
            'tag_id' => 4,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 5,
            'tag_id' => 5,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 6,
            'tag_id' => 6,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 7,
            'tag_id' => 3,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 8,
            'tag_id' => 6,
        ]);
    }
}
