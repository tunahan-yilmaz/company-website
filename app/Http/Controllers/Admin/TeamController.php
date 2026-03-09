<?php

namespace App\Http\Controllers\Admin;

use App\Models\TeamMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('order')->get();
        return view('admin.pages.team.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.pages.team.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'role', 'bio', 'order', 'linkedin_url', 'twitter_url', 'github_url']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        TeamMember::create($data);
        return redirect()->route('team.index')->with('success', 'Ekip üyesi eklendi.');
    }

    public function edit(TeamMember $team)
    {
        return view('admin.pages.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $data = $request->only(['name', 'role', 'bio', 'order', 'linkedin_url', 'twitter_url', 'github_url']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($team->image)
                Storage::disk('public')->delete($team->image);
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        $team->update($data);
        return redirect()->route('team.index')->with('success', 'Ekip üyesi güncellendi.');
    }

    public function destroy(TeamMember $team)
    {
        if ($team->image)
            Storage::disk('public')->delete($team->image);
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Ekip üyesi silindi.');
    }
}
