<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création de categorie par la methode des modèles 
        // Category::create([
        //     'name' => 'Plats Africains'
        // ]);
        //Créaton d'une catégorie avec la méthode de mysql
        DB::table('categories')->insert([
            'name' => 'Plats Africains',

        ]);

        DB::table('categories')->insert([
            'name' => 'Plats Européens',
        ]);

        DB::table('categories')->insert([
            'name' => 'Plats Asiatiques',
        ]);
    }
}
