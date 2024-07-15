<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.index');
    }

    public function get_data()
    {
        $users = Job::get();
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return $this->get_buttons($user->id);
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.modal.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'job_title' => 'required',
                'job_salary' => 'required',
                'job_desc' => 'required',
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }
        $job = new Job();
        $job->job_title = $request->job_title;
        $job->job_salary = $request->job_salary;
        $job->working_hours = $request->working_hours;
        $job->food_provided = $request->food_provided;
        $job->accommodation_provided = $request->accommodation_provided;
        $job->contract_period = $request->contract_period;
        $job->probation_period = $request->probation_period;
        $job->job_desc = $request->job_desc;
        if ($request->hasFile('job_img')) {
            $file = $request->file('job_img');
            $filename = 'content_job_img_' . rand() . '.' . $file->getClientOriginalExtension();
            $job->job_img = $filename;
            $file->storeAs('public/job_media/job_img/', $filename);
        }
        $job->save();
        return 'Success';
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
        $user = Job::find($id);
        return view('jobs.modal.edit', compact('user'));
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
        $validate = Validator::make(
            $request->all(),
            [
                'job_title' => 'required',
                'job_salary' => 'required',
                'working_hours' => 'required',
                'food_provided' => 'required',
                'accommodation_provided' => 'required',
                'contract_period' => 'required',
                'probation_period' => 'required',
                // 'job_img' => 'required',
                'job_desc' => 'required',
            ],
        );
        if ($validate->fails()) {
            return response()->json($validate->errors()->first(), 500);
        }
        $job = Job::find($id);
        $job->job_title = $request->job_title;
        $job->job_salary = $request->job_salary;
        $job->working_hours = $request->working_hours;
        $job->food_provided = $request->food_provided;
        $job->accommodation_provided = $request->accommodation_provided;
        $job->contract_period = $request->contract_period;
        $job->probation_period = $request->probation_period;
        $job->job_desc = $request->job_desc;
        // dd(c);

        if ($request->hasFile('job_img')) {
            // Check if the job has an existing image
            if ($job->job_img) {
                // Delete the existing image from the public storage
                Storage::delete('public/job_media/job_img/' . $job->job_img);
            }

            // Handle the new file upload
            $file = $request->file('job_img');
            $filename = 'content_job_img_' . rand() . '.' . $file->getClientOriginalExtension();
            $job->job_img = $filename;
            $file->storeAs('public/job_media/job_img/', $filename);
        }

        $job->save();
        return 'Job Updated Successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return 'User Deleted Succesfully';
    }
}
