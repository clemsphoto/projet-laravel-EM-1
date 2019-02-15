<?php

use Faker\Generator as Faker;

$factory->define(App\Categorie::class, function (Faker $faker) {
    return [
        'title'=>$faker->text($maxNbChars = 30),// 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'(),
        'description'=>$faker->paragraph()
    ];
});
