<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyProfile extends Model
{
    protected $table = '_my_profile'; 
    public $primarykey = 'id'; 

    public $timestamps = true ; 


    public function user () {

        return $this->belongsTo('App\User'); 
            }
}
