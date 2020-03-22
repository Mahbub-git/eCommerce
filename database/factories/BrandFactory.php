<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'brand_name' => $faker->word,
        'brand_desc' => $faker->paragraphs(3,true),
        'brand_image'=>$faker->imageUrl(500,400),
        'status'=>$faker->numberBetween(1,0)
    ];
});
