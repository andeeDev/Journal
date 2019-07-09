<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Clazz;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Clazz::class, function (Faker $faker, $arr) {
    return [
        'datetime' => Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
    ];
});



