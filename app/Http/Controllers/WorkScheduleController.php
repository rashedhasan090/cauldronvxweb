<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workschedule; 
use DB; 
class WorkScheduleController extends Controller
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
        $workschedule = new workschedule ; 
        $workschedule->weekday = $request->input('weekday');
        $workschedule->wakeuptime = $request -> input ('signintime');
        $workschedule->bfasttime = $request -> input('makereport');
        $workschedule->exercise = $request->input('filescheck');
        $workschedule->goingtowork = $request->input('meetingtoday');
        $workschedule->startworkingat = $request->input('customerservice');
        $workschedule->returnhome = $request ->input ('pendingfile');
        $workschedule->eveningactivity = $request -> input ('project');
        $workschedule->watchingtv = $request -> input ('signout'); 
        $workschedule->bedtime = $request -> input ('addown'); 
        $workschedule->save(); 

       
         return redirect()->back()->with('success', 'Your Schedule has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workschedule = Working::all()->toArray(); 

       
        return view('worksch.show' , compact('workschedule')) ; 
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
