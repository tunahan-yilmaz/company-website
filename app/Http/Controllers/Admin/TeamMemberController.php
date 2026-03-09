<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
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
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|max:5120',
        ]);

        $data = $request->only(['name', 'role', 'linkedin_url', 'twitter_url', 'github_url', 'dribbble_url', 'behance_url', 'bio', 'order']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        TeamMember::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Ekip üyesi başarıyla eklendi.');
    }

    public function edit(TeamMember $team)
    {
        return view('admin.pages.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|max:5120',
        ]);

        $data = $request->only(['name', 'role', 'linkedin_url', 'twitter_url', 'github_url', 'dribbble_url', 'behance_url', 'bio', 'order']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($team->image)
                Storage::disk('public')->delete($team->image);
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Ekip üyesi başarıyla güncellendi.');
    }

    public function destroy(TeamMember $team)
    {
        if ($team->image)
            Storage::disk('public')->delete($team->image);
        $team->delete();
        return back()->with('success', 'Ekip üyesi başarıyla silindi.');
    }
}
