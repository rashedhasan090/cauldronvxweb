<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyReminder extends Model
{
    protected $table = 'dailyreminder'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 
}
