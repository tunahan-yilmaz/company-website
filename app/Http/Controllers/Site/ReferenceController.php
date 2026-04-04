<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Reference;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::where('is_active', true)->orderBy('order')->get();
        return view('site.pages.references', compact('references'));
    }
}
