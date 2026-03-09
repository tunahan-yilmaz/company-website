<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    private function getLocales(): array
    {
        try {
            $setting = \App\Models\Setting::first();
            if ($setting && !empty($setting->available_locales)) {
                $raw = is_array($setting->available_locales)
                    ? $setting->available_locales
                    : json_decode($setting->available_locales, true);
                if (!empty($raw)) {
                    return array_values(array_unique(array_merge(['tr'], $raw)));
                }
            }
        } catch (\Exception $e) {
        }
        return ['tr', 'en'];
    }

    public function index()
    {
        $blogs = Blog::orderBy('order')->orderByDesc('created_at')->get();
        return view('admin.pages.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $locales = $this->getLocales();
        return view('admin.pages.blogs.create', compact('locales'));
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'subtitle',
            'slug',
            'author',
            'category',
            'excerpt',
            'content',
            'read_time',
            'meta_title',
            'meta_description',
            'order',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title'] . '-' . time());
        }
        $data['is_published'] = $request->boolean('is_published');
        $data['is_active'] = $request->boolean('is_active', true);
        $data['tags'] = $this->parseTags($request->input('tags_input'));
        $data['published_at'] = $data['is_published'] ? now() : null;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog = Blog::create($data);

        // Save translations
        if ($request->has('translations')) {
            $blog->saveTranslations($request->input('translations'));
        }

        return redirect()->route('blogs.index')->with('success', 'Blog yazısı eklendi.');
    }

    public function edit(Blog $blog)
    {
        $locales = $this->getLocales();
        $translationsData = $blog->load('translations')->getTranslationsArray();
        return view('admin.pages.blogs.edit', compact('blog', 'locales', 'translationsData'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->only([
            'title',
            'subtitle',
            'slug',
            'author',
            'category',
            'excerpt',
            'content',
            'read_time',
            'meta_title',
            'meta_description',
            'order',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title'] . '-' . $blog->id);
        }
        $data['is_published'] = $request->boolean('is_published');
        $data['is_active'] = $request->boolean('is_active', true);
        $data['tags'] = $this->parseTags($request->input('tags_input'));
        if ($data['is_published'] && !$blog->published_at) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            if ($blog->image)
                Storage::disk('public')->delete($blog->image);
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($data);

        if ($request->has('translations')) {
            $blog->saveTranslations($request->input('translations'));
        }

        return redirect()->route('blogs.index')->with('success', 'Blog yazısı güncellendi.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image)
            Storage::disk('public')->delete($blog->image);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog yazısı silindi.');
    }

    private function parseTags(?string $value): array
    {
        if (!$value)
            return [];
        return array_values(array_filter(array_map('trim', explode(',', $value))));
    }
}
