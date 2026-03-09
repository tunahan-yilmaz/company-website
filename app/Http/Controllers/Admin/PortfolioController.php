<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
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
        $portfolios = Portfolio::with('category')->orderBy('order')->get();
        return view('admin.pages.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = PortfolioCategory::orderBy('name')->get();
        $locales = $this->getLocales();
        return view('admin.pages.portfolios.create', compact('categories', 'locales'));
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'portfolio_category_id',
            'title',
            'subtitle',
            'slug',
            'description',
            'detail_text',
            'challenge',
            'project_url',
            'client_name',
            'date',
            'duration',
            'team_size',
            'budget',
            'location',
            'order',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title'] . '-' . time());
        }
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active'] = $request->boolean('is_active', true);

        // JSON fields from newline-delimited textareas
        $data['tags'] = $this->parseLines($request->input('tags_input'));
        $data['tech_stack'] = $this->parseLines($request->input('tech_stack_input'));
        $data['features'] = $this->parseLines($request->input('features_input'));

        // Results: [{value, label}, ...]
        $data['results'] = $this->parseResults(
            $request->input('result_values', []),
            $request->input('result_labels', [])
        );

        // Cover image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolios', 'public');
        }

        // Gallery images (up to 5)
        $gallery = [];
        foreach ($request->file('gallery_images', []) as $file) {
            $gallery[] = $file->store('portfolios/gallery', 'public');
        }
        $data['gallery_images'] = $gallery;

        $portfolio = Portfolio::create($data);

        if ($request->has('translations')) {
            $portfolio->saveTranslations($request->input('translations'));
        }

        return redirect()->route('portfolios.index')->with('success', 'Portfolyo eklendi.');
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = PortfolioCategory::orderBy('name')->get();
        $locales = $this->getLocales();
        $translationsData = $portfolio->load('translations')->getTranslationsArray();
        return view('admin.pages.portfolios.edit', compact('portfolio', 'categories', 'locales', 'translationsData'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->only([
            'portfolio_category_id',
            'title',
            'subtitle',
            'slug',
            'description',
            'detail_text',
            'challenge',
            'project_url',
            'client_name',
            'date',
            'duration',
            'team_size',
            'budget',
            'location',
            'order',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title'] . '-' . $portfolio->id);
        }
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active'] = $request->boolean('is_active', true);

        $data['tags'] = $this->parseLines($request->input('tags_input'));
        $data['tech_stack'] = $this->parseLines($request->input('tech_stack_input'));
        $data['features'] = $this->parseLines($request->input('features_input'));
        $data['results'] = $this->parseResults(
            $request->input('result_values', []),
            $request->input('result_labels', [])
        );

        if ($request->hasFile('image')) {
            if ($portfolio->image)
                Storage::disk('public')->delete($portfolio->image);
            $data['image'] = $request->file('image')->store('portfolios', 'public');
        }

        if ($request->hasFile('gallery_images')) {
            // Delete old gallery
            foreach ($portfolio->gallery_images ?? [] as $old) {
                Storage::disk('public')->delete($old);
            }
            $gallery = [];
            foreach ($request->file('gallery_images') as $file) {
                $gallery[] = $file->store('portfolios/gallery', 'public');
            }
            $data['gallery_images'] = $gallery;
        }

        $portfolio->update($data);

        if ($request->has('translations')) {
            $portfolio->saveTranslations($request->input('translations'));
        }

        return redirect()->route('portfolios.index')->with('success', 'Portfolyo güncellendi.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image)
            Storage::disk('public')->delete($portfolio->image);
        foreach ($portfolio->gallery_images ?? [] as $img) {
            Storage::disk('public')->delete($img);
        }
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolyo silindi.');
    }

    private function parseLines(?string $value): array
    {
        if (!$value)
            return [];
        return array_values(array_filter(array_map('trim', explode("\n", $value))));
    }

    private function parseResults(array $values, array $labels): array
    {
        $results = [];
        foreach ($values as $i => $val) {
            if (!empty($val) || !empty($labels[$i] ?? '')) {
                $results[] = ['value' => $val, 'label' => $labels[$i] ?? ''];
            }
        }
        return $results;
    }
}
