<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    protected $fillable = ['name', 'last_name', 'main_contact', 'civil_status', 'address', 'province', 'canton', 'district'];
}
