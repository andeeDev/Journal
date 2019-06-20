<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Clazz;
//use Faker\Generator as Faker;

$factory->define(Clazz::class, function ($faker, $arr) {
    return [
        'tch_id'=> $arr['tch_id']
    ];
});



