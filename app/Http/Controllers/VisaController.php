<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisaController extends Controller
{
    use ApiResponser;

    function search_visa_status(Request $request)
    {
        $application =Application::with('vouchers','insurance')->where('applicant_passport_number',$request->passp)->where('applicant_ref_no',$request->apid)->first();
        // dd($application->vouchers);
        return view('visa.search_visa_status',compact('application'));
    }
}
