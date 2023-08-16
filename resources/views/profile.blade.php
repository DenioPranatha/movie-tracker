@extends('layout.main')

@section('title', 'Profile')

@section('content')

<h1 class="p-3 text-gr">Hi, {{ auth()->user()->username }}!</h1>




<div class="h100"></div>

@endsection
