@extends('layout.main')

@section('title', 'Home')

@section('content')

<h1 class="p-3 text-gr">Movie Tracker</h1>

<div class="d-flex flex-wrap justify-content-around mx-5">
    @for($i = 0; $i<10; $i++)
        @include('partial.movieCard')
    @endfor
</div>



<div class="h100"></div>

@endsection
