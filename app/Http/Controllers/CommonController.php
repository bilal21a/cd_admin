<?php

namespace App\Http\Controllers;

use App\Job;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    use ApiResponser;

    function get_jobs()
    {
        $jobs = Job::get();
        return $this->success($jobs);
    }
}
