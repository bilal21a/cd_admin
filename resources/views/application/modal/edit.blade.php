<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Full Name</label>
    <input type="text" name="applicant_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full Name"
        value="{{ $user->applicant_name }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Email
        <br><small class="text-muted">Allowed formats @gmail.com @yahoo.com</small>
    </label>
    <input type="email" name="applicant_email" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="example@domain.com" pattern="^[a-zA-Z0-9._%+-]+@(gmail|yahoo)\.com$"
        value="{{ $user->applicant_email }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Due Date</label>
    <input type="date" name="applicant_due_date" class="form-control form-control-solid mb-3 mb-lg-0"
        value="{{ $user->applicant_due_date }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('applicant_due_date')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-5">
    <label class="required fw-bold fs-6 mb-2">Role</label>
    <div data-kt-user-table-filter="form">
        <div class="mb-10">
            <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" style="height:50px;"
                data-kt-select2="true" data-placeholder="Select Option" data-allow-clear="true"
                data-kt-user-table-filter="role" data-hide-search="true" name="job_id"
                data-select2-id="select2-data-7-dvwh" tabindex="-1" aria-hidden="true">
                @foreach ($jobs as $job)
                {{-- {{ $user->role == 'student' ? 'selected' : '' }} --}}
                    <option value="{{$job->id}}" >{{$job->job_title}}</option>
                @endforeach
            </select>
        </div>
        @error('role')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="mb-5">
    <div data-kt-user-table-filter="form">
        <label class="required fw-bold fs-6 mb-2">Receipt Amount</label>
        <input type="text" name="receipt_amount" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Receipt Amount"
            value="{{ $user->receipt_amount }}">
        <div class="fv-plugins-message-container invalid-feedback"></div>
        @error('receipt_amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Application Payment Status</label>
    <div class="form-check form-switch">
        {{-- <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" > --}}
        <input class="form-check-input" name="applicant_payment_status" type="checkbox" id="flexSwitchCheckDefault" {{$user->applicant_payment_status == 1?"checked": ""}} >
    </div>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<input type="hidden" id="edit_id" name="id" value="{{ $user->id }}">

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary btn_submit" type="submit">
        <span class="indicator-label">Submit</span>
    </button>
</div>
