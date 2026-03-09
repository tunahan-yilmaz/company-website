<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.pages.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.pages.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'badge_text',
            'icon',
            'short_description',
            'detail_text',
            'cta_text',
            'section_id',
            'order',
        ]);
        $data['slug'] = Str::slug($data['title']);
        $data['is_active'] = $request->boolean('is_active', true);

        // JSON arrays
        $data['features'] = $this->parseJsonArray($request->input('features_json'));
        $data['tech_stack'] = $this->parseJsonArray($request->input('tech_stack_json'));

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);
        return redirect()->route('services.index')->with('success', 'Hizmet eklendi.');
    }

    public function edit(Service $service)
    {
        return view('admin.pages.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->only([
            'title',
            'badge_text',
            'icon',
            'short_description',
            'detail_text',
            'cta_text',
            'section_id',
            'order',
        ]);
        $data['slug'] = Str::slug($data['title']);
        $data['is_active'] = $request->boolean('is_active', true);

        $data['features'] = $this->parseJsonArray($request->input('features_json'));
        $data['tech_stack'] = $this->parseJsonArray($request->input('tech_stack_json'));

        if ($request->hasFile('image')) {
            if ($service->image)
                Storage::disk('public')->delete($service->image);
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($data);
        return redirect()->route('services.index')->with('success', 'Hizmet güncellendi.');
    }

    public function destroy(Service $service)
    {
        if ($service->image)
            Storage::disk('public')->delete($service->image);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Hizmet silindi.');
    }

    private function parseJsonArray(?string $value): array
    {
        if (!$value)
            return [];
        $lines = array_filter(array_map('trim', explode("\n", $value)));
        return array_values($lines);
    }
}
