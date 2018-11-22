<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Option;
use App\Test;
use App\Choice;

class Question extends Model
{
	protected $fillable = [
        'test_id', 'description','marks'
    ];

    public function test(){
    	
    	return $this->belongsTo(Test::class);
    }

    public function choices(){
        
        return $this->hasMany(Choice::class);
    }
    
    
    
    
    
    
}
