<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => POST::latest()->with(['category', 'author'])->filter(request(['search', 'category', 'author']))->paginate()->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
