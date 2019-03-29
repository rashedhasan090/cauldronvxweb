<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalorieEstimation extends Model
{
    protected $table = 'calorieestimation'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
