<?php

namespace App\Http\Controllers;

use App\Job;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\DB;

class VisaController extends Controller
{
    use ApiResponser;

    function search_visa_status()
    {
        return view('visa.search_visa_status');
    }
}
