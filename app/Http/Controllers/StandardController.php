<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standard;

class StandardController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Standard $standard)
    {
        

         $StandardExists = Standard::where('name', '=', $request->name)->get();

        
        if(count($StandardExists)<1){


            $standard->create(['name'=>$request->name,]);

        }

        $standards = $standard->all();

        return view ('listStandards',compact('standards'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Standard $standard)
    {
        // $standards = $standard->getAllInstitutes();

        $standards = $standard->all();
        return view('listStandards',compact('standards'));

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
    public function update(Request $request, Standard $standard)
    {
        $standard->where('id',$request->id)->update(['name'=>$request->name]);

        $standards = $standard->all();

        return view('listStandards',compact('standards'));
       
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
