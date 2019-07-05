<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boarding extends Model
{
    //
    protected $fillable = [
        'address_of_boarding', 'accomadation_type', 'available_for','number_of_boarders','rent','security_cam_available','near_to','id','rules','available'
    ];

    public function rooms(){
        return $this->hasmany('App\Room');
    }

    public function facilities(){
        return $this->hasmany('App\Facility');
    }

    public function charges(){
        return $this->hasmany('App\Charge');
    }

    public function pictues(){
        return $this->hasmany('App\Picture');
    }

    public function users(){
        return $turn->belongsTo('App\User');
    }

    public function comments(){
        return $this->belongsTo('App\Comment');
    }

    public function complain(){
        return $this->belongsTo('App\Complain');
    }

    public function rating(){
        return $this->belongsTo('App\Rating');
    }
}
