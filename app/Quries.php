<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quries extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'department', 'msg',
    ];
}
