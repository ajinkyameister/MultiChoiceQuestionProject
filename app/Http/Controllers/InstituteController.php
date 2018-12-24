<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Institute;
use App\User;

class InstituteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(User $user)
     {
        $institutes = Institute::getAllInstitutes();
        return view('listInstitutes',compact('institutes','user'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createInstitute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Institute $institute)
    {
    	
        $instituteExists = Institute::where('name', '=', $request->name)->get();

    	
    	if(count($instituteExists)<1){


    		$institute->create(['name'=>$request->name,]);

        }

    	return redirect('/institutes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {

        $institutes = $institute->getAllInstitutes();
    	
        return view('listInstitutes',compact('institutes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
    	return view('modifyInstitute',compact('institute'));      
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
     
        $institute->updateInstitute($request->name);

        return redirect('/institutes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
