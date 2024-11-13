<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'apoointments';

    protected $fillable = [
        'name','email','phone','doctor','message','status','user_id'
    ];
}
