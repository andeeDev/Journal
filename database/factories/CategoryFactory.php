<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
//use Faker\Generator as Faker;

$factory->define(Category::class, function ($faker, $array) {
    return [
        'name' => $array['name']

    ];
});
