<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $packages = PricingPackage::ordered()->paginate(10);
        return view('admin.pricing.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.pricing.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subtitle_id' => 'required|string|max:255',
            'subtitle_en' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'price_label_id' => 'required|string|max:50',
            'price_label_en' => 'required|string|max:50',
            'features_id' => 'required|string',
            'features_en' => 'required|string',
            'cta_label_id' => 'required|string|max:100',
            'cta_label_en' => 'required|string|max:100',
            'wa_message' => 'nullable|string|max:500',
            'is_popular' => 'nullable',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable',
        ]);

        $validated['features_id'] = array_filter(array_map('trim', explode("\n", $validated['features_id'])));
        $validated['features_en'] = array_filter(array_map('trim', explode("\n", $validated['features_en'])));
        $validated['is_popular'] = $request->has('is_popular');
        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        PricingPackage::create($validated);

        return redirect()->route('admin.pricing.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit(PricingPackage $pricing)
    {
        return view('admin.pricing.form', ['package' => $pricing]);
    }

    public function update(Request $request, PricingPackage $pricing)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subtitle_id' => 'required|string|max:255',
            'subtitle_en' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'price_label_id' => 'required|string|max:50',
            'price_label_en' => 'required|string|max:50',
            'features_id' => 'required|string',
            'features_en' => 'required|string',
            'cta_label_id' => 'required|string|max:100',
            'cta_label_en' => 'required|string|max:100',
            'wa_message' => 'nullable|string|max:500',
            'is_popular' => 'nullable',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable',
        ]);

        $validated['features_id'] = array_filter(array_map('trim', explode("\n", $validated['features_id'])));
        $validated['features_en'] = array_filter(array_map('trim', explode("\n", $validated['features_en'])));
        $validated['is_popular'] = $request->has('is_popular');
        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $pricing->update($validated);

        return redirect()->route('admin.pricing.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy(PricingPackage $pricing)
    {
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Paket berhasil dihapus.');
    }
}
