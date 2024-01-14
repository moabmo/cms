<!-- resources/views/members.blade.php -->
@extends('layouts.app')

@section('title', 'Members')

@section('content')
    <h1>Members List</h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Member Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Registration Date</th>
                <th>Method</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->member_number }}</td>
                    <td>{{ $member->first_name }}</td>
                    <td>{{ $member->last_name }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->registration_date }}</td>
                    <td>{{ $member->method }}</td>
                    <td>{{ $member->phone_number }}</td>
                    <td>{{ $member->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
