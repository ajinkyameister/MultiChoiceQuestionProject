<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Standard;
use App\Choice;
use App\Test;
use App\Institute;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name', 'role','phone_number','address','pan_card','email', 'password','mime',
       'original_filename','filename',
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

    public function institutes(){

        return $this->belongsToMany(Institute::class);
    }

    public static function getAllResellers(){

        // return $allResellers = $this->where('role','reseller')->get();

            return self::where('role','reseller')->get();
    }
    public static function getAllAdmins(){

        // return $allResellers = $this->where('role','reseller')->get();

            return self::where('role','admin')->get();
    }
    public static function getAllStudents(){

        // return $allResellers = $this->where('role','reseller')->get();

            return self::where('role','student')->get();
    }
    
}
