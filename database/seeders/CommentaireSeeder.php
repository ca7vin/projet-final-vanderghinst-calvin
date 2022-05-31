<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            'post_id' => 1,
            'user_id' => 1,
            'content' => 'Ceci est un commentaire',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
