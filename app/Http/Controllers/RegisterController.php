<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            "applicant_name" => "required|string|max:255",
            "applicant_email" => "required|email|max:255",
            "applicant_address" => "required|string|max:255",
            "applicant_passport_number" => "required|string|max:50",
            "applicant_image" => "required|string|max:255",
            "applicant_dob" => "required|date",
            "job_id" => "required|integer",
            // "job_id" => "required|integer|exists:jobs,id",
            // "applicant_uci" => "required|string|max:50",
            // "applicant_ref_no" => "required|string|max:50",
            // "applicant_tracking_no" => "required|string|max:50",
            // "applicant_due_date" => "required|date",
            //  "applicant_payment_status" => "required|boolean",
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $applicant_uci = rand(100000, 999999); // Adjust the range as needed
        $applicant_ref_no = rand(100000, 999999); // Adjust the range as needed
        $applicant_tracking_no = rand(100000, 999999); // Adjust the range as needed

        // Create a new Application instance and set its properties
        $register = new Application();
        $register->applicant_name = $request->applicant_name;
        $register->applicant_email = $request->applicant_email;
        $register->applicant_address = $request->applicant_address;
        $register->applicant_passport_number = $request->applicant_passport_number;
        $register->applicant_image = $request->applicant_image;
        $register->applicant_dob = $request->applicant_dob;
        $register->job_id = $request->job_id;
        // $register->applicant_due_date = \p$request->applicant_due_date;
        $register->applicant_payment_status = 0;
        $register->applicant_uci = $applicant_uci;
        $register->applicant_ref_no = $applicant_ref_no;
        $register->applicant_tracking_no = $applicant_tracking_no;

        // Save the application to the database
        $register->save();

        // Return a success response
        return response()->json(['message' => 'Application created successfully'], 201);
        dd($request->all());


    }
}
