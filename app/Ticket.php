<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets";

    /*THIS FIELDS CAN BE FILLED*/
    protected $fillable = ['name', 'lastname', 'dni', 'type', 'trackingDate', 'job', 'fax', 'cellphone', 'phone', 'employee', 'address', 'province', 'canton', 'district', 'user_id', 'promoter_id', 'visa', 'water_availability', 'conapan_certificate', 'handicapped_certificate', 'public_services', 'second_stage', 'dni_up_to_date'];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /*TICKETS AND USERS RELATIONSHIP ONE TO MANY*/

    function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    /*TICKETS AND PROMOTER RELATIONSHIP //BELONGS TO PROMOTER\\ */

    function promoter()
    {
        return $this->belongsTo('App\Promoter', 'id');
    }
}
