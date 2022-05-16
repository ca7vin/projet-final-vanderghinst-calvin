<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icon' => 'fa fa-graduation-cap',
            'title' => 'Graduated Steps',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        DB::table('services')->insert([
            'icon' => 'fa fa-globe',
            'title' => 'Global Interested',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        DB::table('services')->insert([
            'icon' => 'fa fa-clock-o',
            'title' => 'Circular Clock',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        DB::table('services')->insert([
            'icon' => 'fa fa-book',
            'title' => 'Open Book',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        //
    }
}
