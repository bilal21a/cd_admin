<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    public function getJobImgAttribute()
    {
        return asset('storage/job_media/job_img/' . $this->attributes['job_img']);
    }
}
