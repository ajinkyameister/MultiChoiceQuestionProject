<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function users(){
    	
    	$this->belongsToMany(User::class);
    }
    
    public function reseller(){
    	
    	return $this->users()->where('role','reseller')->get();
    }

    public function admins(){
    	
    	return $this->users()->where('role','admin')->get();
    }
    
    
    
}
