<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $fillable = [
        'boarding_no','facility_type','number_of_facility'
    ];

    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
