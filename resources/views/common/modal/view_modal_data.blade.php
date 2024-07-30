<table class="table">
    {{-- <tr>
        <td style="text-align: justify"><strong>Applicant Image</strong></td>
        @if ($data->applicant_image)
            <td style="text-align: justify"><img width="200px"
                    src="{{ asset('storage/content/applicant_image/' . $data->applicant_image) }}" alt=""
                    style="border-radius: 5px"></td>
        @endif
    </tr> --}}
    <tr>
        <td style="text-align: justify"><strong>Applicant Name</strong></td>
        <td style="text-align: justify">{{ $data->applicant_name ? $data->applicant_name : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Email</strong></td>
        <td style="text-align: justify">{{ $data->applicant_email ? $data->applicant_email : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Phone</strong></td>
        <td style="text-align: justify">{{ $data->applicant_phone ? $data->applicant_phone : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Country</strong></td>
        <td style="text-align: justify">{{ $data->applicant_country ? $data->applicant_country : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Passport Number</strong></td>
        <td style="text-align: justify">{{ $data->applicant_passport_number ? $data->applicant_passport_number : '' }}
        </td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Date of Birth</strong></td>
        <td style="text-align: justify">{{ $data->applicant_dob ? $data->applicant_dob : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Job Title</strong></td>
        <td style="text-align: justify">{{ $data->job_id ? $data->job_id : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant UCI</strong></td>
        <td style="text-align: justify">{{ $data->applicant_uci ? $data->applicant_uci : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Reference Number</strong></td>
        <td style="text-align: justify">{{ $data->applicant_ref_no ? $data->applicant_ref_no : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Tracking Number</strong></td>
        <td style="text-align: justify">{{ $data->applicant_tracking_no ? $data->applicant_tracking_no : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Receipt Amount</strong></td>
        <td style="text-align: justify">{{ $data->receipt_amount ? $data->receipt_amount : '' }}</td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Applicant Payment Status</strong></td>
        <td style="text-align: justify">{{ $data->applicant_payment_status ? $data->applicant_payment_status : '' }}
        </td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Receipt</strong>
            <a href="{{ route('generate_receipt', $id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="acorn-icons acorn-icons-refresh-horizontal mb-3 d-inline-block text-primary">
                    <path d="M8 14 10 16 8 18M12 6 10 4 12 2"></path>
                    <path
                        d="M6 4 5 4C3.34315 4 2 5.34315 2 7L2 13C2 14.6569 3.34315 16 5 16L9.5 16M14 16 15 16C16.6569 16 18 14.6569 18 13L18 7C18 5.34315 16.6569 4 15 4L11 4">
                    </path>
                </svg>
            </a>
        </td>
        <td style="text-align: justify">
            @if (checkImageExists(asset("storage/receipt/receipt_$id.jpg")))
                <a href="{{ asset('storage/receipt/receipt_' . $id . '.jpg') }}" target="_blank">
                    <img width="200px" src="{{ asset('storage/receipt/receipt_' . $id . '.jpg') }}" alt=""
                        style="border-radius: 5px">
                </a>
                <p>
                    <small>⚠️ In case of empty image do refresh page using CTRL+SHIFT+R</small>
                </p>
            @else
                <a class="btn btn-primary btn-sm" href="{{ route('generate_receipt', $id) }}">Generate Receipt</a>
            @endif
        </td>
    </tr>
    <tr>
        <td style="text-align: justify"><strong>Passport</strong>
            <a href="{{ route('generate_passport', $id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="acorn-icons acorn-icons-refresh-horizontal mb-3 d-inline-block text-primary">
                    <path d="M8 14 10 16 8 18M12 6 10 4 12 2"></path>
                    <path
                        d="M6 4 5 4C3.34315 4 2 5.34315 2 7L2 13C2 14.6569 3.34315 16 5 16L9.5 16M14 16 15 16C16.6569 16 18 14.6569 18 13L18 7C18 5.34315 16.6569 4 15 4L11 4">
                    </path>
                </svg>
            </a>
        </td>
        <td style="text-align: justify">
            @if (checkImageExists(asset("storage/passport/passport_$id.jpg")))
                <a href="{{ asset('storage/passport/passport_' . $id . '.jpg') }}" target="_blank">
                    <img width="200px" src="{{ asset('storage/passport/passport_' . $id . '.jpg') }}" alt=""
                        style="border-radius: 5px">
                </a>
                <p>
                    <small>⚠️ In case of empty image do refresh page using CTRL+SHIFT+R</small>
                </p>
            @else
                <a class="btn btn-primary btn-sm" href="{{ route('generate_passport', $id) }}">Generate Passport</a>
            @endif
        </td>
    </tr>

</table>
