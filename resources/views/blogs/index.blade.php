@extends('layouts.app') 

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Our Blogs</h1>

        <!-- Search Form -->
        <div class="row mb-4">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('search') }}" method="GET" class="d-flex">
                    <input type="text" name="query" class="form-control me-2" placeholder="Search blogs or threads..." required>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>

        <!-- Blog Items -->
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('image/sample-blog.jpg') }}" alt="{{ $blog->title }}" class="card-img-top"> <!-- Replace with actual image path -->
                        <div class="card-body">
                            <h3 class="card-title">{{ $blog->title }}</h3>
                            <p class="card-text">{{ Str::limit($blog->content, 150) }}</p>
                            <p class="text-muted">By: {{ $blog->author->name }}</p> <!-- Assuming you have an author relationship -->
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-success">Read More</a> <!-- Link to specific blog post -->
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Static Example Blog Entries -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://green.org/wp-content/uploads/2024/01/The-Moral-Imperative-of-Responsible-Waste-Managements.png" alt="The Moral Imperative of Responsible Waste Management" class="card-img-top"> 
                    <div class="card-body">
                        <h3 class="card-title">The Moral Imperative of Responsible Waste Management</h3>
                        <p class="card-text">Understanding the importance of responsible waste management is crucial for sustainable development and environmental health.</p>
                        <p class="text-muted">By: John Doe</p> 
                        <a href="{{ route('blog.show', 1) }}" class="btn btn-success">Read More</a> <!-- Adjust the ID accordingly -->
                    </div>
                </div>
            </div>

            <!-- Additional Static Blog Entries -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('image/sustainable-living.jpg') }}" alt="The Importance of Sustainable Living" class="card-img-top"> 
                    <div class="card-body">
                        <h3 class="card-title">The Importance of Sustainable Living</h3>
                        <p class="card-text">Sustainable living is a lifestyle that attempts to reduce an individual's or society's use of the Earth's natural resources.</p>
                        <p class="text-muted">By: Jane Smith</p> 
                        <a href="{{ route('blog.show', 2) }}" class="btn btn-success">Read More</a> <!-- Adjust the ID accordingly -->
                    </div>
                </div>
            </div>

            <!-- New Blog Entries -->
            @foreach ([
                ['title' => 'Waste Reduction Techniques', 'content' => 'Learn effective techniques to reduce waste in your daily life.', 'author' => 'Alice Green', 'image' => 'image/waste-reduction.jpg', 'id' => 3],
                ['title' => 'The Impact of Plastic Pollution', 'content' => 'Exploring the effects of plastic pollution on marine life and ecosystems.', 'author' => 'David White', 'image' => 'image/plastic-pollution.jpg', 'id' => 4],
                ['title' => 'Eco-Friendly Home Improvements', 'content' => 'Simple home improvements that can make your living space more eco-friendly.', 'author' => 'Laura Black', 'image' => 'image/eco-home.jpg', 'id' => 5],
                ['title' => 'Community Gardening Initiatives', 'content' => 'How community gardens can foster sustainability and community spirit.', 'author' => 'Chris Blue', 'image' => 'image/community-garden.jpg', 'id' => 6],
                ['title' => 'Green Technology Innovations', 'content' => 'A look at innovative technologies that promote sustainability.', 'author' => 'Emma Red', 'image' => 'image/green-tech.jpg', 'id' => 7],
                ['title' => 'The Benefits of Organic Farming', 'content' => 'Understanding how organic farming benefits both health and the environment.', 'author' => 'James Yellow', 'image' => 'image/organic-farming.jpg', 'id' => 8],
                ['title' => 'Climate Action: What You Can Do', 'content' => 'Practical steps individuals can take to combat climate change.', 'author' => 'Olivia Purple', 'image' => 'image/climate-change.jpg', 'id' => 9],
            ] as $newBlog)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset($newBlog['image']) }}" alt="{{ $newBlog['title'] }}" class="card-img-top"> 
                        <div class="card-body">
                            <h3 class="card-title">{{ $newBlog['title'] }}</h3>
                            <p class="card-text">{{ Str::limit($newBlog['content'], 150) }}</p>
                            <p class="text-muted">By: {{ $newBlog['author'] }}</p> 
                            {{-- Link to specific blog post --}}
                            <a href="{{ route('blog.show', $newBlog['id']) }}" class="btn btn-success">Read More</a> 
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Results Section -->
        @if(isset($blogs) && count($blogs) > 0 || isset($threads) && count($threads) > 0)
            <h3 class="mt-5">Results:</h3>

            @if(isset($blogs) && count($blogs) > 0)
                <h4>Blogs</h4>
                @foreach($blogs as $blog)
                    <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a><br>
                @endforeach
            @else
                <p>No blogs found.</p>
            @endif

            @if(isset($threads) && count($threads) > 0)
                <h4>Threads</h4>
                @foreach($threads as $thread)
                    <a href="{{ route('forum.show', $thread->id) }}">{{ $thread->title }}</a><br>
                @endforeach
            @else
                <p>No threads found.</p>
            @endif
        @endif

        <!-- Display pagination for blogs -->
        {{ $blogs->links() }}
    </div>
@endsection
