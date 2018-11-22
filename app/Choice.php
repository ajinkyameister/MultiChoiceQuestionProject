<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\User;

class Choice extends Model
{
   
	protected $fillable = [
        'question_id', 'value', 'answer',
    ];

    public function question(){
    	
    	return $this->belongTo(Question::class);
    	
    }
    public function users(){
    	
    	return $this->belongToMany(User::class);
    	
    }
    
    
    
    
}
