<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::ordered()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position_id' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content_id' => 'required|string',
            'content_en' => 'required|string',
            'avatar' => 'nullable|image|max:1024',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position_id' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content_id' => 'required|string',
            'content_en' => 'required|string',
            'avatar' => 'nullable|image|max:1024',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil dihapus.');
    }
}
