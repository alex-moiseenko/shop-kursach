<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'            => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description'     => $faker->text($maxNbChars = 200),
        'price'           => $faker->numerify('##,00'),
        'price_with_sale' => $faker->numerify('##,00'),
        'sale'            => $faker->numerify('##'),
        'category'        => $faker->randomElement($array = ['Coats & Jackets', 'Dresses', 'Sweatshirts', 'Jeans', 'Jumpers & Cardigans', 'Shorts', 'Skirts', 'Tops', 'Accessories', 'Shoes']),
        'color'           => $faker->hexcolor,
        'sizes'           => json_encode($faker->randomElements($array = ['XS', 'S', 'M', 'L', 'XL'], $count = 3)),
        'main_img'        => $faker->imageUrl($width = 400, $height = 800, 'cats'),
        'additional_img'  => $faker->imageUrl($width = 400, $height = 800, 'cats'),
        'available'       => $faker->randomElement($array = [1, 0]),
    ];
});
