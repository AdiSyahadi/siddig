{{-- Services Section --}}
<section id="services" class="relative py-16 lg:py-20 section-glow section-glow-tr overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="reveal-base text-center mb-12"
             :class="shown ? 'reveal-visible' : ''">
            <span class="inline-block px-4 py-1.5 text-xs font-medium text-brand-400 border border-brand-400/30 rounded-full uppercase tracking-wider"
                  x-text="$store.lang.isEn ? 'Services' : 'Layanan'"></span>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold text-white"
                x-text="$store.lang.isEn ? 'Our Expertise' : 'Keahlian Kami'"></h2>
        </div>

        {{-- Service Cards Grid --}}
        <div class="reveal-base reveal-delay-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6"
             :class="shown ? 'reveal-visible' : ''">

            {{-- Card 1: Company Profile --}}
            <div class="group touch-card p-5 sm:p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-brand-600/10 rounded-xl mb-5">
                    <svg class="w-6 h-6 text-brand-400 group-hover:text-brand-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2 sm:mb-3">Website Company Profile</h3>
                <p class="text-sm sm:text-base text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Build your professional business image with a modern, fast, and responsive company profile website across all devices.' : 'Bangun citra profesional bisnis Anda dengan website company profile yang modern, cepat, dan responsif di semua perangkat.'">
                </p>
            </div>

            {{-- Card 2: E-Commerce --}}
            <div class="group touch-card p-5 sm:p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-brand-600/10 rounded-xl mb-5">
                    <svg class="w-6 h-6 text-brand-400 group-hover:text-brand-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2 sm:mb-3">Website E-Commerce</h3>
                <p class="text-sm sm:text-base text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Complete online store with payment systems, product management, and an easy-to-use admin dashboard.' : 'Toko online lengkap dengan sistem pembayaran, manajemen produk, dan dashboard admin yang mudah digunakan.'">
                </p>
            </div>

            {{-- Card 3: Landing Page --}}
            <div class="group touch-card p-5 sm:p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-brand-600/10 rounded-xl mb-5">
                    <svg class="w-6 h-6 text-brand-400 group-hover:text-brand-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2 sm:mb-3">Landing Page</h3>
                <p class="text-sm sm:text-base text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Dedicated pages designed for high conversion. Perfect for ad campaigns, promos, and product launches.' : 'Halaman khusus yang dirancang untuk konversi tinggi. Cocok untuk kampanye iklan, promo, dan peluncuran produk.'">
                </p>
            </div>

            {{-- Card 4: Custom Web App --}}
            <div class="group touch-card p-5 sm:p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-brand-600/10 rounded-xl mb-5">
                    <svg class="w-6 h-6 text-brand-400 group-hover:text-brand-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2 sm:mb-3">Custom Web Application</h3>
                <p class="text-sm sm:text-base text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Custom web applications tailored to your business needs. From management systems to integrated digital platforms.' : 'Aplikasi web khusus sesuai kebutuhan bisnis Anda. Dari sistem manajemen hingga platform digital terintegrasi.'">
                </p>
            </div>

            {{-- Card 5: UI/UX Design --}}
            <div class="group touch-card p-5 sm:p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-brand-600/10 rounded-xl mb-5">
                    <svg class="w-6 h-6 text-brand-400 group-hover:text-brand-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2 sm:mb-3">UI/UX Design</h3>
                <p class="text-sm sm:text-base text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Beautiful and intuitive interface design. We craft user experiences that keep visitors engaged and converting.' : 'Desain antarmuka yang indah dan intuitif. Kami merancang pengalaman pengguna yang membuat pengunjung betah dan berkonversi.'">
                </p>
            </div>

            {{-- Card 6: Maintenance & SEO --}}
            <div class="group touch-card p-5 sm:p-6 lg:p-8 bg-surface border border-surface-border rounded-2xl hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-brand-600/10 rounded-xl mb-5">
                    <svg class="w-6 h-6 text-brand-400 group-hover:text-brand-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-white mb-2 sm:mb-3">Maintenance & SEO</h3>
                <p class="text-sm sm:text-base text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Website maintenance and SEO optimization services to keep your site performing and easily found on Google.' : 'Layanan pemeliharaan website dan optimasi SEO agar situs Anda selalu tampil optimal dan mudah ditemukan di Google.'">
                </p>
            </div>
        </div>

        {{-- CTA --}}
        <div class="reveal-base reveal-delay-2 mt-12 text-center"
             :class="shown ? 'reveal-visible' : ''">
            <p class="text-gray-400 mb-4" x-text="$store.lang.isEn ? 'Haven\'t found what you\'re looking for?' : 'Belum menemukan yang Anda cari?'"></p>
            <a href="#contact"
               class="touch-btn inline-flex items-center px-6 py-3 text-sm font-medium text-brand-300 border border-brand-500/30 rounded-full hover:bg-brand-500/10 hover:border-brand-500/50 transition-all duration-200"
               x-text="$store.lang.isEn ? 'Free Consultation' : 'Konsultasi Gratis'"></a>
        </div>
    </div>
</section>
