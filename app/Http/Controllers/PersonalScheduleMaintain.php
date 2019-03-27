<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personalschedule; 
use App\User; 
use DB; 

class PersonalScheduleMaintain extends Controller
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
    public function store(Request $request)
    {
       
        //create discussions cauldron vx 


        $personalschedule = new personalschedule ; 
        $personalschedule->weekday = $request->input('weekday');
        $personalschedule->wakeuptime = $request -> input ('wakeuptime');
        $personalschedule->bfasttime = $request -> input('bfasttime');
        $personalschedule->exercise = $request->input('exercise');
        $personalschedule->goingtowork = $request->input('goingtowork');
        $personalschedule->startworkingat = $request->input('startworkingat');
        $personalschedule->returnhome = $request ->input ('returnhome');
        $personalschedule->eveningactivity = $request -> input ('eveningactivity');
        $personalschedule->watchingtv = $request -> input ('watchingtv'); 
        $personalschedule->bedtime = $request -> input ('bedtime'); 
        $personalschedule->user_id = auth()->user()->id; 
        $personalschedule->save(); 

       
        return redirect('/pages_inside/show')->with('success', 'Your Data is saved');
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
        return view('pages_inside.show')->with ('personalschedule' , $user->personalschedule) ;
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
