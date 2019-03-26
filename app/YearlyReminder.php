<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearlyReminder extends Model
{
    protected $table = 'yearlyreminder'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
