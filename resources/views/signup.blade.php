@extends('layout.main')

@section('title', 'Sign Up')

@section('content')

<div class="p-4">-</div>

<div class="container mt-4 w-50">
    <h1 class="mb-4 text-center">Sign Up</h1>
    <div class="mb-3 text-center">
        Have an account? <a href="/signin">Sign In</a>
    </div>
    <form action="/signup" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required>
            @error('username')
            <div class="text-danger text-xl">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error('password')
            <div class="text-danger text-xl">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="input-group mb-3">
            <div class="input-image border p-2 mt-1 mb-3 custom-file d-flex w-100 flex-row justify-content-between align-items-center">
                <label for="image">Input image (optional)</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                <div class="text-danger text-xl">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-end mb-5">
            <button type="submit" class="btn btn-warning text-gr">Sign Up</button>
        </div>
    </form>
</div>



<div class="h100"></div>

@endsection
