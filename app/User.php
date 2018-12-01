<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Standard;
use App\Choice;
use App\Test;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role','phone_number','address','pan_card','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function standards(){
        
        return $this->belongsToMany(Standard::class);
    }
    
    public function choices(){
        
        return $this->belongsToMany(Choice::class);
        
    }
    public function tests(){
        
        return $this->belongsToMany(Test::class);
    }

    public function getAllResellers(){

        return $allResellers = $this->where('role','reseller')->get();
    }
    
}
