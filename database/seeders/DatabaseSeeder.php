<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategorieSeeder::class,
            TagSeeder::class,
            RedacteurSeeder::class,
            ProfSeeder::class,
            RoleSeeder::class,
            ServiceSeeder::class,
            SliderSeeder::class,
            CourseSeeder::class,
            CategorieCourseSeeder::class,
            PostSeeder::class,
            CategoriePostSeeder::class,
            PostTagSeeder::class,
            UserSeeder::class,
            EventSeeder::class,
            CategorieEventSeeder::class,
            IconSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
