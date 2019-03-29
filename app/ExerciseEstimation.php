<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseEstimation extends Model
{
    protected $table = 'exerciseestimation'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 

    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
