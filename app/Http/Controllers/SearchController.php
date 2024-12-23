<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Thread;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Fetch blogs based on the search query
        $blogs = Blog::where('title', 'LIKE', "%{$query}%")
                     ->orWhere('content', 'LIKE', "%{$query}%")
                     ->paginate(10);

        // Fetch threads based on the search query
        $threads = Thread::where('title', 'LIKE', "%{$query}%")
                         ->orWhere('description', 'LIKE', "%{$query}%") // Assuming you want to search by description too
                         ->paginate(10);

        return view('search.results', compact('blogs', 'threads'));
    }
}
