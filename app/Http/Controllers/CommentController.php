<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function store(Request $request, Post $post)
    {
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->id();

        $post->comments()->save($comment);

        return redirect()->back();
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}

