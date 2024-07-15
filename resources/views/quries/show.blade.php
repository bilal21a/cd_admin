@extends('layouts.app')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">User Queries</h1>
                </div>
            </div>
        </div>
        <a href="{{ route('queries.index') }}" class="btn btn-primary">Back to Queries List</a>
        <br><br><br><br>
        <div class="container">
            <table class="table">
                <tr>
                    <th>First Name</th>
                    <td>{{ $query->fname }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $query->lname }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $query->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $query->phone }}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>{{ $query->department }}</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{ $query->msg }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $query->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $query->updated_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            </table>
        </div>


    </div>
@endsection
