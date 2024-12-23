@extends('layouts.app')

@section('content')
    <h1>Search for Solutions, Blogs, and More</h1>

    <!-- Form Pencarian -->
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Search for something..." />
        <button type="submit">Search</button>
    </form>
@endsection
