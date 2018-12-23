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
        // $resellers = $user->where('role','reseller')->get(); 

            
        // $resellers = $user->getAllResellers();

        // $user = new User;
        // doing "index(User $user) or $user = new User creates an object and if "User" has any dependencies need to be resolved, which increases processing time and memory is wasted.
        // Creating Static method directly calls a method from the Model hence dependecies need not be resolved, hence faster and more efficient.

        $resellers = User::getallResellers();
        
        return view('listResellers',compact('resellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd("ajinkya");
        return view('createReseller');
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
                'pan_card'=>$request-ac>pan_card,
                'email'=>$request->email,
                'password'=>$request->password,


        ]);

       $users = $user->all();

       return view('listResellers',compact('users'));

       // return redirect('/resellers/show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd("inside SHOW METHOD as recommended by Amod Kulkarni");
        return view('showReseller',compact('user'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('modifyResellerForm',compact('user'));

        // return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
    
        // dd($user->id);  
         $user->update(['name'=>$request->name,
                        'address'=>$request->address,
                        'phone_number'=>$request->phone_number,
                        'email'=>$request->email,
                        'pan_card'=>$request->pan_card,
                         ]);

        // $resellers= $user->where('role's,'reseller')->get();

       return redirect("/resellers");
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reseller  $reseller
     * @return \Illuminate\Https\Response
     */
    public function destroy(User $user)
    {
        dd("inside DELETE METHOD ");
    }
}
