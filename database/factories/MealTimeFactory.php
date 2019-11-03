<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MealTime;
use Faker\Generator as Faker;

$factory->define(MealTime::class, function (Faker $faker) {
    $meal = factory(App\Meal::class)->create();
    $timing = $faker->randomElement(array('breakfast','lunch','dinner'));
    $day = $faker->randomElement(array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'));
    return [
        'meal_id' => $meal->id,
        'time' => $timing,
        'day' => $day
    ];
});
