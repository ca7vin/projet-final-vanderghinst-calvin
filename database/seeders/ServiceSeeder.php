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
            'icon' => '<i class="fa fa-graduation-cap"></i>',
            'title' => 'Graduated Steps',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        DB::table('services')->insert([
            'icon' => '<i class="fa fa-globe"></i>',
            'title' => 'Global Interested',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        DB::table('services')->insert([
            'icon' => '<i class="fa fa-clock-o"></i>',
            'title' => 'Circular Clock',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        DB::table('services')->insert([
            'icon' => '<i class="fa fa-book"></i>',
            'title' => 'Open Book',
            'text' => 'Photo booth Banksy YOLO mixtape post-ironic they sold out all.',
        ]);
        //
    }
}
