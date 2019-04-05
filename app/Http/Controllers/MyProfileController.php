<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyProfile ; 
use App\User ; 

class MyProfileController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('myprofile.index'); 
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
    public function store(Request $request)
    {
        $_my_profile  = new MyProfile ; 
        $_my_profile->fname = $request->input('fname');
        $_my_profile->lname = $request -> input ('lname');
        $_my_profile->phone = $request -> input('phone');
        $_my_profile->address = $request->input('address');
        $_my_profile->occupation = $request->input('occupation');
        $_my_profile->Age = $request->input('Age');
        $_my_profile->user_id = auth()->user()->id; 
        $_my_profile->save(); 

       
        return redirect('/myprofile/show')->with('success', 'Your Data is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         
        $user_id = auth()->user()->id ; 
        $user = User::find($user_id); 
        return view('myprofile.show')->with ('_my_profile' , $user->_my_profile) ;
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
