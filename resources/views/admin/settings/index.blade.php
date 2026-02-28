@extends('admin.layouts.app')

@section('title', 'Settings')
@section('page_title', 'Site Settings')

@section('content')
    <form method="POST" action="{{ route('admin.settings.update') }}" class="space-y-8 max-w-3xl">
        @csrf

        {{-- General --}}
        <div class="bg-surface border border-surface-border rounded-xl p-6">
            <h2 class="text-base font-semibold text-white mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                General
            </h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Site Name</label>
                    <input type="text" name="site_name" value="{{ \App\Models\SiteSetting::getValue('site_name', 'SidodadiDigital') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Site Description</label>
                    <textarea name="site_description" rows="2"
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none">{{ \App\Models\SiteSetting::getValue('site_description', 'Jasa Pembuatan Website Profesional') }}</textarea>
                </div>
            </div>
        </div>

        {{-- Contact Info --}}
        <div class="bg-surface border border-surface-border rounded-xl p-6">
            <h2 class="text-base font-semibold text-white mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Contact Info
            </h2>
            <div class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">Email</label>
                        <input type="email" name="contact_email" value="{{ \App\Models\SiteSetting::getValue('contact_email', 'hello@sidodadidigital.com') }}"
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">WhatsApp Number</label>
                        <input type="text" name="contact_whatsapp" value="{{ \App\Models\SiteSetting::getValue('contact_whatsapp', '6281234567890') }}"
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                               placeholder="6281234567890">
                    </div>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Address</label>
                    <input type="text" name="contact_address" value="{{ \App\Models\SiteSetting::getValue('contact_address', 'Surabaya, Jawa Timur') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none">
                </div>
            </div>
        </div>

        {{-- Social Media --}}
        <div class="bg-surface border border-surface-border rounded-xl p-6">
            <h2 class="text-base font-semibold text-white mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg>
                Social Media
            </h2>
            <div class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">Instagram URL</label>
                        <input type="url" name="social_instagram" value="{{ \App\Models\SiteSetting::getValue('social_instagram', '') }}"
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                               placeholder="https://instagram.com/sidodadidigital">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">LinkedIn URL</label>
                        <input type="url" name="social_linkedin" value="{{ \App\Models\SiteSetting::getValue('social_linkedin', '') }}"
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                               placeholder="https://linkedin.com/company/sidodadidigital">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">GitHub URL</label>
                        <input type="url" name="social_github" value="{{ \App\Models\SiteSetting::getValue('social_github', '') }}"
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                               placeholder="https://github.com/sidodadidigital">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-400 mb-1.5">TikTok URL</label>
                        <input type="url" name="social_tiktok" value="{{ \App\Models\SiteSetting::getValue('social_tiktok', '') }}"
                               class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                               placeholder="https://tiktok.com/@sidodadidigital">
                    </div>
                </div>
            </div>
        </div>

        {{-- Ads & Tracking Pixels --}}
        <div class="bg-surface border border-surface-border rounded-xl p-6">
            <h2 class="text-base font-semibold text-white mb-1 flex items-center gap-2">
                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                Ads &amp; Tracking Pixels
            </h2>
            <p class="text-xs text-gray-500 mb-4">Paste ID/Pixel saja, script akan di-inject otomatis ke frontend.</p>

            <div class="space-y-4">
                {{-- Google Tag Manager --}}
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">
                        Google Tag Manager (GTM) ID
                        <span class="text-gray-500 text-xs ml-1">contoh: GTM-XXXXXXX</span>
                    </label>
                    <input type="text" name="gtm_id" value="{{ \App\Models\SiteSetting::getValue('gtm_id', '') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="GTM-XXXXXXX">
                </div>

                {{-- Google Ads --}}
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">
                        Google Ads Conversion ID
                        <span class="text-gray-500 text-xs ml-1">contoh: AW-123456789</span>
                    </label>
                    <input type="text" name="google_ads_id" value="{{ \App\Models\SiteSetting::getValue('google_ads_id', '') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="AW-123456789">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">
                        Google Ads Conversion Label
                        <span class="text-gray-500 text-xs ml-1">optional — for conversion tracking</span>
                    </label>
                    <input type="text" name="google_ads_label" value="{{ \App\Models\SiteSetting::getValue('google_ads_label', '') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="AbCdEfGhIjKlMn">
                </div>

                {{-- Meta (Facebook) Pixel --}}
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">
                        Meta (Facebook) Pixel ID
                        <span class="text-gray-500 text-xs ml-1">contoh: 123456789012345</span>
                    </label>
                    <input type="text" name="meta_pixel_id" value="{{ \App\Models\SiteSetting::getValue('meta_pixel_id', '') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="123456789012345">
                </div>

                {{-- TikTok Pixel --}}
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">
                        TikTok Pixel ID
                        <span class="text-gray-500 text-xs ml-1">contoh: CXXXXXXXXXXXXXXXXX</span>
                    </label>
                    <input type="text" name="tiktok_pixel_id" value="{{ \App\Models\SiteSetting::getValue('tiktok_pixel_id', '') }}"
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none"
                           placeholder="CXXXXXXXXXXXXXXXXX">
                </div>
            </div>
        </div>

        {{-- Custom Head/Body Scripts --}}
        <div class="bg-surface border border-surface-border rounded-xl p-6">
            <h2 class="text-base font-semibold text-white mb-1 flex items-center gap-2">
                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                Custom Scripts
            </h2>
            <p class="text-xs text-gray-500 mb-4">Script custom yang akan di-inject ke &lt;head&gt; atau sebelum &lt;/body&gt;. Hati-hati!</p>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Custom &lt;head&gt; Script</label>
                    <textarea name="custom_head_script" rows="4"
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white font-mono placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none"
                              placeholder="<!-- paste custom script here -->">{{ \App\Models\SiteSetting::getValue('custom_head_script', '') }}</textarea>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1.5">Custom &lt;body&gt; Script</label>
                    <textarea name="custom_body_script" rows="4"
                              class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white font-mono placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none resize-none"
                              placeholder="<!-- paste custom script here -->">{{ \App\Models\SiteSetting::getValue('custom_body_script', '') }}</textarea>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-400 transition-colors">
                Simpan Settings
            </button>
        </div>
    </form>
@endsection
