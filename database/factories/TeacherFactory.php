<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


//use Faker\Generator as Faker;
use App\Models\Teacher;


$factory->define(Teacher::class, function () {
    $faker = Faker\Factory::create('uk_UA');
    return [
        'name'=> $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstName
    ];
});

