<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('site.pages.services', compact('services'));
    }

    public function show(string $slug)
    {
        $service  = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $related  = Service::where('is_active', true)->where('id', '!=', $service->id)->orderBy('order')->take(3)->get();
        return view('site.pages.service-detail', compact('service', 'related'));
    }
}
