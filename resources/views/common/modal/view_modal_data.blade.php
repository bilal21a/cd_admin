<div class="row">
    <h3><b> Carrier Information :</b></h3>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Image :</h4>
        <img width="200px" src="{{ asset('storage/content/applicant_image/' . $user->applicant_image) }}" alt=""
        style="border-radius: 5px"
            srcset="">
    </div>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Name :</h4>
        <p>{{ $user->applicant_name ? $user->applicant_name :""}}</p>
    </div>

    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Email :</h4>
        <p>{{ $user->applicant_email ? $user->applicant_email :"" }}
    </div>

    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Phone :</h4>
        <p>{{ $user->applicant_phone ? $user->applicant_phone : '-' }}
    </div>

    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Passport Number :</h4>
        <p>{{ $user->applicant_passport_number ? $user->applicant_passport_number : "" }}
    </div>

    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Date of Birth :</h4>
        <p>{{ $user->applicant_dob ? $user->applicant_dob : "" }}
    </div>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Job Title :</h4>
        <p>{{ $user->job_id	? $user->job_id : "" }}
    </div>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant UCI :</h4>
        <p>{{ $user->applicant_uci	? $user->applicant_uci : "" }}
    </div>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Referance Number :</h4>
        <p>{{ $user->applicant_ref_no	? $user->applicant_ref_no : "" }}
    </div>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Referance Number :</h4>
        <p>{{ $user->applicant_tracking_no? $user->applicant_tracking_no: "" }}
    </div>
    <div class="col-6 fv-row mb-3 fv-plugins-icon-container d-flex">
        <h4 class="required fw-bold fs-6 mb-1 me-1">Applicant Payment Status :</h4>
        <p>{{ $user->applicant_payment_status? $user->applicant_payment_status: "-" }}
    </div>
</div>
