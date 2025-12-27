<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->orderBy('created_at', 'desc')->get();
        return view('app.blog.index', compact('posts'));
    }
}
