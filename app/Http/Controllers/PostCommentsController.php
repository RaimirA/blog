<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        \request()->validate([
            'body' => 'required'
        ]);

        Comment::factory()->create([
           'post_id' => $post->id,
           'user_id' => auth()->user()->id,
           'body' => \request('body')
        ]);

        return redirect()->back()->with('success', 'Commented on post ' . $post->title);
    }
}
