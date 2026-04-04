<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\TeamMember;
use App\Models\TimelineEvent;

class AboutController extends Controller
{
    public function index()
    {
        $about    = About::first();
        $team     = TeamMember::orderBy('order')->get();
        $timeline = TimelineEvent::orderBy('year')->get();

        return view('site.pages.about', compact('about', 'team', 'timeline'));
    }
}
