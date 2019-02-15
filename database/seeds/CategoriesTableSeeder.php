<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // création des cate 

        App\Categorie::create([
            'title' => 'Homme'
        ]);
        App\Categorie::create([
            'title' => 'Femme'
        ]);
        

    }
}
