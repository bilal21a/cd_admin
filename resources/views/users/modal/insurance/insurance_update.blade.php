<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Insurance Policy No</label>
    <input type="number" name="insurance_policy_no" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Insurance Policy No" value="{{$insurance->insurance_policy_no ? $insurance->insurance_policy_no :"" }}" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('insurance_policy_no')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">Insurance Fees</label>
    <input type="number" name="insurance_fee" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Insurance Fees" value="{{$insurance->insurance_fee ? $insurance->insurance_fee :"" }}" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('insurance_fee')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">Insurance Payment Status</label>
    <div class="form-check form-switch">
        {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" > --}}
        {{--  --}}
        {{-- @dd($insurance->applicant_payment_status) --}}
        <input class="form-check-input" name="applicant_payment_status" type="checkbox" id="flexSwitchCheckDefault" {{$insurance->insurance_payment_status == 1?"checked": ""}}>
    </div>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('insurance_payment_status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<input type="hidden" id="company_id_send" name="company_id_send" value="{{$insurance->application_id}}">
<input type="hidden" id="edit_id" name="id" value="{{ $insurance->id }}">

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit">
        <span class="indicator-label">Submit</span>
    </button>
</div>
