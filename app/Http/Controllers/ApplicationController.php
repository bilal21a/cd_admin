<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job;
use App\Jobs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('application.index');
    }

    public function get_data()
    {
        $applications = Application::get();
        return DataTables::of($applications)
        ->addColumn('action', function ($application) {
            return $this->for_application($application->id);
        })
        ->addColumn('html_status', function ($user) {
            if ($user->applicant_payment_status == 1) {
                return '<span class="badge bg-success text-uppercase">Success</span>';
            } else {
                return '<span class="badge bg-danger text-uppercase">Un-paid</span>';
            }
        })
        ->rawColumns(['html_status', 'action']) // Specify columns that contain HTML
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('application.modal.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Application::with('job')->find($id);
        return view('common.modal.view_modal_data', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Application::find($id);
        $jobs = Job::select('id', 'job_title')->get();
        return view('application.modal.edit', compact('user', 'jobs'));
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
        // dd($request->applicant_payment_status == null);
        if ($request->applicant_payment_status == "on") {
            $applicant_payment_status_request = 1;
        } else {
            $applicant_payment_status_request = 0;
        }
        // dd($applicant_payment_status_request);

        $validator = Validator::make($request->all(), [
            "applicant_name" => "required|string|max:255",
            "applicant_email" => "required|email|max:255",
            "job_id" => "required|integer",
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $register = Application::find($id);
        $register->applicant_name = $request->applicant_name;
        $register->applicant_email = $request->applicant_email;
        $register->job_id = $request->job_id;
        $register->applicant_payment_status = $applicant_payment_status_request;
        $register->save();
        return 'Application Updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = Application::find($id);
        $agent->delete();
        return 'Application Deleted Succesfully';
    }
}
