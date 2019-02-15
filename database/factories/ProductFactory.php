<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        
            'title'=>$faker->text($maxNbChars = 20),// 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'(),
            'description'=>$faker->text($maxNbChars = 200),
            'price'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 500), // 1er chiffre totzl des chiffre et 2eme les nombre de chiffre apres la virgule
            'size'=>$faker->randomElement($array =['36','38','40','42','44','46','48','50','52']),
            'url_image'=>$faker->imageUrl($width = 300, $height = 300), // VARCHAR 100 (100 caractere max)
            'status'=>$faker->randomElement($array = ['publié', 'brouillon']),
            'code'=>$faker->randomElement($array = ['solde', 'new']),
            'reference'=>$faker->randomNumber($nbDigits = 6, $strict = false) // 79907610 
    ];
});
