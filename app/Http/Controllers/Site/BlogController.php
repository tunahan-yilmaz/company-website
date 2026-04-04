<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_active', true)
            ->where('is_published', true)
            ->orderByDesc('created_at')
            ->paginate(9);

        $categories = Blog::where('is_active', true)
            ->where('is_published', true)
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        return view('site.pages.blog', compact('blogs', 'categories'));
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', true)
            ->where('is_published', true)
            ->firstOrFail();

        $related = Blog::where('is_active', true)
            ->where('is_published', true)
            ->where('id', '!=', $blog->id)
            ->where('category', $blog->category)
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        return view('site.pages.blog-detail', compact('blog', 'related'));
    }
}
