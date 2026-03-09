<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('order')->get();
        return view('admin.pages.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'uptitle',
            'title',
            'subtitle',
            'btn_text',
            'btn_url',
            'btn_text_2',
            'btn_url_2',
            'order',
        ]);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        Slider::create($data);
        return redirect()->route('sliders.index')->with('success', 'Slider eklendi.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.pages.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $data = $request->only([
            'uptitle',
            'title',
            'subtitle',
            'btn_text',
            'btn_url',
            'btn_text_2',
            'btn_url_2',
            'order',
        ]);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('image')) {
            if ($slider->image)
                Storage::disk('public')->delete($slider->image);
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        $slider->update($data);
        return redirect()->route('sliders.index')->with('success', 'Slider güncellendi.');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image)
            Storage::disk('public')->delete($slider->image);
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider silindi.');
    }
}
