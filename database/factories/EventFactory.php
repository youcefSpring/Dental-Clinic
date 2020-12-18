<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
        'email' => $faker->email,
        'datetime' => new DateTime
        	($faker->randomElement($array = array('2020')).'-'.
        	$faker->month.'-'.
        	$faker->dayOfMonth.' '.
        	$faker->randomElement($array = array(
        		'09:00:00',
        		'09:30:00',
        		'10:00:00',
        		'10:30:00',
        		'11:00:00',
        		'11:30:00',
        		'12:00:00',
        		'12:30:00',
        		'13:00:00',
        		'13:30:00',
        		'14:00:00',
        		'14:30:00',
        		'15:00:00',
        		'15:30:00',
        		'16:00:00',
        		'16:30:00',
        	)))
    ];
});
