<?php

namespace App\Http\Controllers;

use App\Application;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use ApiResponser;
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "applicant_image" => "required",
            "applicant_name" => "required|string|max:255",
            "applicant_mobile" => "required",
            "applicant_email" => "required|email|max:255",
            "applicant_address" => "required|string|max:255",
            "applicant_passport_number" => "required|string|max:50",
            "applicant_image" => "required",
            "applicant_dob" => "required",
            "job_id" => "required|integer",
            "passport_image" => "required",
            "applicant_country" => "required",
            "applicant_gender" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $applicant_uci = rand(100000, 999999);
        $applicant_ref_no = rand(100000, 999999);
        $applicant_tracking_no = rand(100000, 999999);
        $register = new Application();
        $register->applicant_name = $request->applicant_name;
        $register->applicant_email = $request->applicant_email;
        $register->applicant_phone = $request->applicant_mobile;
        $register->applicant_address = $request->applicant_address;
        $register->applicant_country = $request->applicant_country;
        $register->applicant_gender = $request->applicant_gender;
        $register->applicant_passport_number = $request->applicant_passport_number;
        if ($request->hasFile('applicant_image')) {
            $file = $request->file('applicant_image');
            $filename = 'content_applicant_image_' . rand() . '.' . $file->getClientOriginalExtension();
            $register->applicant_image = $filename;
            $file->storeAs('public/content/applicant_image/', $filename);
        }
        if ($request->hasFile('passport_image')) {
            $file = $request->file('passport_image');
            $filename = 'content_passport_image_' . rand() . '.' . $file->getClientOriginalExtension();
            $register->passport_image = $filename;
            $file->storeAs('public/content/passport_image/', $filename);
        }
        $register->applicant_dob = $request->applicant_dob;
        $register->job_id = $request->job_id;
        // $register->applicant_due_date =$request->applicant_due_date;
        $register->applicant_payment_status = 0;
        $register->applicant_uci = $applicant_uci;
        $register->applicant_ref_no = $applicant_ref_no;
        $register->applicant_tracking_no = $applicant_tracking_no;
        $register->save();
        return $this->success($register, "Application created successfully");
    }
}
