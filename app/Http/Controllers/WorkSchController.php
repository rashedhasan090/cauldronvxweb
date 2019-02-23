<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Working; 
use DB; 

class WorkSchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('worksch.index'); 
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
        $workschedule = new Working ; 
        $workschedule->weekday = $request->input('weekday');
        $workschedule->signintime = $request -> input ('signintime');
        $workschedule->makereport = $request -> input('makereport');
        $workschedule->filescheck = $request->input('filescheck');
        $workschedule->meetingtoday = $request->input('meetingtoday');
        $workschedule->customerservice = $request->input('customerservice');
        $workschedule->pendingfile = $request ->input ('pendingfile');
        $workschedule->project = $request -> input ('project');
        $workschedule->signout = $request -> input ('signout'); 
        $workschedule->addown = $request -> input ('addown'); 
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
