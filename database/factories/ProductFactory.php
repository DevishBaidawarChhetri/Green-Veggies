<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'productName' => $faker->sentence,
        'productDescription' => $faker->paragraph,
        'orginalPrice' => '1234',
        'discountedPrice' => '937',
        'discountRate' => '24',
        'categories' => 'vegetables',
        'productImage' => 'default.jpg',
        'productOwnerId' => '1'
    ];
});
