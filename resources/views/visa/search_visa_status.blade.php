<style>
    body {

        margin: 0;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
    }

    p {
        margin: 0;
        padding: 0;

    }

    .container {
        width: 90%;
        margin-right: auto;
        margin-left: auto;
    }

    .brand-section {
        background-color: #0d1033;
        padding: 10px 40px;
    }

    .brand-sec {
        background-color: #0d1033;
        padding: 10px 40px;
        border-radius: 20px;
    }

    .logo {
        width: 50%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-6 {
        width: 50%;
        flex: 0 0 auto;
    }

    .col-12 {
        width: 90%;
        flex: 0 0 auto;
    }

    .text-white {
        color: #fff;
    }

    .text-info {
        color: #84ABE8;
    }

    .text-success {
        color: #90F28E;
    }

    .text-danger {
        color: #E8664C;
    }

    .text-center {
        text-align: center;
    }

    .text-red {
        color: red;
    }

    .company-details {
        float: right;
        text-align: right;
    }

    .body-section {
        padding: 16px;
        border: 1px solid gray;
    }

    .heading {
        font-size: 20px;
        margin-bottom: 08px;
    }

    .sub-heading {
        color: #262626;
        margin-bottom: 05px;
    }

    table {
        background-color: #fff;
        width: 100%;
        border-collapse: collapse;
    }

    table thead tr {
        border: 1px solid #111;
        background-color: #f2f2f2;
    }

    table td {
        vertical-align: middle !important;
        text-align: center;
    }

    table th,
    table td {
        padding-top: 08px;
        padding-bottom: 08px;
    }

    .table-bordered {
        box-shadow: 0px 0px 5px 0.5px gray;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6;
    }

    .text-right {
        text-align: end;
        padding-right: 10px;

    }

    .text-left {
        text-align: start;
        padding-left: 10px;

    }

    .text-jus {
        text-align: justify;
        padding-left: 10px;
        padding-right: 10px;

    }

    .w-20 {
        width: 20%;
    }

    .float-right {
        float: right;
    }

    .inss {
        background-color: #D6FAF6;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #04AA6D;
        /* Green */
    }

    .button1:hover {
        background-color: #04AA6D;
        /* Green */
        color: white;
    }

    rds {
        border: 2px solid red;
        padding: 10px;
        border-radius: 50px 20px;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

    <script src="barcode.js"></script>
</head>
<div class="container">
    <div class="brand-section">
        <div class="row">
            <div class="col-6" style="background-color;#FBC8A7;">
                <img src="cn.png" style="width: 100px; height: 100px;">
                <img src="assets/img/cahd.png" style="width: 0px; height: 0px;">
            </div>
            <div class="col-6">
                <div class="company-details" style="background-color;#FBC8A7;">
                    <p class="text-white">{{ $application->applicant_name ?? 'No Found' }} </p>
                    <p class="text-white"></p>
                    <p class="text-white"><i class="fa fa-phone"></i>{{ $application->applicant_phone ?? 'Not Found' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="body-section">
        <div class="row">
            <div class="col-6">
                <h2 class="heading">UCI No.: {{ $application->applicant_uci ?? 'No Found' }}</h2>
                <p class="sub-heading">Tracking No:{{ $application->applicant_tracking_no ?? 'No Found' }} </p>
                <p class="sub-heading">Due Date: {{ $application->applicant_due_date ?? 'No Found' }} </p>
                <p class="sub-heading">Email Address: {{ $application->applicant_email ?? 'No Found' }}</p>
            </div>
            <div class="col-6">
                <p class="sub-heading">Full Name: {{ $application->applicant_name ?? 'No Found' }} </p>
                <p class="sub-heading">Address: {{ $application->applicant_address ?? 'No Found' }} </p>
                <p class="sub-heading">Phone Number: {{ $application->applicant_phone ?? 'Not Found' }} <i
                        class="fa fa-mail"></i> {{ $application->applicant_email ?? 'No Found' }} </p>
                <p class="sub-heading">City,State,Pincode: {{ $application->applicant_address ?? 'No Found' }} </p>
            </div>
        </div>
    </div>

    <div class="body-section">
        <h3 class="heading">Pending Payment Voucher</h3>
        <br>
        <table class="table-bordered">
            <thead>
                <tr>
                    <th>Fee</th>
                    <th class="w-20">Price</th>
                    <th class="w-20">Quantity</th>
                    <th class="w-20">Grandtotal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sum_toal = 0;
                @endphp
                @forelse ($application->vouchers as $voucher)
                    <tr>
                        <td>{{ $voucher->voucher_title }}</td>
                        <td>{{ $voucher->voucher_price }} CAD</td>
                        <td>1</td>
                        <td>{{ $voucher->voucher_price }} CAD</td>
                    </tr>
                    @php
                        $sum_toal += $voucher->voucher_price;
                    @endphp
                @empty
                    <td></td>
                    <td></td>
                    <td>Not Found!!</td>
                    <td></td>
                    <td></td>
                @endforelse
                <tr>
                    <td colspan="3" class="text-right">Sub Total</td>
                    <td> {{$sum_toal}} CAD$</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Tax Total %1X</td>
                    <td> 0</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Grand Total</td>
                    <td> {{$sum_toal}} CAD$</td>
                </tr>
            </tbody>
        </table>
        <br>
        <h3 class="sub-heading inss">Payment Status: PAID <i class="fa fa-check"></i></h3>
        <h3 class="heading">Payment Mode: Client</h3>
        <h3 class="heading">Days Left: -24</h3>
    </div>
    <style>
        @media print {
            .page-break {
                page-break-before: always;
            }
        }
    </style>
    <section
        style="font-family: Arial, sans-serif; line-height: 1; margin: 20px; border: 5px solid goldenrod; padding: 20px; border-radius: 10px; max-width: 80%; margin: auto; "
        class="page-break">

        <!-- Your content here -->





        <div style="padding: 20px;">
            <header style="text-align: center; margin-bottom: 20px;">
                <img src="https://opdata.nizwal.com/assets/img/logo/titi.png" alt="Logo"
                    style="max-width: 350px; margin-bottom: 20px;">
                <h1 style="color: goldenrod;">TRAVEL INSURANCE CERTIFICATE</h1>
            </header>

            <main>
                <table style="width: 100%;">

                    <tr>
                        <td style="text-align: left;">Insured Name</td>
                        <td style="text-align: right;">{{ $application->applicant_name ?? 'No Found' }} </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Date of Birth</td>
                        <td style="text-align: right;">05-February-1984</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Passport Number</td>
                        <td style="text-align: right;">M9439749</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Policy Number</td>
                        <td style="text-align: right;">053240041-24</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Country of Residence</td>
                        <td style="text-align: right;">INDIA</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Country of Travel</td>
                        <td style="text-align: right;">CANADA</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Dates of Travel</td>
                        <td style="text-align: right;">From 02-June-2024 To 02-August-2024</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Insurance Fee</td>
                        <td style="text-align: right;">150$ USD</td>
                    </tr>
                </table>

                <h2 style="color: goldenrod; text-align: center;">MAIN BENEFITS</h2>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="vertical-align: top; text-align:left; padding: 5px;">
                            <ul style="list-style-type: none; padding-left: 0;">
                                <li>Medical emergency</li>
                                <li>Follow up treatment in residence country</li>
                                <li>Luggage loss or theft/delay</li>
                                <li>Repatriation after treatment</li>
                                <li>Medical evacuation</li>
                                <li>Body repatriation</li>
                            </ul>
                        </td>
                        <td style="vertical-align: top; text-align:left; padding: 5px;">
                            <ul style="list-style-type: none; padding-left: 0;">
                                <li>Legal assistance</li>
                                <li>Travel delay</li>
                                <li>Emergency dental expenses</li>
                                <li>Personal accident</li>
                                <li>Trip cancellation and curtailment</li>
                                <li>Missed departure</li>
                                <li>Personal liability</li>
                            </ul>
                        </td>
                    </tr>
                </table>

                <h2 style="color: goldenrod; text-align: center;">SPECIAL PROVISION</h2>
                <p>The insured recognizes and declares to be informed of the General Conditions as well as the benefits
                    and the exclusions. This certificate cannot be used as a letter of guarantee for payment into public
                    or private medical organization. The insured declares to have not scheduled any travel for
                    therapeutic treatment.</p>

                <hr style="margin: 20px 0; border: none; border-top: 2px dashed goldenrod; width: 100%;">



                <section style="text-align: center;">
                    <div style="border: 2px solid goldenrod; padding: 10px; display: inline-block; text-align: center;">
                        <img src="https://opdata.nizwal.com/assets/img/logo/titi.png" alt="Logo"
                            style="max-width: 150px; margin-bottom: 20px;">
                        <h2 style="color: goldenrod;">TRAVEL INSURANCE CERTIFICATE</h2>
                        <p style="color:goldenrod;">Cut here and keep the card below with you</p>
                        <div>
                            <table width="100%" class="emergency-card" style="text-align:left;">
                                <tr style="text-align:left;">
                                    <td>Validity</td>
                                    <td>From 02-June-2024 To 02-August-2024</td>
                                </tr>
                                <tr style="text-align:left;">
                                    <td>Policy Number</td>
                                    <td>053240041-24</td>
                                </tr>
                                <tr style="text-align:left;">
                                    <td>Names of Insured</td>
                                    <td>{{ $application->applicant_name ?? 'No Found' }} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
        </div>



        <style>
            .title {
                font-size: 1em;
                font-weight: bold;
                margin-bottom: 20px;
                color: #333;
            }

            .stamp {
                display: inline-block;
                padding: 10px 20px;
                border: 4px solid red;
                color: red;
                font-size: 1em;
                font-weight: bold;
                text-transform: uppercase;
                transform: rotate(-15deg);
                position: relative;
            }

            .stamp::before,
            .stamp::after {

                position: absolute;
                border: 4px solid red;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: -1;
                transform: rotate(30deg);
            }

            .stamp::after {
                transform: rotate(-30deg);
            }
        </style>
        <div class="stamp">

            <div class="paid">Un-PAID</div>
        </div>
    </section>
    <h3 class="sub-heading inss">Payment Status: UN-PAID <i class="fa fa-times"></i></h3>
    <h3 class="heading">Payment Mode: Client</h3>
    <h3 class="heading">Days Left: -24</h3>
</div>
<div id="preloader">
    <script>
        // JavaScript to hide the preloader after 50 seconds
        setTimeout(function() {
            var preloader = document.getElementById("preloader");
            preloader.style.display = "none";
        }, 50000); // 50 seconds in milliseconds
    </script>
</div>
<br>
<div class="brand col-8 text-center">
    <img src="uploadi/CANXJ3NG4CLS.jpeg" alt="WorkPermit" width="100%">
</div>
