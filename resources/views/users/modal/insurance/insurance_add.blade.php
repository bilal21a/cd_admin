<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Insurance Policy No</label>
    <input type="number" name="insurance_policy_no" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Insurance Policy No" value="" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('insurance_policy_no')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">Insurance Fees</label>
    <input type="number" name="insurance_fee" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Insurance Fees" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('insurance_fee')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">From date</label>
    <input type="date" name="from_date" class="form-control form-control-solid mb-3 mb-lg-0"  required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('from_date')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">To date</label>
    <input type="date" name="to_date" class="form-control form-control-solid mb-3 mb-lg-0" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('to_date')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">Insurance Payment Status</label>
    <div class="form-check form-switch">
        {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" > --}}
        {{-- {{$user->applicant_payment_status == 1?"checked": ""}} --}}
        <input class="form-check-input" name="applicant_payment_status" type="checkbox" id="flexSwitchCheckDefault" >
    </div>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('insurance_payment_status')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<input type="hidden" id="company_id_send" name="company_id_send" value="{{$application_id}}">

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit">
        <span class="indicator-label">Submit</span>
    </button>
</div>
