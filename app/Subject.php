<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test;
use App\Exam;

class Subject extends Model
{

	protected $fillable = [
        'exam_id', 'name',
    ];

    public function tests(){
    	
    	return $this->hasMany(Test::class);
    }

    public function exam(){
    	
    	return $this->belongsTo(Exam::class);
    }
    
    
    
}
