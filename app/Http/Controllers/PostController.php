<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', [
            'posts' => Post::with('category', 'author')
                ->filter(request(['search', 'category', 'author']))
                ->latest()->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }
}
