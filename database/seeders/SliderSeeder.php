<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'first' => 'first',
            'image' => 'wallpaper1.jpeg',
            'title' => 'Are you ready to study ?<br>We have the',
            'text' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
            'textorange' => 'Solution',
            'btntext' => 'Buy now',
            'btnlink' => '#',
        ]);
        DB::table('sliders')->insert([
            'first' => 'second',
            'image' => 'wallpaper2.png',
            'title' => 'Next year more intresting!<br>Check next',
            'text' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
            'textorange' => 'Features',
            'btntext' => 'Buy now',
            'btnlink' => '#',
        ]);
        //
    }
}
