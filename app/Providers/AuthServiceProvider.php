<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('crud-reseller', function ($user,$reseller) {
            // if ($user->id==$reseller->id){
            //     return $user->id ==  $reseller->id;
            // }
            if($user->role ==='superAdmin'){           
                    return $user->id ;
            }
        });


        Gate::define('view-resellers', function ($user) {       
          return $user->role ===  'superAdmin';
        });

    }
}
