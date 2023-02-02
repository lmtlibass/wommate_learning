<?php

namespace Database\Seeders;

use App\Models\Cour;
use App\Models\User;
use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        

        Cour::create([
            'media'         => 'img/formation.jpg',
            'title'         => 'Debuter avec html',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => 1,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'media'         => 'img/formation.jpg',
            'title'         => 'Debuter avec css',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => 1,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'media'         => 'img/formation.jpg',
            'title'         => 'Debuter avec php',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => 1,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'media'         => 'img/formation.jpg',
            'title'         => 'Debuter avec JavaScript',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => 1,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'media'         => 'img/formation.jpg',
            'title'         => 'Debuter avec python',
            'description'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => 1,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'media'         => 'img/formation.jpg',
            'title'         => 'Debuter avec laravel',
            'description'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => 1,
            'module_id'     => Module::all()->random()->id,
        ]);
    }
}
