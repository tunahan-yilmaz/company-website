<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::firstOrCreate(['id' => 1]);
        return view('admin.pages.settings.index', compact('settings'));
    }

    public function update(Request $request, Setting $settings)
    {
        $data = $request->only([
            'site_name',
            'site_title',
            'meta_description',
            'phone',
            'whatsapp',
            'email',
            'address',
            'map_url',
            'map_frame',
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            'youtube',
            'mini_about',
        ]);

        if ($request->hasFile('logo')) {
            if ($settings->logo)
                Storage::disk('public')->delete($settings->logo);
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }
        if ($request->hasFile('logo_black')) {
            if ($settings->logo_black)
                Storage::disk('public')->delete($settings->logo_black);
            $data['logo_black'] = $request->file('logo_black')->store('settings', 'public');
        }
        if ($request->hasFile('favicon')) {
            if ($settings->favicon)
                Storage::disk('public')->delete($settings->favicon);
            $data['favicon'] = $request->file('favicon')->store('settings', 'public');
        }

        $settings->update($data);
        return redirect()->route('settings.index')->with('success', 'Ayarlar güncellendi.');
    }
}
