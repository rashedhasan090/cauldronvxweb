<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExerciseEstimation;
use App\User; 
use DB; 

class ExerciseEstimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('exercise_estimation.index'); 
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
       

        $exerciseestimation  = new ExerciseEstimation; 
        $exerciseestimation ->gender = $request->input('gender');
        $exerciseestimation ->height = $request -> input ('height');
        $exerciseestimation ->weight = $request -> input('weight');
        $exerciseestimation  ->workhours = $request->input('workhours');
        $exerciseestimation->user_id = auth()->user()->id; 
       
       
        $exerciseestimation ->save(); 
        return redirect('/exercise_estimation/show')->with('success', 'Your Data is saved');



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
        return view('exercise_estimation.show')->with ('exerciseestimation' , $user->exerciseestimation) ;
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
