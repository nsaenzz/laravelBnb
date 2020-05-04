<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Bookable::class, function (Faker $faker) {
    $suffix = [
        'Villa',
        'House',
        'Cottage',
        'Luxury Village',
        'Cheap House',
        'Rooms',
        'Cheap Rooms',
        'Luxury Rooms',
        'Fancy Rooms'
    ];

    return [
        'title'         =>  $faker->city . ' ' . Arr::random($suffix),
        'description'   =>  $faker->text(),
        'price' => random_int(15, 600)
    ];
});
