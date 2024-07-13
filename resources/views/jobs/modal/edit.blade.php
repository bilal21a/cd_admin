<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Title</label>
    <input type="text" name="job_title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Title"
        value="{{ $user->job_title }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Salary</label>
    <input type="number" name="job_salary" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Job Salary" value="{{ $user->job_salary }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_salary')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Working Hours</label>
    <input type="text" name="working_hours" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Working Hours" value="{{ $user->working_hours }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('working_hours')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Food Provided</label>
    <input type="text" name="food_provided" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Food Provided" value="{{ $user->food_provided }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('food_provided')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Accommodation Provided</label>
    <input type="text" name="accommodation_provided" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Accommodation Provided" value="{{ $user->accommodation_provided }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('accommodation_provided')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Contract Period</label>
    <input type="text" name="contract_period" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Contract Period" value="{{ $user->contract_period }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('contract_period')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Probation Period</label>
    <input type="text" name="probation_period" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Probation Period" value="{{ $user->probation_period }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('probation_period')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Image</label>
    <input type="file" name="job_img" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Image">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    <img width="150px" src="{{ asset('storage/job_media/job_img/' . $user->job_img) }}" alt=""
        style="border-radius: 5px">
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Description</label>
    <input type="text" name="job_desc" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Job Description" value="{{ $user->job_desc }}">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_desc')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<input type="hidden" id="edit_id" name="id" value="{{ $user->id }}">

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit">
        <span class="indicator-label">Submit</span>
    </button>
</div>
