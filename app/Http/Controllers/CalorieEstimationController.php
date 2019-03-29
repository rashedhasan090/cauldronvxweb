<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalorieEstimation;
use App\User;
use DB; 


class CalorieEstimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('calorie_estimation.index'); 
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
        

        $calorieestimation  = new CalorieEstimation; 
        $calorieestimation->sleephours = $request->input('sleephours');
        $calorieestimation->gender = $request -> input ('gender');
        $calorieestimation->activeworkhours = $request -> input('activeworkhours');
        $calorieestimation->waterliter = $request->input('waterliter');
        $calorieestimation->exercisehours = $request->input('exercisehours');
        $calorieestimation->medicine = $request->input('medicine');
        $calorieestimation->user_id = auth()->user()->id;
       
        $calorieestimation->save(); 
        return redirect('/calorie_estimation/show')->with('success', 'Your Data is saved');





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
        return view('calorie_estimation.show')->with ('calorieestimation' , $user->calorieestimation) ;


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
