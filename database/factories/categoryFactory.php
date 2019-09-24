<?php

use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\User;

$factory->define(Category::class, function (Faker $faker) {
    $userIds = User::all()->pluck('id')->toArray();
    return [
        'category_name' => $faker->name,
        'description' => $faker->sentence,
        'added_by' => $faker->randomElement($userIds)
    ];
});
