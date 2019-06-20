<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


//use Faker\Generator as Faker;
use App\Models\Teacher;
use Faker\Factory;

$factory->define(Teacher::class, function () {
    $faker = Faker\Factory::create('uk_UA');
    return [
//        'id'=> factory('App\Teacher')->create()->id,
         // create Russian
        'name'=> $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstName
    ];
});

