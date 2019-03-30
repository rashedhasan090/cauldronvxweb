<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'userinfo'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
