<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class PortfolioController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::withCount(['portfolios' => function ($q) {
            $q->where('is_active', true);
        }])->orderBy('order')->get();

        $categorySlug = request('kategori');
        $query = Portfolio::where('is_active', true)->orderBy('order');

        if ($categorySlug) {
            $query->whereHas('category', fn($q) => $q->where('slug', $categorySlug));
        }

        $portfolios = $query->get();
        $currentCategory = $categorySlug;

        return view('site.pages.portfolio', compact('portfolios', 'categories', 'currentCategory'));
    }

    public function show(string $slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $related   = Portfolio::where('is_active', true)
            ->where('id', '!=', $portfolio->id)
            ->where('portfolio_category_id', $portfolio->portfolio_category_id)
            ->orderBy('order')
            ->take(3)
            ->get();

        return view('site.pages.portfolio-detail', compact('portfolio', 'related'));
    }
}
