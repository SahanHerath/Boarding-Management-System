<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_email','boarding_no','comment','blocked'
    ];

    public function boardings(){
        return $this->belongsTo('App\Boarding');
    }
}
