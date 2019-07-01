<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Clazz;
use Faker\Generator as Faker;

$factory->define(Clazz::class, function (Faker $faker, $arr) {
    return [
//        'tch_id'=> $arr['tch_id'],
//        'ctg_id' => $arr['tch_id'],
//        'sbj_id' => $arr['tch_id']
        'date' => $faker->date()
    ];
});



