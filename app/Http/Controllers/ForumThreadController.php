<?php

namespace App\Http\Controllers;

use App\Models\ForumThread;
use Illuminate\Http\Request;

class ForumThreadController extends Controller
{
    public function index()
{
    $threads = ForumThread::paginate(10);
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

}
