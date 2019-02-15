<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Storage::disk('local')->delete(storage::allFiles());
       
       
    factory(App\Product::class,30)->create()->each(function($product){

        //genre

            // associons un genre à un livre que nous venons de créer
            $categorie = App\categorie::find(rand(1,2));
             // pour chaque $book on lui associe un genre en particulier
            $product->categorie()->associate($categorie);



        // ajout des images

            // On utilise futurama sur lorempicsum pour récupérer des images aléatoirement
            // attention il n'y en a que 9 en tout différentes

            $link = str_random(12) . '.jpg'; // donner un nom aleatoire à l'image // hash de lien pour la sécurité (injection de scripts protection)
            $file = file_get_contents('https://placeimg.com/300/300/people/grayscale');  // flux avec l'adresse des liens des photos 
            Storage::disk('local')->put($link, $file); // disque pour sauvegarder les images sur le disque local

            $product->update([
                'url_image'=> $link
            ]);


                $product->save();




    });
    }
}
