<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vouchers =Voucher::where('application_id',$request->id)->get();
        return view('application.server_side.coupon_table',compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->id);
        $application_id =$request->id;
        return view('users.modal.coupon_add',compact('application_id'));
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
            "voucher_title" => "required|string|max:255",
            "voucher_price" => "required|numeric",
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), 500);
        }
        $voucher = new Voucher();
        $voucher->voucher_title = $request->voucher_title;
        $voucher->voucher_price = $request->voucher_price;
        $voucher->application_id = $request->company_id_send;
        $voucher->save();
        return 'Voucher created successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voucher =Voucher::find($id);
        // dd($voucher);
        return view('users.modal.coupon_update',compact('id','voucher'));
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
            "voucher_title" => "required|string|max:255",
            "voucher_price" => "required|numeric",
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), 500);
        }
        $voucher = Voucher::find($request->voucher_id);
        $voucher->voucher_title = $request->voucher_title;
        $voucher->voucher_price = $request->voucher_price;
        $voucher->save();
        return 'Voucher Updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
