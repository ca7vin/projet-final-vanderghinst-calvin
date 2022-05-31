<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #1',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #1',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 1,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #2',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #2',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 1,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #3',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #3',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 1,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #4',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #4',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 2,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #5',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #5',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 2,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #6',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #6',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 2,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #7',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #7',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 2,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #8',
            'favori' => true,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #8',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 2,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #9',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #9',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 3,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #10',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #10',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 3,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #11',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #11',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 3,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #12',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #12',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 3,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #13',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #13',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 4,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #14',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #14',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 4,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #15',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #15',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #16',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #16',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #17',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #17',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #18',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #18',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #19',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #19',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #20',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #20',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #21',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #21',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #22',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #22',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #23',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #23',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #24',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #24',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #25',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #25',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 5,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #26',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #26',
            'image' => 'courseImg.jpeg',
            'price' => 'Free',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-yellow',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #27',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #27',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #28',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #28',
            'image' => 'courseImg.jpeg',
            'price' => 'Free',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-yellow',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #29',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #29',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #30',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #30',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #31',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #31',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #32',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #32',
            'image' => 'courseImg.jpeg',
            'price' => 'Free',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-yellow',
            'prof_id' => 6,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #33',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #33',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 7,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #34',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #34',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 7,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #35',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #35',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 7,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #36',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #36',
            'image' => 'courseImg.jpeg',
            'price' => 'Free',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-yellow',
            'prof_id' => 7,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #37',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #37',
            'image' => 'courseImg.jpeg',
            'price' => 'Free',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-yellow',
            'prof_id' => 8,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #38',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #38',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 8,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #39',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #39',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 8,
        ]);
        DB::table('courses')->insert([
            // 'prof' => 'Elias Aboutt',
            'title' => 'Cours #40',
            'favori' => false,
            'status' => true,
            'description' => 'Banjo fanny pack mixtape austin meh portland fashion axe cardigan freegan 3 wolf moon. pop up viral letterpress next level ethical scenester trust funde chia. Chia tilde williamsburg etsy, craft beer banksy high life deep v fanny pack. Mlks Kickstarter Wes Anderson before they sold out. Health goth seitan hashtag, Thundercats McSweeney\'s quinoa Pitchfork Tumblr flannel. Gentrify flannel fanny pack retro.
            McSweeney\'s Carles squid, Wes Anderson pork belly post-ironic pop-up cardigan tattooed Marfa listiclete small Godard locavore plaid, mlkshk mumblecore viral Pinterest fingerstache four loko ugh Neutra banh mi food truck fap authentic. Whatever ennui McSweeney\'s forage salvia trust fund.',
            'discipline' => 'Discipline #40',
            'image' => 'courseImg.jpeg',
            'price' => '19.99 $',
            'level' => 'Post Graduate',
            'start' => '01-09-2022',
            'duration' => '6 months',
            'price_color' => 'price-red',
            'prof_id' => 8,
        ]);
        //
    }
}
