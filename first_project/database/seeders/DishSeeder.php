<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dishes')->insert([
            'category_id' => ''
            'name' => 'Ayimolou',
            'price' => '1500 XOF',
            'description' => 'du riz mélanger avec haricot et de la potasse rouge spécilité Togolaise',

        ]);

        DB::table('dishes')->insert([
            'name' => 'Akpan',
            'price' => '1000 XOF',
            'description' => 'préparer au Togo',


        ]);

        DB::table('dishes')->insert([
            'name' => 'Burgger',
            'price' => '2000 XOF',
            'description' => 'Spécilité Européenne fait avec du beure de la laittue et du croissant',


        ]);

        DB::table('dishes')->insert([
            'name' => 'Gauffre',
            'price' => '1000 XOF',
            'description' => 'spécilité européenne fait a base de l\'oeuf du lait et de la farine du blé',


        ]);

        DB::table('dishes')->insert([
            'name' => 'Neem',
            'price' => '4000 XOF',
            'description' => 'baigné salée entourer de galette de riz ',

        ]);

        DB::table('dishes')->insert([
            'name' => 'Ramen',
            'price' => '10000 XOF',
            'description' => 'Nouille avec la viande de porc',

        ]);
    }
}
