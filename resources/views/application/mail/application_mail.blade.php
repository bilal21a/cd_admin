<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Application Status Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table td {
            padding: 10px;
            border-bottom: 1px solid #dddddd;
        }
        .table td strong {
            display: block;
            margin-bottom: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="logo">
                <img src="{{ asset('acron/img/logo/logo-blue-light.svg') }}" alt="Website Logo">
            </div>
            <h2>Application Status Update</h2>
            <p>Dear {{ $data->applicant_name ? $data->applicant_name : 'Applicant' }},</p>
            <p>We are pleased to inform you that your application status has been updated to <strong>PAID</strong>. Here are the details of your application:</p>
            <table class="table">
                <tr>
                    <td><strong>Applicant Image</strong></td>
                    <td><img width="200px" src="{{ asset('storage/content/applicant_image/' . $data->applicant_image) }}" alt="Applicant Image" style="border-radius: 5px"></td>
                </tr>
                <tr>
                    <td><strong>Applicant Name</strong></td>
                    <td>{{ $data->applicant_name ? $data->applicant_name : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Email</strong></td>
                    <td>{{ $data->applicant_email ? $data->applicant_email : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Phone</strong></td>
                    <td>{{ $data->applicant_phone ? $data->applicant_phone : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Passport Number</strong></td>
                    <td>{{ $data->applicant_passport_number ? $data->applicant_passport_number : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Date of Birth</strong></td>
                    <td>{{ $data->applicant_dob ? $data->applicant_dob : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Job Title</strong></td>
                    <td>{{ $data->job_id ? $data->job_id : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant UCI</strong></td>
                    <td>{{ $data->applicant_uci ? $data->applicant_uci : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Reference Number</strong></td>
                    <td>{{ $data->applicant_ref_no ? $data->applicant_ref_no : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Tracking Number</strong></td>
                    <td>{{ $data->applicant_tracking_no ? $data->applicant_tracking_no : '' }}</td>
                </tr>
                <tr>
                    <td><strong>Applicant Payment Status</strong></td>
                    <td>{{ $data->applicant_payment_status ? $data->applicant_payment_status : '' }}</td>
                </tr>
            </table>
            <p>Thank you for your application. If you have any questions, please do not hesitate to contact us.</p>
            <p>Sincerely,<br>Canada Investments Online Team</p>
        </div>
        <div class="footer">
            &copy; 2024 Canada Investments Online. All rights reserved.
        </div>
    </div>
</body>
</html>
