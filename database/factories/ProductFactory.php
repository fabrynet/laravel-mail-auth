<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;

use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name'        => $faker -> word,
      'short_desc'  => $faker -> sentence,
      'desc'        => $faker -> text($maxNbChars = 200),
      'price'       => $faker -> randomFloat($nbMaxDecimals = 2, $min = 1, $max = 2000),
      'qty'         => $faker -> numberBetween($min = 1, $max = 100),
      'img'         => $faker -> imageUrl($width = 200, $height = 300)
    ];
});
