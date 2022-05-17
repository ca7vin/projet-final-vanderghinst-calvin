<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('users')->insert([
            'name' => 'Calvin Van der Ghinst',
            'email' => 'ca7vin@gmail.com',
            'password' => Hash::make('mostwanted'),
            'role_id' => 1,
            // 'prof_id' => null,
        ]);
        // profs
        DB::table('users')->insert([
            'name' => 'Robert Michou',
            'email' => 'r.michou@gmail.com',
            'password' => Hash::make('r.michou@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Elias About',
            'email' => 'e.about@gmail.com',
            'password' => Hash::make('e.about@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Abderahim Cactus',
            'email' => 'a.cactus@gmail.com',
            'password' => Hash::make('a.cactus@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'Pierre Laroche',
            'email' => 'p.laroche@gmail.com',
            'password' => Hash::make('p.laroche@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'Josiane Leclercq',
            'email' => 'j.leclercq@gmail.com',
            'password' => Hash::make('j.leclercq@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'Aline Jacquet',
            'email' => 'a.jacquet@gmail.com',
            'password' => Hash::make('a.jacquet@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 6,
        ]);
        DB::table('users')->insert([
            'name' => 'Julie Toussaint',
            'email' => 'j.toussaint@gmail.com',
            'password' => Hash::make('j.toussaint@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 7,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean Thug',
            'email' => 'j.thug@gmail.com',
            'password' => Hash::make('j.thug@gmail.com'),
            'role_id' => 2,
            // 'prof_id' => 8,
        ]);
        // membres
        DB::table('users')->insert([
            'name' => 'Jean membre1',
            'email' => 'j.membre1@gmail.com',
            'password' => Hash::make('j.membre1@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre2',
            'email' => 'j.membre2@gmail.com',
            'password' => Hash::make('j.membre2@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre3',
            'email' => 'j.membre3@gmail.com',
            'password' => Hash::make('j.membre3@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre4',
            'email' => 'j.membre4@gmail.com',
            'password' => Hash::make('j.membre4@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre5',
            'email' => 'j.membre5@gmail.com',
            'password' => Hash::make('j.membre5@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre6',
            'email' => 'j.membre6@gmail.com',
            'password' => Hash::make('j.membre6@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre7',
            'email' => 'j.membre7@gmail.com',
            'password' => Hash::make('j.membre7@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre8',
            'email' => 'j.membre8@gmail.com',
            'password' => Hash::make('j.membre8@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre9',
            'email' => 'j.membre9@gmail.com',
            'password' => Hash::make('j.membre9@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
        DB::table('users')->insert([
            'name' => 'Jean membre10',
            'email' => 'j.membre10@gmail.com',
            'password' => Hash::make('j.membre10@gmail.com'),
            'role_id' => 3,
            // 'prof_id' => null,
        ]);
    }
}
