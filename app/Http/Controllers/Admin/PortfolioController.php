<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::ordered()->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|in:company-profile,ecommerce,landing-page,web-app',
            'description_id' => 'required|string',
            'description_en' => 'required|string',
            'tech_stack' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'url' => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable',
        ]);

        $validated['tech_stack'] = array_map('trim', explode(',', $validated['tech_stack']));
        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('portfolios', 'public');
        }

        Portfolio::create($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil ditambahkan.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.form', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|in:company-profile,ecommerce,landing-page,web-app',
            'description_id' => 'required|string',
            'description_en' => 'required|string',
            'tech_stack' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'url' => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable',
        ]);

        $validated['tech_stack'] = array_map('trim', explode(',', $validated['tech_stack']));
        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil diperbarui.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil dihapus.');
    }
}
