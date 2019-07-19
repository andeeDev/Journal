<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Point;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Point::class, function (Faker $faker) {
    return [
        //'updated_at' => Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 month', '0 month')->getTimestamp())
    ];
});
