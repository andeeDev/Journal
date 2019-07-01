<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Group;
use Faker\Factory;


$factory->define(Group::class, function () {
    $faker = Factory::create('uk_UA');
    $letters = ['ІН'];
    return [
        'name' =>  $letters[0] . '-' . $faker->numberBetween(41,99)
    ];
});
