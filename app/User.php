<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {

        return $this->hasMany('App\Post'); 
    }
    

    public function yearlyreminder() {

        return $this->hasMany('App\YearlyReminder'); 
    }


    public function personalschedule() {

        return $this->hasMany('App\personalschedule'); 
    }


    public function workschedule() {

        return $this->hasMany('App\Working'); 
    }

    public function weeklyreminder() {

        return $this->hasMany('App\WeeklyReminder'); 
    }


    public function MonthlyReminder() {

        return $this->hasMany('App\MonthlyReminder'); 
    }


    public function SleepEstimation() {

        return $this->hasMany('App\SleepEstimation'); 
    }

    public function CalorieEstimation() {

        return $this->hasMany('App\CalorieEstimation'); 
    }


    public function dailyreminderModel() {

        return $this->hasMany('App\dailyreminderModel'); 
    }


    public function ExerciseEstimation() {

        return $this->hasMany('App\ExerciseEstimation'); 
    }


    public function UserInfo() {

        return $this->hasMany('App\UserInfo'); 
    }



    
    public function MyProfile() {

        return $this->hasMany('App\MyProfile'); 
    }
}

