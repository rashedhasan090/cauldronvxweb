<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WeeklyReminder; 
use App\User; 
use DB; 

class WeeklyReminderController extends Controller
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
        return view ('weekly_reminder.index'); 
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
        $weeklyreminder = new WeeklyReminder ; 
        $weeklyreminder ->whichday = $request->input('whichday');
        $weeklyreminder ->workday = $request -> input ('workday');
        $weeklyreminder ->holiday = $request -> input('holiday');
        $weeklyreminder ->marrige = $request->input('marrige');
        $weeklyreminder ->celebration = $request->input('celebration');
        $weeklyreminder ->mourning = $request->input('mourning');
        $weeklyreminder ->national = $request->input('national');
        $weeklyreminder ->other = $request->input('other');
        $weeklyreminder->user_id = auth()->user()->id; 
        $weeklyreminder ->save(); 
        return redirect('/weekly_reminder/show')->with('success', 'Your Data is saved');
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
        return view('weekly_reminder.show')->with ('weeklyreminder' , $user->weeklyreminder) ;
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
