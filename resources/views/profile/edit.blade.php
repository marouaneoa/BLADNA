@extends('layouts.app')

@section('main')
<div class="container">
    <h1>Edit Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
      </div>
      <div class="form-group">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" class="form-control" required>
        @error('current_password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
      </div>
      <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
      </div>
      <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
  </div>
@endsection  
