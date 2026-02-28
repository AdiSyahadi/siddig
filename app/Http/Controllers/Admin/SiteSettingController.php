<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'og_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120', 'dimensions:min_width=600,min_height=315'],
        ]);

        // Handle OG image file upload
        if ($request->hasFile('og_image')) {
            $file = $request->file('og_image');
            $filename = 'og-cover.' . $file->getClientOriginalExtension();
            $file->storeAs('', $filename, 'public');
            SiteSetting::setValue('og_image_url', 'storage/' . $filename);
        }

        // Save all non-file settings
        $data = $request->except(['_token', 'og_image']);

        foreach ($data as $key => $value) {
            SiteSetting::setValue($key, $value);
        }

        SiteSetting::clearCache();

        return redirect()->route('admin.settings.index')->with('success', 'Settings berhasil disimpan.');
    }
}
