<?php

use App\Models\Group;
use Faker\Factory;


$factory->define(Group::class, function ($faker) {
    $faker = Faker\Factory::create('uk_UA');
    return [
        'name' => $faker->title
    ];
});



