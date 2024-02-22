<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Idea $idea)
    {
        $comment = Comment::create([
            'content' => $request->comment,
            'idea_id' => $idea->id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('idea.show', $idea->id)->with('success', 'Comment added successfully!');
    }
}
