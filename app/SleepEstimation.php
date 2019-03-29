<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SleepEstimation extends Model
{
    protected $table = 'sleepestimation'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 

    
    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
