<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Post #1',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 1,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #2',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 1,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #3',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 2,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #4',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 2,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #5',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 3,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #6',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 3,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #7',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 4,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        DB::table('posts')->insert([
            'title' => 'Post #8',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque repellat aspernatur architecto sunt ipsa accusamus et sed nisi assumenda eius molestiae non inventore quisquam unde, facere accusantium dolore sit sapiente dolorem. Culpa, voluptatem at odio fugit eum ullam cumque amet corrupti iste? Qui vel officia repellendus beatae eligendi ad quis.',
            'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'image' => 'newImg.jpg',
            'redacteur_id' => 4,
            'created_at' => date("Y-m-d", strtotime('now'))
        ]);
        //
    }
}

