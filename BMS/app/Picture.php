<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $fillable = [
        'boarding_id','picture','main_pic'
    ];

    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
