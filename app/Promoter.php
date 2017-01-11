<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    /*FIELDS THAT CAN BE FILLED*/
    protected $fillable = ['name','last_name','phone','cellphone','email'];

    function tickets(){
        return $this->hasMany('App\Ticket','id');
    }
}
