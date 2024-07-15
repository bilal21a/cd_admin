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

        <div class="card">
            <div class="card-body">
                <div class="table-responsive-sm mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Department</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($queries as $q)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }} <a href="{{ route('queries.show',$q->id) }}">(view)</a></th>
                                    <td>{{ $q->fname }}</td>
                                    <td>{{ $q->lname }}</td>
                                    <td>{{ $q->email }}</td>
                                    <td>{{ $q->phone }}</td>
                                    <td>{{ $q->department }}</td>
                                    <td>{{ Str::limit($q->msg, 50, '...') }}</td> <!-- Adjust the length as needed -->
                                    <td>{{ $q->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No queries found.</td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
