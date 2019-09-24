<?php

use Faker\Generator as Faker;
use App\Models\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->name,
        'description' => $faker->sentence,
        'added_by' => $faker->uuid,
    ];
});
