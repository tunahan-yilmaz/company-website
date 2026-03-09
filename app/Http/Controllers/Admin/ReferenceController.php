<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::orderBy('order')->get();
        return view('admin.pages.references.index', compact('references'));
    }

    public function create()
    {
        return view('admin.pages.references.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'website_url', 'description', 'order']);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('logo_image')) {
            $data['logo_image'] = $request->file('logo_image')->store('references', 'public');
        }

        Reference::create($data);
        return redirect()->route('references.index')->with('success', 'Referans eklendi.');
    }

    public function edit(Reference $reference)
    {
        return view('admin.pages.references.edit', compact('reference'));
    }

    public function update(Request $request, Reference $reference)
    {
        $data = $request->only(['name', 'website_url', 'description', 'order']);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('logo_image')) {
            if ($reference->logo_image)
                Storage::disk('public')->delete($reference->logo_image);
            $data['logo_image'] = $request->file('logo_image')->store('references', 'public');
        }

        $reference->update($data);
        return redirect()->route('references.index')->with('success', 'Referans güncellendi.');
    }

    public function destroy(Reference $reference)
    {
        if ($reference->logo_image)
            Storage::disk('public')->delete($reference->logo_image);
        $reference->delete();
        return redirect()->route('references.index')->with('success', 'Referans silindi.');
    }
}
