<?php

namespace Database\Seeders;

use App\Models\Chapitre;
use App\Models\Cour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapitreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       

        Chapitre::create([
            'title'         => 'Structure de base d\'un code html',
            'number'        => 1,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/u5W2NWItytc?list=PLrSOXFDHBtfE5tpw0bjMevWxMWXotiSdO',
            'cour_id'       => 1,
        ]);
        Chapitre::create([
            'title'         => 'Fonctionnement des balises',
            'number'        => 2,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/1sPjNkKGMsY?list=PLrSOXFDHBtfE5tpw0bjMevWxMWXotiSdO',
            'cour_id'       => 1,
        ]);
        Chapitre::create([
            'title'         => 'Formatage de texte',
            'number'        => 3,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/w2knKi0ZQps?list=PLrSOXFDHBtfE5tpw0bjMevWxMWXotiSdO',
            'cour_id'       => 1,
        ]);
        Chapitre::create([
            'title'         => 'Formulaires',
            'number'        => 4,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/zmJ2rHL5UfM?list=PLrSOXFDHBtfE5tpw0bjMevWxMWXotiSdO',
            'cour_id'       => 1,
        ]);
        Chapitre::create([
            'title'         => 'Les tableaux',
            'number'        => 5,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/9GWjxAcGzVQ?list=PLrSOXFDHBtfE5tpw0bjMevWxMWXotiSdO',
            'cour_id'       => 1,
        ]);


        //chapitres du cours 2

        Chapitre::create([
            'title'         => 'Structure de base d\'un code css',
            'number'        => 1,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/PE8FQ6zihhw?list=PLjwdMgw5TTLVjTZQocrMwKicV5wsZlRpj',
            'cour_id'       => 2,
        ]);
        Chapitre::create([
            'title'         => 'Fonctionnement des selecteurs',
            'number'        => 2,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/OV0bOifr8AE?list=PLjwdMgw5TTLVjTZQocrMwKicV5wsZlRpj',
            'cour_id'       => 2,
        ]);
        Chapitre::create([
            'title'         => 'Les psoeudo classes',
            'number'        => 3,
            'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquam temporibus quia reiciendis harum alias placeat, dolor amet, iste nisi accusamus pariatur?',
            'content'       => 'https://youtu.be/k1ID41O4FNM?list=PLjwdMgw5TTLVjTZQocrMwKicV5wsZlRpj',
            'cour_id'       => 2,
        ]);
    }
}
