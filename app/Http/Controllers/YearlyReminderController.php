<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\YearlyReminder; 
use App\User; 
use DB; 

class YearlyReminderController extends Controller
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


        
        return view ('yearly_reminder.index'); 
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
        $yearlyreminder = new YearlyReminder ; 
        $yearlyreminder->whichyear = $request->input('whichyear');
        $yearlyreminder->whichmonth = $request->input('whichmonth');
        $yearlyreminder->monthday = $request -> input ('monthday');
        $yearlyreminder->yourevent = $request -> input('yourevent');
        $yearlyreminder->birthday = $request->input('birthday');
        $yearlyreminder->marrige = $request->input('marrige');
        $yearlyreminder->celebration = $request->input('celebration');
        $yearlyreminder->mourning = $request->input('mourning');
        $yearlyreminder->national = $request->input('national');
        $yearlyreminder->note = $request->input('note');
        $yearlyreminder->user_id = auth()->user()->id; 
        $yearlyreminder->save(); 

       
        return redirect('/yearly_reminder/show')->with('success', 'Your Data is saved');
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
        return view('yearly_reminder.show')->with ('yearlyreminder' , $user->yearlyreminder) ;
       
        
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
