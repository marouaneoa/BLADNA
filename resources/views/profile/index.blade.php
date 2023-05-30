@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

@section('main')
    <div class="container">
        <h1>Profile</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">User Information</div>
                    <div class="card-body">
                        <p>Name: {{ $user->name }}</p>
                        <p>Email: {{ $user->email }}</p>
                        <p>Phone Number: {{ $user->phone_number }}</p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Update Profile</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
