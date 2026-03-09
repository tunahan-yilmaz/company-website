<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::orderBy('name')->get();
        return view('admin.pages.portfolio-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.portfolio-categories.create');
    }

    public function store(Request $request)
    {
        PortfolioCategory::create($request->only(['name', 'slug', 'order']));
        return redirect()->route('portfolio-categories.index')->with('success', 'Kategori eklendi.');
    }

    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('admin.pages.portfolio-categories.edit', compact('portfolioCategory'));
    }

    public function update(Request $request, PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->update($request->only(['name', 'slug', 'order']));
        return redirect()->route('portfolio-categories.index')->with('success', 'Kategori güncellendi.');
    }

    public function destroy(PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->delete();
        return back()->with('success', 'Kategori silindi.');
    }
}
