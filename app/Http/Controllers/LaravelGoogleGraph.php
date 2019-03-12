<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 


class LaravelGoogleGraph extends Controller
{
   function index() 
   {
       $data = DB::table('personalschedule')
               ->select (
                       DB::raw('id as id '),
                     DB::raw('weekday as weekday '),
                       DB::raw('wakeuptime as wakeuptime '),
                       DB::raw('bfasttime as Breakfast_Time'),
                        DB::raw('exercise as exercise'),
                         DB::raw('goingtowork as Start_Work'),
                           DB::raw('startworkingat as Start_At'),
                           DB::raw('returnhome as returnhome'),
                             DB::raw('eveningactivity as eveningactivity'),
                                DB::raw('watchingtv as watchingtv'),
                                DB::raw('bedtime as bedtime')) 
       

       ->groupBy('id')
       ->get(); 
       $array[] = ['weekday', 'wakeuptime',  'bfasttime', 'exercise', 'goingtowork', 'startworkingat', 'returnhome', 'eveningactivity', 'watchingtv', 'bedtime']; 


       foreach ($data as $key => $value )

       {
           $array[++$key] = [$value->weekday, $value->wakeuptime,$value->bfasttime, $value->exercise, $value->goingtowork, $value->startworkingat, $value->returnhome, $value->eveningactivity, $value->watchingtv, $value->bedtime  ]; 
       }
       return view ('home')-> with ('id', json_encode($array)); 
               
               }

               }