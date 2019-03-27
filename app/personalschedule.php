<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalschedule extends Model
{
    protected $table = 'personalschedule'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 

    

    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
