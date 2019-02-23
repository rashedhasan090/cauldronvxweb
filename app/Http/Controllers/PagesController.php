<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Cauldron VX: Your Virtual Web Manager'; 
        //return view ('pages.index',  compact('title'));
        return view ('pages.index') ->with ('title', $title);  
    }

    public function About() {
        $title = 'Cauldron VX : About Us '; 
        return view ('pages.about')->with ('title', $title);
    }


    //public function reminders() {
        
//$data = array (

//'//title' => 'Cauldron VX : Set Your Reminders Here',
//'reminders' => ['Daily Reminder', 'Weekly Reminder', 'Monthly Reminder', 'Yearly Reminder', 'Set Your Own']

//);

      //  return view ('pages.reminders')->with ($data);
    //}

public function developers() {
    $title = 'Cauldron VX : Developers  '; 
    return view ('pages.developers')->with ('title', $title);
}




public function feedback() {
    $title = 'Cauldron VX : Please give us your feedback'; 
    return view ('pages.feedback')->with ('title', $title);
}






//
//public function speech() {
//    $title = 'Cauldron VX : Speech Features will be implemented on this page'; 
 //   return view ('pages.speech')->with ('title', $title);
//}
//


//public function estimations() {
   // $title = 'Cauldron VX : Users can perform different type of estimations'; 
   //// return view ('pages.estimations')->with ('title', $title);
//}



}