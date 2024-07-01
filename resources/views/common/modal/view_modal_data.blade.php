{{-- <div class="row">
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
        <p>{{ $user->job ? $user->job->job_title : "" }}
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
</div> --}}


<table class="table">
    <tr >
        <td style="text-align: justify"><strong>Applicant Image</strong></td>
        <td style="text-align: justify"><img width="200px" src="{{ asset('storage/content/applicant_image/' . $user->applicant_image) }}" alt="" style="border-radius: 5px"></td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Name</strong></td>
        <td style="text-align: justify">{{ $user->applicant_name ? $user->applicant_name : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Email</strong></td>
        <td style="text-align: justify">{{ $user->applicant_email ? $user->applicant_email : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Phone</strong></td>
        <td style="text-align: justify">{{ $user->applicant_phone ? $user->applicant_phone : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Passport Number</strong></td>
        <td style="text-align: justify">{{ $user->applicant_passport_number ? $user->applicant_passport_number : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Date of Birth</strong></td>
        <td style="text-align: justify">{{ $user->applicant_dob ? $user->applicant_dob : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Job Title</strong></td>
        <td style="text-align: justify">{{ $user->job_id ? $user->job_id : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant UCI</strong></td>
        <td style="text-align: justify">{{ $user->applicant_uci ? $user->applicant_uci : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Reference Number</strong></td>
        <td style="text-align: justify">{{ $user->applicant_ref_no ? $user->applicant_ref_no : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Tracking Number</strong></td>
        <td style="text-align: justify">{{ $user->applicant_tracking_no ? $user->applicant_tracking_no : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Payment Status</strong></td>
        <td style="text-align: justify">{{ $user->applicant_payment_status ? $user->applicant_payment_status : '' }}</td>
    </tr>
</table>
