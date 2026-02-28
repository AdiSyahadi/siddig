{{-- Pricing Section --}}
<section id="pricing" class="relative py-16 lg:py-20 section-glow section-glow-bc overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="reveal-base text-center mb-12"
             :class="shown ? 'reveal-visible' : ''">
            <span class="inline-block px-4 py-1.5 text-xs font-medium text-brand-400 border border-brand-400/30 rounded-full uppercase tracking-wider"
                  x-text="$store.lang.isEn ? 'Pricing' : 'Harga'"></span>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold text-white"
                x-text="$store.lang.isEn ? 'Choose Your Package' : 'Pilih Paket Anda'"></h2>
            <p class="mt-3 text-gray-400 max-w-2xl mx-auto"
               x-text="$store.lang.isEn ? 'Transparent pricing with no hidden fees. Every package includes free consultation.' : 'Harga transparan tanpa biaya tersembunyi. Setiap paket termasuk konsultasi gratis.'"></p>
        </div>

        {{-- Pricing Cards --}}
        <div class="reveal-base reveal-delay-1 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-start"
             :class="shown ? 'reveal-visible' : ''">

            {{-- Starter --}}
            <div class="touch-card p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-surface-border transition-all duration-300">
                <div class="text-center mb-6">
                    <h3 class="text-lg font-semibold text-white">Starter</h3>
                    <p class="text-sm text-gray-400 mt-1" x-text="$store.lang.isEn ? 'Perfect for small businesses & SMEs' : 'Cocok untuk UMKM & bisnis kecil'"></p>
                    <div class="mt-4">
                        <span class="text-xs text-gray-400" x-text="$store.lang.isEn ? 'Starting from' : 'Mulai dari'"></span>
                        <div class="flex items-baseline justify-center gap-1 mt-1">
                            <span class="text-3xl font-bold text-white">3.5</span>
                            <span class="text-lg text-gray-400" x-text="$store.lang.isEn ? 'M IDR' : 'Juta'"></span>
                        </div>
                    </div>
                </div>
                <div class="border-t border-surface-border pt-6 space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Up to 5 pages' : 'Hingga 5 halaman'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Responsive mobile design' : 'Desain responsif mobile'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Contact form + WhatsApp' : 'Form kontak + WhatsApp'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Basic SEO setup' : 'Setup SEO dasar'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Free domain + hosting 1 year' : 'Gratis domain + hosting 1 tahun'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? '30-day free revision' : 'Revisi gratis 30 hari'"></span>
                    </div>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20SidodadiDigital,%20saya%20tertarik%20paket%20Starter"
                   target="_blank" rel="noopener noreferrer"
                   class="touch-btn mt-8 w-full block text-center px-6 py-3 text-sm font-medium text-brand-300 border border-brand-500/30 rounded-full hover:bg-brand-500/10 hover:border-brand-500/50 transition-all duration-200"
                   x-text="$store.lang.isEn ? 'Get Started' : 'Mulai Sekarang'"></a>
            </div>

            {{-- Professional (Popular) --}}
            <div class="touch-card relative p-6 lg:p-8 bg-surface border-2 border-brand-500/50 rounded-2xl shadow-lg shadow-brand-500/10 transition-all duration-300">
                {{-- Popular Badge --}}
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                    <span class="px-4 py-1 text-xs font-semibold text-white bg-brand-500 rounded-full shadow-md"
                          x-text="$store.lang.isEn ? 'Most Popular' : 'Paling Populer'"></span>
                </div>
                <div class="text-center mb-6">
                    <h3 class="text-lg font-semibold text-white">Professional</h3>
                    <p class="text-sm text-gray-400 mt-1" x-text="$store.lang.isEn ? 'For growing businesses' : 'Untuk bisnis berkembang'"></p>
                    <div class="mt-4">
                        <span class="text-xs text-gray-400" x-text="$store.lang.isEn ? 'Starting from' : 'Mulai dari'"></span>
                        <div class="flex items-baseline justify-center gap-1 mt-1">
                            <span class="text-3xl font-bold text-white">8.5</span>
                            <span class="text-lg text-gray-400" x-text="$store.lang.isEn ? 'M IDR' : 'Juta'"></span>
                        </div>
                    </div>
                </div>
                <div class="border-t border-surface-border pt-6 space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Up to 15 pages' : 'Hingga 15 halaman'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Custom UI/UX design' : 'Desain UI/UX custom'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'CMS / admin dashboard' : 'CMS / dashboard admin'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Advanced SEO + Google Analytics' : 'SEO lanjutan + Google Analytics'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'SSL + CDN performance' : 'SSL + CDN performa'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? '3-month free maintenance' : 'Maintenance gratis 3 bulan'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'WhatsApp chat integration' : 'Integrasi chat WhatsApp'"></span>
                    </div>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20SidodadiDigital,%20saya%20tertarik%20paket%20Professional"
                   target="_blank" rel="noopener noreferrer"
                   class="touch-btn cta-primary-glow mt-8 w-full block text-center px-6 py-3 text-sm font-semibold text-white bg-brand-500 rounded-full hover:bg-brand-400 transition-all duration-200 shadow-lg shadow-brand-500/25"
                   x-text="$store.lang.isEn ? 'Get Started' : 'Mulai Sekarang'"></a>
            </div>

            {{-- Enterprise --}}
            <div class="touch-card p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-surface-border transition-all duration-300">
                <div class="text-center mb-6">
                    <h3 class="text-lg font-semibold text-white">Enterprise</h3>
                    <p class="text-sm text-gray-400 mt-1" x-text="$store.lang.isEn ? 'For large companies & custom needs' : 'Untuk perusahaan besar & kebutuhan khusus'"></p>
                    <div class="mt-4">
                        <span class="text-xs text-gray-400" x-text="$store.lang.isEn ? 'Starting from' : 'Mulai dari'"></span>
                        <div class="flex items-baseline justify-center gap-1 mt-1">
                            <span class="text-3xl font-bold text-white">25</span>
                            <span class="text-lg text-gray-400" x-text="$store.lang.isEn ? 'M IDR' : 'Juta'"></span>
                        </div>
                    </div>
                </div>
                <div class="border-t border-surface-border pt-6 space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Unlimited pages' : 'Halaman tidak terbatas'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Custom web application' : 'Aplikasi web custom'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'API & third-party integration' : 'Integrasi API & pihak ketiga'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Dedicated project manager' : 'Project manager khusus'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Priority support 24/7' : 'Support prioritas 24/7'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? '6-month free maintenance' : 'Maintenance gratis 6 bulan'"></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-sm text-gray-300" x-text="$store.lang.isEn ? 'Source code handover' : 'Serah terima source code'"></span>
                    </div>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20SidodadiDigital,%20saya%20tertarik%20paket%20Enterprise"
                   target="_blank" rel="noopener noreferrer"
                   class="touch-btn mt-8 w-full block text-center px-6 py-3 text-sm font-medium text-brand-300 border border-brand-500/30 rounded-full hover:bg-brand-500/10 hover:border-brand-500/50 transition-all duration-200"
                   x-text="$store.lang.isEn ? 'Contact Sales' : 'Hubungi Sales'"></a>
            </div>
        </div>

        {{-- Guarantee Note --}}
        <div class="reveal-base reveal-delay-2 mt-10 text-center"
             :class="shown ? 'reveal-visible' : ''">
            <p class="text-sm text-gray-400 inline-flex items-center gap-2">
                <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span x-text="$store.lang.isEn ? 'All packages include free consultation and money-back guarantee if not satisfied.' : 'Semua paket termasuk konsultasi gratis dan garansi uang kembali jika tidak puas.'"></span>
            </p>
        </div>
    </div>
</section>
