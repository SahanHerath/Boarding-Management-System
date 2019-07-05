<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $fillable = [
        'user_email','boarding_no','rating'
    ];

    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
