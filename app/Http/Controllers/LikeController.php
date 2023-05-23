<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Post $post)
    {
        $user = auth()->user();
        $like = $post->likes()->where('user_id', $user->id)->first();
    
        if ($like) {
            // User has already liked the post, so remove the like
            $like->delete();
        } else {
            // User hasn't liked the post, so add the like
            $like = new Like();
            $like->user_id = $user->id;
            $post->likes()->save($like);
        }
    
        return response()->json(['success' => true]);
    }
    

}
