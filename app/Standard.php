<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exam;
use App\User;

class Standard extends Model
{
	protected $fillable = [
        'name',
    ];

    public function exams(){
    	
    	return $this->hasMany(Exam::class);
    }

    public function users(){
    	
    	return $this->belongsToMany(User::class);
    }
    
    
    
    
}
