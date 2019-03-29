<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeeklyReminder extends Model
{
    protected $table = 'weeklyreminder'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
