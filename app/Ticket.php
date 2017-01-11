<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    protected $table = "tickets";

    /*THIS FIELDS CAN BE FILLED*/
    protected $fillable = ['name', 'lastname', 'dni', 'type', 'trackingDate','job','fax','cellphone','phone','employee','address','province','canton','district','user_id','promoter_id'];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /*TICKETS AND USERS RELATIONSHIP ONE TO MANY*/

    function user(){
        return $this->belongsTo('App\User', 'id');
    }
    
    /*TICKETS AND PROMOTER RELATIONSHIP //BELONGS TO PROMOTER\\ */

    function promoter(){
        return $this->belongsTo('App\Promoter', 'id');
    }
}
