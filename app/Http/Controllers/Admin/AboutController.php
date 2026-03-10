<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::firstOrCreate(['id' => 1]);
        return view('admin.pages.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $data = $request->only([
            'title',
            'about_text',
            'mission',
            'vision',
            'values',
            'stat_1_number', 'stat_1_label',
            'stat_2_number', 'stat_2_label',
            'stat_3_number', 'stat_3_label',
            'stat_4_number', 'stat_4_label',
        ]);

        if ($request->hasFile('image_1')) {
            if ($about->image_1) Storage::disk('public')->delete($about->image_1);
            $data['image_1'] = $request->file('image_1')->store('about', 'public');
        }
        if ($request->hasFile('image_2')) {
            if ($about->image_2) Storage::disk('public')->delete($about->image_2);
            $data['image_2'] = $request->file('image_2')->store('about', 'public');
        }

        $about->update($data);
        return redirect()->route('about.index')->with('success', 'Kurumsal bilgiler güncellendi.');
    }
}
