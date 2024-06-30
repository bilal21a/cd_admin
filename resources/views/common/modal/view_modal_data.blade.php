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
