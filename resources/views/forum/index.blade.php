@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Discussion Forum</h1>

    <!-- Button to Create New Thread -->
    <div class="mb-4 text-center">
        <a href="{{ route('forum.create') }}" class="btn btn-primary">Create New Thread</a>
    </div>

    <!-- Display Threads -->
    @if($threads->count() > 0)
        @foreach($threads as $thread)
            <div class="card mb-3">
                <div class="card-header">
                    <h5>
                        <a href="{{ route('forum.show', $thread->id) }}" class="text-decoration-none">
                            {{ $thread->title }}
                        </a>
                    </h5>
                    <small class="text-muted">
                        By {{ $thread->user->name }} on {{ $thread->created_at->format('d M Y') }}
                    </small>
                </div>
                <div class="card-body">
                    <p>{{ Str::limit($thread->description, 150) }}</p>
                    <a href="{{ route('forum.show', $thread->id) }}" class="btn btn-link">Read More</a>
                </div>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $threads->links() }}
        </div>
    @else
        <p class="text-center">No threads available. Be the first to create a new thread!</p>
    @endif
</div>
@endsection
