<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       

        
        Module::create([
            'moduleName' => 'html'
        ]);
        Module::create([
            'moduleName' => 'css'
        ]);
        Module::create([
            'moduleName' => 'javaScript'
        ]);
        Module::create([
            'moduleName' => 'php'
        ]);
        Module::create([
            'moduleName' => 'python'
        ]);
        Module::create([
            'moduleName' => 'laravel'
        ]);
        Module::create([
            'moduleName' => 'jango'
        ]);
        Module::create([
            'moduleName' => 'Angular'
        ]);
    }
}
