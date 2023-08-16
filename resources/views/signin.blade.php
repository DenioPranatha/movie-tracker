@extends('layout.main')

@section('title', 'Sign In')

@section('content')

<div class="p-5"></div>

@if(session('registerSuccess'))
  <div class="alert alert-success" role="alert">
    {{ session('registerSuccess') }} Try to login with your account!
  </div>
@endif

@if(session('loginError'))
  <div class="alert alert-danger" role="alert">
    {{ session('loginError') }} Try again!
  </div>
@endif

@if(session('error'))
    <div class="w-100 d-flex justify-content-center">
        <div class="alert alert-danger alert-dismissible fade show w-75" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

<h1 class="p-3 text-gr text-center">Sign In</h1>

<div class="container mt-4 w-50">
    <form action="/signin" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-warning text-gr">Sign In</button>
        </div>

        <div class="mb-5">
            Don't have an account? <a href="/signup">Register</a>
        </div>
    </form>
</div>


<div class="h100"></div>

@endsection
