<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Student;
use Faker\Factory;
//use Faker\Generator as Faker;

$factory->define(Student::class, function () {
    $faker = Faker\Factory::create('uk_UA');
    return [
        'name' =>  $faker->firstName,
        'surname' => $faker->lastName
    ];
});
