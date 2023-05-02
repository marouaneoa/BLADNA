<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Picture;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
    
        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
    
        if ($request->hasFile('picture')) {
            foreach ($request->file('picture') as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/posts_images', $filename);
                $picture = Picture::create([
                    'path' => basename($path), 
                    'post_id' => $post->id,
                ]);
            }
        }
        
    
        return redirect()->route('posts.show', $post);
    }
    

    

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function more()
{
    $posts = Post::with('pictures')->orderByDesc('created_at')->take(10)->get();
    return view('posts.index', compact('posts'));
}

}

