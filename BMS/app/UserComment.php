<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    //
    protected $fillable = [
        'user_email','no_of_comments','no_of_blocked','blocked'
    ];
}
