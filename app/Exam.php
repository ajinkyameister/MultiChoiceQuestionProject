<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use App\Standard;

class Exam extends Model
{
	protected $fillable = [
        'standard_id', 'name',
    ];

	public function subjects(){
		
		return $this->hasMany(Subject::class);
	}
	public function standard(){
		
		return $this->belongsTo(Standard::class);
	}

	protected function checkIfExamExists($examName, $standardId){

		return Exam::where('name', '=', $examName)
                            ->where('standard_id',$standardId)
                            ->get();

	}
	 public function createIfDoesNotExist($examName,$standardId){

	 		$ExamExists = $this->checkIfExamExists($examName,$standardId);
			 
			 if(count($ExamExists)<1){

            $this->create(['name'=>$examName,
                           'standard_id' => $standardId]);

        }else{

            return " test exists";
        }
		
	}
	
	
	
}
