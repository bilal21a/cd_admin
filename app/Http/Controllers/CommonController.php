<?php

namespace App\Http\Controllers;

use App\Job;
use App\Quries;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    use ApiResponser;

    function get_jobs()
    {
        $jobs = Job::get();
        return $this->success($jobs);
    }
    function contact_us(Request $request)
    {
        $validated = $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'YourEmail' => 'required|email|max:255',
            'PhoneNumber' => 'required|string|max:20',
            'department' => 'required|string|max:255',
            'msg' => 'required|string',
        ]);

        $query = Quries::create([
            'fname' => $validated['FirstName'],
            'lname' => $validated['LastName'],
            'email' => $validated['YourEmail'],
            'phone' => $validated['PhoneNumber'],
            'department' => $validated['department'],
            'msg' => $validated['msg'],
        ]);

        return 'Review Sent to ADMIN';
    }
}
