{{-- Hero Section --}}
<section x-data class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">

    {{-- Background Gradient --}}
    <div class="hero-bg-gradient absolute inset-0 bg-gradient-to-b from-brand-900/40 via-dark-950 to-dark-950"></div>
    <div class="hero-bg-orb absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-600/10 rounded-full blur-3xl"></div>
    <div class="hero-bg-orb absolute top-1/3 left-1/3 w-[400px] h-[400px] bg-brand-400/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Badge --}}
        <div class="hero-animate inline-flex items-center gap-2 px-4 py-1.5 mb-6 bg-brand-600/10 border border-brand-600/20 rounded-full">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            <span class="text-xs font-medium text-brand-300 tracking-wide"
                  x-text="$store.lang.isEn ? 'Accepting new projects — Response < 1 hour' : 'Menerima proyek baru — Respons < 1 jam'"></span>
        </div>

        {{-- Main Heading --}}
        <h1 class="hero-animate text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight tracking-tight">
            <span class="text-gray-100" x-text="$store.lang.isEn ? 'We Build ' : 'Kami Bangun '"></span>
            <span class="bg-gradient-to-r from-brand-300 to-brand-500 bg-clip-text text-transparent" x-text="$store.lang.isEn ? 'Websites' : 'Website'"></span>
            <br>
            <span class="text-gray-100" x-text="$store.lang.isEn ? 'that ' : 'yang '"></span>
            <span class="bg-gradient-to-r from-brand-300 to-brand-500 bg-clip-text text-transparent" x-text="$store.lang.isEn ? 'Convert' : 'Menghasilkan'"></span>
        </h1>

        {{-- Subtitle --}}
        <p class="hero-animate-d1 mt-6 text-lg sm:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed"
           x-text="$store.lang.isEn
               ? 'More than just going online — we design websites that attract customers, build trust, and drive your business growth.'
               : 'Bukan sekadar tampil online — kami rancang website yang mendatangkan pelanggan, meningkatkan kepercayaan, dan mendorong pertumbuhan bisnis Anda.'">
        </p>

        {{-- CTA Buttons --}}
        <div class="hero-animate-d2 mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#contact"
               class="touch-btn cta-primary-glow inline-flex items-center px-8 py-3.5 text-sm font-semibold text-white bg-brand-500 rounded-full hover:bg-brand-400 transition-all duration-200 shadow-lg shadow-brand-500/25 hover:shadow-xl hover:shadow-brand-400/30 hover:scale-[1.03]">
                <span x-text="$store.lang.isEn ? 'Free Consultation' : 'Konsultasi Gratis'"></span>
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#services"
               class="touch-btn inline-flex items-center px-8 py-3.5 text-sm font-semibold text-gray-300 bg-transparent border border-white/15 rounded-full hover:bg-white/5 hover:border-white/25 transition-all duration-200"
               x-text="$store.lang.isEn ? 'View Services' : 'Lihat Layanan'">
            </a>
        </div>

        {{-- Social Proof Metrics --}}
        <div class="hero-animate-d3 mt-16 lg:mt-20">
            <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 lg:gap-14">
                <div class="text-center">
                    <p class="text-2xl sm:text-3xl font-bold text-white">147+</p>
                    <p class="text-xs sm:text-sm text-gray-400 mt-1"
                       x-text="$store.lang.isEn ? 'Projects Done' : 'Proyek Selesai'"></p>
                </div>
                <div class="w-px h-10 bg-surface-border hidden sm:block"></div>
                <div class="text-center">
                    <p class="text-2xl sm:text-3xl font-bold text-white">98%</p>
                    <p class="text-xs sm:text-sm text-gray-400 mt-1"
                       x-text="$store.lang.isEn ? 'Satisfied Clients' : 'Klien Puas'"></p>
                </div>
                <div class="w-px h-10 bg-surface-border hidden sm:block"></div>
                <div class="text-center">
                    <p class="text-2xl sm:text-3xl font-bold text-white">&lt; 1 <span x-text="$store.lang.isEn ? 'Hour' : 'Jam'"></span></p>
                    <p class="text-xs sm:text-sm text-gray-400 mt-1"
                       x-text="$store.lang.isEn ? 'Response Time' : 'Waktu Respons'"></p>
                </div>
            </div>
        </div>
    </div>
</section>
