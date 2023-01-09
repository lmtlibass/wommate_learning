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
            'title'         => 'Debuter avec html',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => User::all()->random()->id,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'title'         => 'Debuter avec css',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => User::all()->random()->id,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'title'         => 'Debuter avec php',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => User::all()->random()->id,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'title'         => 'Debuter avec JavaScript',
            'description'   =>  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => User::all()->random()->id,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'title'         => 'Debuter avec python',
            'description'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => User::all()->random()->id,
            'module_id'     => Module::all()->random()->id,
        ]);
        Cour::create([
            'title'         => 'Debuter avec laravel',
            'description'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor itaque impedit optio dignissimos repudiandae.',
            'statut'         => true,
            'user_id'       => User::all()->random()->id,
            'module_id'     => Module::all()->random()->id,
        ]);
    }
}
