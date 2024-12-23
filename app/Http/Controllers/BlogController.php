<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Thread;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Initialize variables for blogs and threads
        $blogs = [];
        $threads = [];

        // If a query is provided, perform searches
        if ($query) {
            // Fetch blogs based on the search query
            $blogs = Blog::where('title', 'LIKE', "%{$query}%")
                         ->orWhere('content', 'LIKE', "%{$query}%")
                         ->paginate(10);

            // Fetch threads based on the search query
            $threads = Thread::where('title', 'LIKE', "%{$query}%")
                             ->orWhere('description', 'LIKE', "%{$query}%") // Assuming you want to search by description too
                             ->paginate(10);
        } else {
            // If no query is provided, fetch all blogs
            $blogs = Blog::paginate(10);
        }

        return view('blogs.index', compact('blogs', 'threads'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('blogs.index');
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $blog->update($validated);
        return redirect()->route('blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index');
    }

    /**
     * Display a specific blog post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Retrieve the blog post by ID or fail with a 404 error
        $blog = Blog::findOrFail($id); // This will throw a 404 error if not found

        return view('blogs.show', compact('blog')); // Adjust the view name as necessary
    }
}
