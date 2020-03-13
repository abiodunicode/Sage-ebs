<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipschedule extends Model
{
    //
    protected $fillable =[
        'vessel_name',
        'vessel_voyage',
        'vessel_line',
        'vessel_status',
        'vessel_port',
        'vessel_terminal',
        'vessel_arrival_date',
        'vessel_berthing_time',
        'vessel_departure_time',
        


    ];
}
