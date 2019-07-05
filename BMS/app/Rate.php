<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //
    protected $table = "boarding_ratings";
    
    protected $fillable = [
        'boarding_id','rate'
    ];
}
