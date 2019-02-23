<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashcontroller extends Controller
{
    public function personal() {
   
        return view ('pages_inside.personal');
    }

    public function work() {
   
        return view ('pages_inside.work');
    }

    public function calorieestimation() {
   
        return view ('pages_inside.calorieestimation');
    }
    public function sleepestimation() {
   
        return view ('pages_inside.sleepestimation');
    }
    public function exerciseestimation() {
   
        return view ('pages_inside.exerciseestimation');
    }

    public function sharing() {
   
        return view ('pages_inside.sharing');
    }

    public function daily_reminder() {
   
        return view ('pages_inside.daily_reminders');
    }
    public function weekly_reminder() {
   
        return view ('pages_inside.weekly_reminder');
    }
    public function monthly_reminder() {
   
        return view ('pages_inside.monthly_reminder');
    }
    public function yearly_reminder() {
   
        return view ('pages_inside.yearly_reminder');
    }

    public function texttospeech() {
   
        return view ('pages_inside.texttospeech');
    }


}
