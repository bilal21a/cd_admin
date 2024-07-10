<?php

namespace App\Http\Controllers;

use App\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $insurances =Insurance::where('application_id',$request->id)->get();
        return view('application.server_side.insurance_table',compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $application_id =$request->id;
        return view('users.modal.insurance.insurance_add',compact('application_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "insurance_policy_no" => "required|numeric",
            "insurance_fee" => "required|numeric",
            "applicant_payment_status" => "required|string|max:255",
            "company_id_send" => "required",
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), 500);
        }
        $applicant_payment_status =$request->applicant_payment_status == "on" ? 1 :0 ;
        $insurance = new Insurance();
        $insurance->insurance_policy_no = $request->insurance_policy_no;
        $insurance->insurance_fee = $request->insurance_fee;
        $insurance->insurance_payment_status = $applicant_payment_status;
        $insurance->application_id = $request->company_id_send;
        $insurance->save();
        return 'Insurance created successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insurance =Insurance::find($id);
        // dd($insurance);
        return view('users.modal.insurance.insurance_update',compact('id','insurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "insurance_policy_no" => "required|numeric",
            "insurance_fee" => "required|numeric",
            "applicant_payment_status" => "required|string|max:255",
            "company_id_send" => "required",
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), 500);
        }
        $applicant_payment_status =$request->applicant_payment_status == "on" ? 1 :0 ;
        $insurance = Insurance::find($id);
        $insurance->insurance_policy_no = $request->insurance_policy_no;
        $insurance->insurance_fee = $request->insurance_fee;
        $insurance->insurance_payment_status = $applicant_payment_status;
        $insurance->save();
        return 'Insurance Updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insurance = Insurance::find($id);
        $insurance->delete();
        return 'Insurance Deleted successfully';
    }
}
