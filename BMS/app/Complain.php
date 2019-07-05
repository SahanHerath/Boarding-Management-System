<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    //
    protected $fillable = [
        'user_email','boarding_no','complain_about','complain','state'
    ];

    
    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
