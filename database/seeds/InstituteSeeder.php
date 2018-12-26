<?php

use Illuminate\Database\Seeder;
use App\Institute;
use App\User;

class InstituteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
         //    factory(App\Institute::class,4)->create()->each(function($institute){
         //            factory(App\User::class,1)->create([ "institute_id" => $institute->id,'role'=>'reseller']);
         //            factory(App\User::class,4)->create([ "institute_id" => $institute->id, 
         //                'role'=>'admin']);
         //            factory(App\User::class,100)->create([ "institute_id" => $institute->id,
         //                'role'=>'student']);
        	// });

        // factory(App\Institute::class,4)->create();


        factory(App\Institute::class,4)->create()->each(function ($i) {
       
        $resellers = factory(App\User::class)->create(['role'=>'reseller']);
       foreach($resellers as $reseller) $i->users()->save($reseller)


        $admins = factory(App\User::class,8)->create(['role'=>'admin']);
        foreach($admins as $admin) $i->users()->save($admin);

        $students = factory(App\User::class,50)->create(['role'=>'student']);
        foreach($students as $student) $i->users()->save($student)
            // dd($i);
    });
    }
}
