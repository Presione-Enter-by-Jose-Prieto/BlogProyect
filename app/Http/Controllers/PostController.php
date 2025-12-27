<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('app.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'new_category' => 'nullable|string|max:255',
        ]);

        if (!empty($data['new_category'])) {
            $category = Category::firstOrCreate(
                ['name' => $data['new_category']],
                ['slug' => Str::slug($data['new_category'])]
            );
            $categoryId = $category->id;
        } else {
            $categoryId = $data['category_id'] ?? null;
        }

        $post = Post::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']) . '-' . time(),
            'content' => $data['content'],
            'excerpt' => $data['excerpt'],
            'category_id' => $categoryId,
            'author_id' => Auth::id(),
        ]);

        return redirect()->route('home.index')->with('success', 'Publicación creada.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
