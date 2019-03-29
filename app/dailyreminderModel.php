<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dailyreminderModel extends Model
{
    protected $table = 'dailyrem'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 

    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
