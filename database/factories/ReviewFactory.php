<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use App\Model\Product;
use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'star' => $faker->numberBetween(0, 5),
        'user_id' => function () {
            return User::all()->random();
        },
        'product_id' => function () {
            return Product::all()->random();
        },
    ];
});
