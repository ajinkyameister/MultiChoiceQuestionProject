<?php

use Faker\Generator as Faker;
use App\Institute;
use App\User;

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

	$roles = ['reseller','admin','student'];
	$selectedRole = $roles[rand(0,2)];
	    return [
	        'institute_id'=>function (){ return App\Institute::inRandomOrder()->first()->id; },
	        'name' => $faker->name,
	        'email' => $faker->unique()->safeEmail,
	        'role'=> $selectedRole,
	        'phone_number'=>random_int(0, 9),
	        'address'=>$faker->text,
	        'pan_card'=>$faker->text,
	        'email_verified_at' => now(),
	        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
	        'remember_token' => str_random(10),
    ];

	
	
});
