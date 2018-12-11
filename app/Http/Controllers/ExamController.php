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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Standard $standard)
    {
       
        $standards = $standard->all();
        return view('createExam',compact('standards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Exam $exam)
    {
        // dd($request->standard_id);

        $ExamExists = Exam::where('name', '=', $request->exam_name)
                            ->where('standard_id',$request->standard_id)
                            ->get();

        

        if(count($ExamExists)<1){

            $exam->create(['name'=>$request->exam_name,
                           'standard_id' => $request->standard_id]);
        }else{

            return " test exists";
        }

        $exams = $exam->all();

        return view ('listExams',compact('exams'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
