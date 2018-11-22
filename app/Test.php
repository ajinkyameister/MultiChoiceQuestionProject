<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Subject;
use App\User;

class Test extends Model
{
	protected $fillable = [
        'subject_id','name', 'default_marks', 'default_negative_marks',
    ];

    public function questions(){
    	
    	return $this->hasMany(Question::class);
    }

    public function subject(){
    	
    	return $this->belongsTo(Subject::class);
    	
    }

    public function users(){
        
        return $this->belongsToMany(User::class);
    }
    
    
    
    
    
    
}
