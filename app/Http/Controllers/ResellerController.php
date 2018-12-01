<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ResellerController extends Controller
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
    public function store(Request $request, User $user)
    {
        // return "reseller controller entered";

        $user->create([
                'name'=>$request->name,
                'role'=>'reseller',
                'phone_number'=>$request->phone_number,
                'address'=>$request->address,
                'pan_card'=>$request->pan_card,
                'email'=>$request->email,
                'password'=>$request->password,


        ]);

       $users = $user->all();

       return view('listResellers',compact('users'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $resellers = $user->where('role','reseller')->get(); 

        // dd($resellers);
                 
                    $resellers = $user->getAllResellers();
        
        return view('listResellers',compact('resellers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
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
