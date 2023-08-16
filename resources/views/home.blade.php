@extends('layout.main')

@section('title', 'Home')

@section('content')

<div class="p-4">-</div>

<h1 class="p-3 mt-2 text-gr text-center">Movie Tracker</h1>

<div class="search-bar m-3 d-flex flex-row align-items-center justify-content-center">
    <form action="/events#section5">
        @csrf
        <div id="bubble-box mx-5">
            <input type="text" name="search-event" id="search-event" placeholder="Search movie..." class="no-outline search-box" value={{ request('search-name') }}>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </div>
    </form>

    <div style="width: 20px;"></div>
    <button class="btn mx-2 category-but" value="All">All</button>
    <button class="btn mx-2 category-but" value="Comedy">Comedy</button>
    <button class="btn mx-2 category-but" value="Documentary">Documentary</button>
    <button class="btn mx-2 category-but" value="Horror">Horror</button>
    <button class="btn mx-2 category-but" value="Romance">Romance</button>
    <button class="btn mx-2 category-but" value="Sci-Fi">Sci-Fi</button>
</div>


<div class="d-flex flex-wrap justify-content-center m-5">
    @for($i = 0; $i<10; $i++)
        @include('partial.movieCard')
    @endfor
</div>


<div class="h100"></div>

@endsection
