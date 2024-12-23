<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $threads = Thread::latest()->paginate(10);
        return view('forum.index', compact('threads'));
    }

    public function create()
    {
        return view('forum.create');  
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);
    
        ForumThread::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'user_id' => auth()->id(),
        ]);
    
        return redirect()->route('forum.index');
    }

    public function show($id)
    {
        $thread = Thread::findOrFail($id);
        return view('forum.show', compact('thread'));
    }
}
