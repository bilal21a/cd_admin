<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Title</label>
    <input type="text" name="job_title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Title"
        value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Salary</label>
    <input type="number" name="job_salary" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Job Salary" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_salary')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Working Hours</label>
    <input type="text" name="working_hours" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Working Hours" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('working_hours')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Food Provided</label>
    <input type="text" name="food_provided" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Food Provided" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('food_provided')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Accommodation Provided</label>
    <input type="text" name="accommodation_provided" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Accommodation Provided" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('accommodation_provided')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Contract Period</label>
    <input type="text" name="contract_period" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Contract Period" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('contract_period')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Probation Period</label>
    <input type="text" name="probation_period" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Probation Period" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('probation_period')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Image</label>
    <input type="file" name="job_img" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Image"
        value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_img')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Description</label>
    <input type="text" name="job_desc" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Job Description" value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_desc')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit">
        <span class="indicator-label">Submit</span>
    </button>
</div>
