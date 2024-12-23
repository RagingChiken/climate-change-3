@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Discussion Forum: Climate Change</h1>

    <!-- Button to Create New Thread -->
    <div class="mb-4 text-right">
        <a href="{{ route('forum.create') }}" class="btn btn-primary">Create New Thread</a>
    </div>

    <!-- Displaying Forum Topics -->
    @foreach($threads as $thread)
        <div class="card mb-4">
            <div class="card-header">
                <h5><a href="{{ route('forum.show', $thread->id) }}" class="text-decoration-none text-dark">{{ $thread->title }}</a></h5>
                <p><small class="text-muted">Started by {{ $thread->user->name }} on {{ $thread->created_at->format('F d, Y') }}</small></p>
            </div>
            <div class="card-body">
                <p class="card-text">{{ Str::limit($thread->description, 150) }} <a href="{{ route('forum.show', $thread->id) }}" class="text-primary">Read more</a></p>
                <p class="card-text"><small class="text-muted">{{ $thread->replies->count() }} Replies</small></p>
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $threads->links() }}
    </div>
</div>
@endsection
