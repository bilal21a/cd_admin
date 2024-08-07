<?php

namespace App\Http\Controllers;

use App\Application;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    use ApiResponser;
    function search_visa_status(Request $request)
    {
        $application = Application::with('vouchers', 'insurance')->where('applicant_passport_number', $request->passp)->where('applicant_ref_no', $request->apid)->first();
        if ($application) {
            return view('visa.search_visa_status', compact('application'));
        }else{
            return view('visa.no_found');
        }
    }
    function search_nizwal(Request $request)
    {
        $application = Application::with('vouchers', 'insurance', 'job')->where('applicant_passport_number', $request->passp)->where('applicant_ref_no', $request->apid)->first();
        $size = $request->size;

        if ($application) {
            return view('visa.nizwal_search.nizwal_search', compact('application','size'));
        }else{
            return view('visa.no_found');
        }
    }
}
