<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyReminder extends Model
{
    protected $table = 'monthlyreminder'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
