<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::create([
            'title'         => 'evenement 1',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 1

        ]);
        Event::create([
            'title'         => 'evenement 2',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 2

        ]);
        Event::create([
            'title'         => 'evenement 3',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 3

        ]);
        Event::create([
            'title'         => 'evenement 4',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 3

        ]);
        Event::create([
            'title'         => 'evenement 5',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 2

        ]);
        Event::create([
            'title'         => 'evenement 6',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 1

        ]);
        Event::create([
            'title'         => 'evenement 7',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 1

        ]);
        Event::create([
            'title'         => 'evenement 8',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, voluptatibus doloribus maxime eveniet veniam consequuntur obcaecati accusamus.',
            'media'         => 'https://via.placeholder.com/90',
            'eventDate'     => 2023_12_02,
            'user_id'       => 2

        ]);
    }
}
