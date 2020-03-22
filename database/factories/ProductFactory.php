<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,3),
        'product_name' => $faker->word,
        'cat_id'=>$faker->numberBetween(1,10),
        'brand_id'=>$faker->numberBetween(2,8),
        'short_desc'=>$faker->sentence,
        'long_desc'=>$faker->paragraphs(3,true),
        'discount_price'=>$faker->randomNumber(4,false),
        'product_price'=>$faker->randomNumber(4,false),
        'product_qty'=>$faker->randomDigit,
        'product_size'=>$faker->randomElement(array('xl','l','m','s')),
        'product_image'=>$faker->imageUrl(500,400),
        'multiple_image'=>$faker->imageUrl(500,400),
        'status'=>$faker->numberBetween(1,0)
    ];
});
