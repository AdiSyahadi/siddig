@extends('admin.layouts.app')

@section('title', isset($package) ? 'Edit Paket' : 'Tambah Paket')
@section('page_title', isset($package) ? 'Edit Paket' : 'Tambah Paket')

@section('content')
    <div class="max-w-3xl">
        <form method="POST"
              action="{{ isset($package) ? route('admin.pricing.update', $package) : route('admin.pricing.store') }}"
              class="bg-surface border border-surface-border rounded-xl p-6 space-y-5">
            @csrf
            @if (isset($package)) @method('PUT') @endif

            @if ($errors->any())
                <div class="p-3 bg-red-500/10 border border-red-500/20 rounded-xl">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-400">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Package Name *</label>
                    <input type="text" name="name" value="{{ old('name', $package->name ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="Professional">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Price (IDR) *</label>
                    <input type="number" name="price" value="{{ old('price', $package->price ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="8500000">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Subtitle (ID) *</label>
                    <input type="text" name="subtitle_id" value="{{ old('subtitle_id', $package->subtitle_id ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="Untuk bisnis berkembang">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Subtitle (EN) *</label>
                    <input type="text" name="subtitle_en" value="{{ old('subtitle_en', $package->subtitle_en ?? '') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="For growing businesses">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Price Label (ID) *</label>
                    <input type="text" name="price_label_id" value="{{ old('price_label_id', $package->price_label_id ?? 'Juta') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Price Label (EN) *</label>
                    <input type="text" name="price_label_en" value="{{ old('price_label_en', $package->price_label_en ?? 'M IDR') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Features (ID) * <span class="text-gray-500">satu per baris</span></label>
                    <textarea name="features_id" rows="6" required
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none"
                              placeholder="Hingga 5 halaman&#10;Desain responsif mobile&#10;Form kontak + WhatsApp">{{ old('features_id', isset($package) ? implode("\n", $package->features_id ?? []) : '') }}</textarea>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Features (EN) * <span class="text-gray-500">one per line</span></label>
                    <textarea name="features_en" rows="6" required
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none"
                              placeholder="Up to 5 pages&#10;Responsive mobile design&#10;Contact form + WhatsApp">{{ old('features_en', isset($package) ? implode("\n", $package->features_en ?? []) : '') }}</textarea>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">CTA Label (ID) *</label>
                    <input type="text" name="cta_label_id" value="{{ old('cta_label_id', $package->cta_label_id ?? 'Mulai Sekarang') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">CTA Label (EN) *</label>
                    <input type="text" name="cta_label_en" value="{{ old('cta_label_en', $package->cta_label_en ?? 'Get Started') }}" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-400 mb-1.5">WhatsApp Message</label>
                <input type="text" name="wa_message" value="{{ old('wa_message', $package->wa_message ?? '') }}"
                       class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                       placeholder="Halo SidodadiDigital, saya tertarik paket Professional">
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $package->sort_order ?? 0) }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
                <div class="flex items-end pb-2">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_popular" value="1" {{ old('is_popular', $package->is_popular ?? false) ? 'checked' : '' }}
                               class="w-4 h-4 rounded border-surface-border bg-dark-800 text-brand-500 focus:ring-brand-500 focus:ring-offset-0">
                        <span class="text-sm text-gray-400">Popular</span>
                    </label>
                </div>
                <div class="flex items-end pb-2">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $package->is_active ?? true) ? 'checked' : '' }}
                               class="w-4 h-4 rounded border-surface-border bg-dark-800 text-brand-500 focus:ring-brand-500 focus:ring-offset-0">
                        <span class="text-sm text-gray-400">Active</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-400 transition-colors">
                    {{ isset($package) ? 'Update' : 'Simpan' }}
                </button>
                <a href="{{ route('admin.pricing.index') }}" class="px-6 py-2.5 text-sm font-medium text-gray-400 border border-surface-border rounded-lg hover:text-white hover:border-gray-500 transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
