<?php

use App\Institute;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $institutes = new Institute; 
      
   		$institutes->each(function($institute){
   			
            factory(App\User::class,2)->create();
       	});
    }
}
