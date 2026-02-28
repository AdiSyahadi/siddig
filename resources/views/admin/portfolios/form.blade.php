@extends('admin.layouts.app')

@section('title', isset($portfolio) ? 'Edit Portfolio' : 'Tambah Portfolio')
@section('page_title', isset($portfolio) ? 'Edit Portfolio' : 'Tambah Portfolio')

@section('content')
    <div class="max-w-3xl">
        <form method="POST"
              action="{{ isset($portfolio) ? route('admin.portfolios.update', $portfolio) : route('admin.portfolios.store') }}"
              enctype="multipart/form-data"
              class="bg-surface border border-surface-border rounded-xl p-6 space-y-5">
            @csrf
            @if (isset($portfolio)) @method('PUT') @endif

            @if ($errors->any())
                <div class="p-3 bg-red-500/10 border border-red-500/20 rounded-xl">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-400">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div>
                <label class="block text-sm text-gray-400 mb-1.5">Title *</label>
                <input type="text" name="title" value="{{ old('title', $portfolio->title ?? '') }}" required
                       class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1.5">Category *</label>
                <select name="category" required
                        class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                    <option value="">-- Pilih --</option>
                    @foreach (['company-profile' => 'Company Profile', 'ecommerce' => 'E-Commerce', 'landing-page' => 'Landing Page', 'web-app' => 'Web App'] as $val => $label)
                        <option value="{{ $val }}" {{ old('category', $portfolio->category ?? '') === $val ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Deskripsi (ID) *</label>
                    <textarea name="description_id" rows="3" required
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none">{{ old('description_id', $portfolio->description_id ?? '') }}</textarea>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Description (EN) *</label>
                    <textarea name="description_en" rows="3" required
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none">{{ old('description_en', $portfolio->description_en ?? '') }}</textarea>
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1.5">Tech Stack * <span class="text-gray-500">(pisahkan dengan koma)</span></label>
                <input type="text" name="tech_stack" value="{{ old('tech_stack', isset($portfolio) ? implode(', ', $portfolio->tech_stack ?? []) : '') }}" required
                       class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                       placeholder="Laravel, Vue.js, MySQL">
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1.5">Image</label>
                <input type="file" name="image" accept="image/*"
                       class="w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-brand-500/10 file:text-brand-400 hover:file:bg-brand-500/20">
                @if (isset($portfolio) && $portfolio->image)
                    <p class="mt-1 text-xs text-gray-500">Current: {{ $portfolio->image }}</p>
                @endif
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1.5">URL (optional)</label>
                <input type="url" name="url" value="{{ old('url', $portfolio->url ?? '') }}"
                       class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                       placeholder="https://example.com">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $portfolio->sort_order ?? 0) }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
                <div class="flex items-end pb-2">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $portfolio->is_active ?? true) ? 'checked' : '' }}
                               class="w-4 h-4 rounded border-surface-border bg-dark-800 text-brand-500 focus:ring-brand-500 focus:ring-offset-0">
                        <span class="text-sm text-gray-400">Active</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-400 transition-colors">
                    {{ isset($portfolio) ? 'Update' : 'Simpan' }}
                </button>
                <a href="{{ route('admin.portfolios.index') }}" class="px-6 py-2.5 text-sm font-medium text-gray-400 border border-surface-border rounded-lg hover:text-white hover:border-gray-500 transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
