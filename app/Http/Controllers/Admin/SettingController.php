<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
    {
        $settings = Setting::firstOrCreate([]);
        return view('admin.pages.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = Setting::firstOrCreate([]);

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

        foreach (['logo', 'logo_dark', 'favicon'] as $field) {
            if ($request->hasFile($field)) {
                if ($settings->$field)
                    Storage::disk('public')->delete($settings->$field);
                $data[$field] = $request->file($field)->store('settings', 'public');
            }
        }

        $settings->update($data);

        return redirect()->route('admin.settings.edit')->with('success', 'Ayarlar başarıyla güncellendi.');
    }
}
