<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    //
    protected $fillable = [
        'boarding_no','charge_type','availability'
    ];

    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
