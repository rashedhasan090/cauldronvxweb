<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workschedule extends Model
{
    protected $table = 'workschedule'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
