<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonthlyReminder ; 
use App\User ; 
class monthlyReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('monthly_rem.index'); 
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
        $monthlyreminder = new MonthlyReminder ; 
        $monthlyreminder->whichmonth = $request->input('whichmonth');
        $monthlyreminder->monthday = $request -> input ('monthday');
        $monthlyreminder->yourevent = $request -> input('yourevent');
        $monthlyreminder->relatedtowork = $request->input('relatedtowork');
        $monthlyreminder->note = $request->input('note');
        $monthlyreminder->user_id = auth()->user()->id; 
        $monthlyreminder->save(); 

       
        return redirect('/monthly_rem/show')->with('success', 'Your Data is saved');
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
        return view('monthly_rem.show')->with ('monthlyreminder' , $user->monthlyreminder) ;
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
