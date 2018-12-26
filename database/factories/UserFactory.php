<?php

use Faker\Generator as Faker;
use App\Institute;
use App\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

	return [	      
	        'name' => $faker->name,
	        'role'=>'default',
	        'email' => $faker->unique()->safeEmail,
	        'phone_number'=>$faker->phoneNumber,
	        'address'=>$faker->address,
	        'pan_card'=>$faker->swiftBicNumber,
	        'email_verified_at' => now(),
	        'password' => Hash::make('abc'), // secret
	        // 'remember_token' => str_random(10),
    ];

	
	
});
