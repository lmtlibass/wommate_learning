<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CourTableSeeder;
use Database\Seeders\EventTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\ModuleTableSeeder;
use Database\Seeders\ChapitreTableSeeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(CourTableSeeder::class);
        $this->call(ChapitreTableSeeder::class);
        $this->call(EventTableSeeder::class);
    }
}
