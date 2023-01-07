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
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'first_name'    => 'libasse',
            'last_name'     => 'thiam',
            'username'      => 'admin',
            'email'         => 'admin@wommate.com',
            'password'      => Hash::make('Passer1323')
        ]);
        $createur = User::create([
            'first_name'    => 'papa lo',
            'last_name'     => 'drame',
            'username'      => 'createur',
            'email'         => 'dramepapa@wommate.com',
            'password'      => Hash::make('Passer1323')
        ]);
        $utilisateur = User::create([
            'first_name'    => 'gora',
            'last_name'     => 'ba',
            'username'      => 'utilisateur',
            'email'         => 'bagora@wommate.com',
            'password'      => Hash::make('Passer1323')
        ]);

        $adminRole          =  Role::where('name', 'admin')->first();
        $createurRole       =  Role::where('name', 'createur')->first();
        $utilisateurRole    =  Role::where('name', 'utilisateur')->first();


        $admin->roles()->attach($adminRole);
        $createur->roles()->attach($createurRole);
        $utilisateur->roles()->attach($utilisateurRole);

    }
}
