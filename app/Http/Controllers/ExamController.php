<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standard;
use App\Exam;

class ExamController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Standard $standard, Exam $exam)
    {
        $exams = $exam->all();
        $standards = $standard->all();
        return view('listExams',compact('standards','exams')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Standard $standard, Exam $exam)
    {
       
       
        return view('createExam',compact('standard','exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Exam $exam, Standard $standard)
    {
        // $standards = $standard->all();
        // $exams = $exam->all();

        $exam->createIfDoesNotExist($request->exam_name,$request->standard_id);
               
        $exams = $exam->where('standard_id',$request->standard_id)->get();

        $standardName = $standard->where('id',$request->standard_id)->pluck('name');
     
        return redirect('exams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Exam $exam, Standard $standard)
    {
        
        // $standardId = $standard->where('name',$request->name)->pluck('id');
       
        // $exams = $exam->where('standard_id',$standardId)->get();

        $exams = $exam->all();
        return view ('listExams',compact('exams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // protected function showExamsUnderTheStandard(Exam $exam, Standard $standard){

    //     $exams = $exam->where('standard_id',$request->standard_id)->get();

    //     $standardName = $standard->where('id',$request->standard_id)->pluck('name');
    
    //     $standards = $standard->all();

    // }
}
