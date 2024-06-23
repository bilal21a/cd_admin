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
            $tableData = ['Applicant Name', 'Applicant Email', 'applicanta passport number', 'Job Title','applicant ref no','applicant payment status', 'Actions'];
        @endphp
        @include('common.table.table')
    </div>

    @include('common.modal.add_edit_modal')
@endsection

@section('js_after')
    {{-- **Show Data** --}}
    <script>
        var tabelDataArray = ['applicant_name', 'applicant_email', 'applicant_passport_number', 'job_id','applicant_ref_no','html_status', 'action'];
        var get_data_url = "{{ route('get_applications') }}"
    </script>
    @include('common.js.get_data')

    {{-- **Update Data** --}}
    <script>
        var edit_form_url = '{{ route('applications.edit', ':id') }}'
        var update_data_url = '{{ route('applications.update', ':id') }}'
        var edit_title = "Edit User"
    </script>
    @include('common.js.edit_data')


    {{-- **Delete Data** --}}
    <script>
        var delete_data_url = '{{ route('applications.destroy', ':id') }}'
    </script>
    @include('common.js.delete_data')
@endsection
