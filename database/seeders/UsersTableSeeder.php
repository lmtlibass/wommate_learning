<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //create roles
       $adminRole = Role::create(['name' => 'admin']);
       $createurRole = Role::create(['name' => 'createur']);
       $utilisateurRole = Role::create(['name' => 'utilisateur']);

       //create users
       $admin = User::create([
        'first_name'    => 'libasse',
        'last_name'     => 'thiam',
        'username'      => 'admin',
        'email'         => 'admin@wommate.com',
        'password'      => Hash::make('Passer1323'),
        'password_confirmation'      => Hash::make('Passer1323')
    ]);

    $createur = User::create([
        'first_name'    => 'papa lo',
        'last_name'     => 'drame',
        'username'      => 'createur',
        'email'         => 'dramepapa@wommate.com',
        'password'      => Hash::make('Passer1323'),
        'password_confirmation'      => Hash::make('Passer1323')
    ]);

    $utilisateur = User::create([
        'first_name'    => 'gora',
        'last_name'     => 'ba',
        'username'      => 'utilisateur',
        'email'         => 'bagora@wommate.com',
        'password'      => Hash::make('Passer1323'),
        'password_confirmation'      => Hash::make('Passer1323')
    ]);

    //attach roles to users
    $admin->roles()->sync([$adminRole->id]);
    $createur->roles()->sync([$createurRole->id]);
    $utilisateur->roles()->sync([$utilisateurRole->id]);

       
    }
}
