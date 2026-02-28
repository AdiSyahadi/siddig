@extends('admin.layouts.app')

@section('title', isset($testimonial) ? 'Edit Testimonial' : 'Tambah Testimonial')
@section('page_title', isset($testimonial) ? 'Edit Testimonial' : 'Tambah Testimonial')

@section('content')
    <div class="max-w-3xl">
        <form method="POST"
              action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}"
              enctype="multipart/form-data"
              class="bg-surface border border-surface-border rounded-xl p-6 space-y-5">
            @csrf
            @if (isset($testimonial)) @method('PUT') @endif

            @if ($errors->any())
                <div class="p-3 bg-red-500/10 border border-red-500/20 rounded-xl">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-400">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Name *</label>
                    <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Company *</label>
                    <input type="text" name="company" value="{{ old('company', $testimonial->company ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Position (ID) *</label>
                    <input type="text" name="position_id" value="{{ old('position_id', $testimonial->position_id ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="CEO & Founder">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Position (EN) *</label>
                    <input type="text" name="position_en" value="{{ old('position_en', $testimonial->position_en ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="CEO & Founder">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Content (ID) *</label>
                    <textarea name="content_id" rows="4" required
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none">{{ old('content_id', $testimonial->content_id ?? '') }}</textarea>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Content (EN) *</label>
                    <textarea name="content_en" rows="4" required
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none">{{ old('content_en', $testimonial->content_en ?? '') }}</textarea>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Avatar</label>
                    <input type="file" name="avatar" accept="image/*"
                           class="w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-brand-500/10 file:text-brand-400 hover:file:bg-brand-500/20">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Rating *</label>
                    <select name="rating" required
                            class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                        @for ($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" {{ old('rating', $testimonial->rating ?? 5) == $i ? 'selected' : '' }}>{{ str_repeat('★', $i) }} ({{ $i }})</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
            </div>

            <div>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-surface-border bg-dark-800 text-brand-500 focus:ring-brand-500 focus:ring-offset-0">
                    <span class="text-sm text-gray-400">Active</span>
                </label>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-400 transition-colors">
                    {{ isset($testimonial) ? 'Update' : 'Simpan' }}
                </button>
                <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2.5 text-sm font-medium text-gray-400 border border-surface-border rounded-lg hover:text-white hover:border-gray-500 transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
