@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Our Blogs on Climate Change</h1>

    <!-- Looping through each blog -->
    @foreach($blogs as $blog)
        <div class="card mb-4">
            <div class="card-header">
                <h4><a href="{{ route('blog.show', $blog->id) }}" class="text-decoration-none text-dark">{{ $blog->title }}</a></h4>
            </div>
            <div class="card-body">
                <p class="card-text">{{ Str::limit($blog->content, 150) }} <a href="{{ route('blog.show', $blog->id) }}" class="text-primary">Read more</a></p>
                <p class="card-text"><small class="text-muted">Posted on {{ $blog->created_at->format('F d, Y') }}</small></p>
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
</div>
@endsection
