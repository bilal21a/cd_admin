@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Applications Managment</h1>
                </div>
            </div>
        </div>
        {{-- -----Table----- --}}
        @php
            $tableName = 'datatable';
            $tableData = [
                'Applicant Name',
                'Applicant Email',
                'applicanta passport number',
                'Job Title',
                'applicant ref no',
                'applicant payment status',
                'Actions',
            ];
        @endphp
        @include('common.table.table')
    </div>

    @include('common.modal.add_edit_modal')
    @include('common.modal.coupon_model')
    @include('common.modal.coupon_edit_modal')
    @include('common.modal.application_view')


    @include('common.modal.insurance_model_list')
    @include('common.modal.add_insurance_modal')
    @include('common.modal.insurance_edit_modal')
@endsection

@section('js_after')
    {{-- **Show Data** --}}
    <script>
        var tabelDataArray = ['applicant_name', 'applicant_email', 'applicant_passport_number', 'job_id',
            'applicant_ref_no', 'html_status', 'action'
        ];
        var get_data_url = "{{ route('get_applications') }}"
    </script>
    @include('common.js.get_data')

    {{-- **Update Data** --}}
    <script>
        var edit_form_url = '{{ route('applications.edit', ':id') }}'
        var update_data_url = '{{ route('applications.update', ':id') }}'
        var edit_title = "Edit Applicant"
    </script>
    @include('common.js.edit_data')
    {{-- view --}}
    <script>
        var view_form_url = '{{ route('applications.show', ':id') }}'
    </script>
    @include('common.js.application_view')
    {{-- **Delete Data** --}}
    <script>
        var delete_data_url = '{{ route('applications.destroy', ':id') }}'
    </script>
    @include('common.js.delete_data')

    {{-- Voucher model to show listing --}}
    <script>
        function VoucherModel(company_id) {
            $('#VoucherModalListing').modal('show')
            console.log('company_id: ', company_id);
            document.getElementById('company_id').value = company_id;

            var appliaction_id = $('#company_id').val();
            console.log('appliaction_id: ', appliaction_id);
            $.ajax({
                url: `{{ route('vouchers.index') }}?id=${appliaction_id}`, // Replace with your route
                type: 'GET',

                success: function(response) {
                    console.log('Data sent successfully:', response);
                    $('#table_data').html(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error sending data:', error);
                    // Handle any errors
                }
            });
        }
    </script>
    {{--Add Voucher model --}}
    <script>
        function AddVoucherModel(company_id) {
            $('#VoucherModalListing').modal('hide')

            var company_id= company_id;
            addFormVoucherShow(company_id)
            $('#company_id_send').val(company_id);

        }
        var add_form_url = `{{ route('vouchers.create') }}`
        var save_data_url = `{{ route('vouchers.store') }}`
        var add_title = "Add Voucher"
    </script>
    @include('application.modal.js.coupon_modal_js')
    {{--Edit Voucher model --}}
    <script>
        function editVoucherModel(company_id) {
            $('#VoucherModalListing').modal('hide')

            var company_id= company_id;
            editVoucherFormShow(company_id)
        }
        var edit_voucher_form_url = `{{ route('vouchers.edit', ':id') }}`
        var update_voucher_data_url = `{{ route('vouchers.update', ':id') }}`
        // var add_title = "Edit Voucher"
    </script>
    @include('application.modal.js.coupon_edit_modal_js')
    {{--Delete Voucher model --}}
    <script>
        var delete_voucher_url = '{{ route('vouchers.destroy', ':id') }}'
    </script>
    @include('common.js.voucher_delete')






    {{-- Insurance model to show listing --}}
    <script>
        function insuranceModel(company_id) {
            $('#InsuranceModalListing').modal('show')
            console.log('company_id: ', company_id);
            document.getElementById('company_id').value = company_id;

            var appliaction_id = $('#company_id').val();
            console.log('appliaction_id: ', appliaction_id);
            $.ajax({
                url: `{{ route('insurance.index') }}?id=${appliaction_id}`, // Replace with your route
                type: 'GET',

                success: function(response) {
                    console.log('Data sent successfully:', response);
                    $('#table_data_insurance').html(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error sending data:', error);
                    // Handle any errors
                }
            });
        }
    </script>
    {{--Add Insurance model --}}
    <script>
        function AddnsuranceModel(company_id) {
            $('#InsuranceModalListing').modal('hide')
            $('#myInsuranceModal').modal('show')

            var company_id= company_id;
            addFormInsurnaceShow(company_id)
            $('#company_id_send').val(company_id);

        }
        var add_form_insurance_url = `{{ route('insurance.create') }}`
        var save_data_insurance_url = `{{ route('insurance.store') }}`
    </script>
    @include('application.modal.js.insurance_add_modal_js')
    {{-- Edit Insurance Model  --}}
    <script>
        function editInsuranceModel(company_id) {
            $('#InsuranceModalListing').modal('hide')
            $('#myModalInsuranceEdit').modal('show')

            var company_id= company_id;
            editInsurnaceFormShow(company_id)
        }
        var edit_voucher_form_url = `{{ route('insurance.edit', ':id') }}`
        var update_voucher_data_url = `{{ route('insurance.update', ':id') }}`
        // var add_title = "Edit Voucher"
    </script>
    @include('application.modal.js.insurance.insurance_edit_modal_js')
    {{--Delete Voucher model --}}
    <script>
        var delete_insurance_url = '{{ route('insurance.destroy', ':id') }}'
    </script>
    @include('common.js.insurance_delete')



@endsection
