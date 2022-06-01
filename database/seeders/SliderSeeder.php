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
            'first' => true,
            'image' => 'wallpapercontact.jpg',
            'title' => 'Are you ready to study ? // We have the',
            'text' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod // ornare. Nam congue nisi purus, sed luctus risus.',
            'textorange' => 'Solution',
            'btntext' => 'Buy now',
            'btnlink' => '#',
        ]);
        DB::table('sliders')->insert([
            'first' => false,
            'image' => 'wallpaperevents.jpg',
            'title' => 'Next year more intresting! // Check next',
            'text' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod // ornare. Nam congue nisi purus, sed luctus risus.',
            'textorange' => 'Features',
            'btntext' => 'Buy now',
            'btnlink' => '#',
        ]);
        //
    }
}
