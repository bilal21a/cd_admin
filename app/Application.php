<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }
    public function insurance()
    {
        return $this->hasOne(Insurance::class);
    }
}
