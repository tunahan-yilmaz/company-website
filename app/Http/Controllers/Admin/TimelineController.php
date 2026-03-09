<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimelineEvent;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $events = TimelineEvent::orderBy('year')->get();
        return view('admin.pages.timeline.index', compact('events'));
    }

    public function create()
    {
        return view('admin.pages.timeline.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['year', 'title', 'description', 'order']);
        TimelineEvent::create($data);
        return redirect()->route('timeline.index')->with('success', 'Timeline olayı eklendi.');
    }

    public function edit(TimelineEvent $timeline)
    {
        return view('admin.pages.timeline.edit', compact('timeline'));
    }

    public function update(Request $request, TimelineEvent $timeline)
    {
        $timeline->update($request->only(['year', 'title', 'description', 'order']));
        return redirect()->route('timeline.index')->with('success', 'Timeline olayı güncellendi.');
    }

    public function destroy(TimelineEvent $timeline)
    {
        $timeline->delete();
        return back()->with('success', 'Timeline olayı silindi.');
    }
}
