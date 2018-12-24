<?php

use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $institutes = factory(App\Institute::class,4)->create();

   		// $institutes->each(function($institute){
   			
     //        factory(App\User::class,2)->create();
     //   	});
    }
}
