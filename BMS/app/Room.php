<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'boarding_no','room_type','number_of_rooms'
    ];

    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
