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
     //  $institutes = new Institute; 
      
   		// $institutes->each(function($institute){
   			
     //        factory(App\User::class,2)->create();
     //   	});
    
        DB::table('users')->insert([
                ['name' => 'Ajinkya',
                  'role'=>'superAdmin',
                  'email' => 'ajinkyameister@gmail.com',
                  'phone_number'=>'9822044092',
                  'address'=>'Pune',
                  'pan_card'=>'ABCD1234',
                  'email_verified_at' => now(),
                  'password' => Hash::make('abc'), 
                ],

                ['name' => 'Amod',
                  'role'=>'superAdmin',
                  'email' => 'amod.d.kulkarni@gmail.com',
                  'phone_number'=>'9822044092',
                  'address'=>'Pune',
                  'pan_card'=>'ABCD1234',
                  'email_verified_at' => now(),
                  'password' => Hash::make('abc'), 
                ],
       ]); 

        // factory(App\User::class,4)->create(['role'=>'reseller']);
        // factory(App\User::class,8)->create(['role'=>'admin']);
        // factory(App\User::class,100)->create(['role'=>'student']);
        
        

    }

}
