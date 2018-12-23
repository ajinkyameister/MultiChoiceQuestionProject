<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    protected $fillable=['name',];

    public function users(){
    	
    	$this->belongsToMany(User::class);
    }
    
    public function reseller(){
    	
    	return $this->users()->where('role','reseller')->get();
    }

    public function admins(){
    	
    	return $this->users()->where('role','admin')->get();
    }

    public static function getAllInstitutes(){

        return $allInstitutes = self::all();
    }

    public function updateInstitute($Institute_name){
        $this->update(['name'=>$Institute_name]);

    }
    
    
    
}
