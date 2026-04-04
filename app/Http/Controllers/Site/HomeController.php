<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Reference;
use App\Models\About;
use App\Models\Setting;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $sliders    = Slider::where('is_active', true)->orderBy('order')->get();
        $services   = Service::where('is_active', true)->orderBy('order')->get();
        $portfolios = Portfolio::where('is_active', true)->orderBy('order')->get()->take(6);
        $references = Reference::where('is_active', true)->orderBy('order')->get();
        $about      = About::first();
        $blogs      = Blog::where('is_active', true)->orderByDesc('created_at')->take(3)->get();

        return view('site.pages.index', compact(
            'sliders', 'services', 'portfolios', 'references', 'about', 'blogs'
        ));
    }
}
