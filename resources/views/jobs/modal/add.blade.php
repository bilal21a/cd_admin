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
    <input type="number" name="job_salary" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Salary"
        value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_salary')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Salary</label>
    <input type="number" name="job_salary" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Salary"
        value="">
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('job_salary')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Job Description</label>
    <input type="text" name="job_desc" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Job Description"
        value="">
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
