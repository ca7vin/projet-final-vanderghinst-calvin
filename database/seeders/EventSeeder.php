<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event1@gmail.com',
            'user_id' => 1,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event2@gmail.com',
            'user_id' => 2,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event3@gmail.com',
            'user_id' => 3,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #4',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event4@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #5',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #6',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event6@gmail.com',
            'user_id' => 5,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #7',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #8',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #9',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #10',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #11',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        DB::table('events')->insert([
            'start_time' => '08 may 2020 - 12:00',
            'end_time' => '08 may 2020 - 18:00',
            'title' => 'Event #12',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sit est fugit, nam quae maxime! Qui praesentium, reiciendis nulla earum nisi accusantium perspiciatis ex culpa, beatae consectetur assumenda, saepe magni! Magnam expedita, ratione accusamus quod sequi modi unde. Beatae perspiciatis quae voluptate ea voluptas soluta sunt dolor quod tempore iste possimus, voluptatem molestiae porro et ipsa, culpa non dolores alias sequi nemo magni expedita dolorum aut. Maiores, sit impedit debitis expedita accusamus culpa architecto saepe consectetur labore consequatur corporis mollitia accusantium vel nobis veritatis at? Illo deserunt eius vitae iusto debitis doloremque doloribus eum reprehenderit nam porro! Numquam tempore laboriosam, aspernatur perferendis dolor autem modi dolorum praesentium laborum ut quod explicabo non. Distinctio nulla quasi et vel vero excepturi itaque eos ducimus, similique fuga quod aspernatur blanditiis assumenda asperiores. Dolorum nostrum commodi at reprehenderit consectetur quia accusantium, deserunt facilis cupiditate quasi voluptate quos laudantium nemo odit nobis eos saepe id officiis in quisquam eveniet. Ex fugiat minus quos beatae vero consectetur architecto aspernatur, totam numquam porro molestias. ',
            'image1' => 'event1.jpg',
            'image2' => 'event2.jpg',
            'image3' => 'event3.jpg',
            'phone' => '+32 488 88 88 88',
            'email' => 'event5@gmail.com',
            'user_id' => 4,
        ]);
        //
    }
}
