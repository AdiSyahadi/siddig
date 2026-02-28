{{-- Conversion Magnet Section --}}
<section class="relative py-16 lg:py-20 section-glow section-glow-bc overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Badge --}}
        <div class="reveal-base"
             :class="shown ? 'reveal-visible' : ''">
            <span x-show="$store.lang.isId" class="inline-flex items-center gap-2 px-4 py-1.5 text-xs font-medium text-brand-300 border border-brand-500/30 rounded-full uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Gratis &middot; Tanpa Komitmen
            </span>
            <span x-show="$store.lang.isEn" x-cloak class="inline-flex items-center gap-2 px-4 py-1.5 text-xs font-medium text-brand-300 border border-brand-500/30 rounded-full uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Free &middot; No Commitment
            </span>
        </div>

        {{-- Heading --}}
        <div class="reveal-base reveal-delay-1"
             :class="shown ? 'reveal-visible' : ''">
            <h2 class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                <span x-text="$store.lang.isEn ? 'Free Consultation' : 'Konsultasi Gratis'"></span><br>
                <span class="bg-gradient-to-r from-brand-300 to-brand-500 bg-clip-text text-transparent"
                      x-text="$store.lang.isEn ? '30 Minutes' : '30 Menit'"></span>
            </h2>
            <p class="mt-4 text-lg text-gray-400 max-w-2xl mx-auto leading-relaxed"
               x-text="$store.lang.isEn ? 'Tell us about your business needs, we\'ll help find the best solution. No cost, no pressure.' : 'Ceritakan kebutuhan bisnis Anda, kami bantu carikan solusi terbaik. Tidak ada biaya, tidak ada tekanan.'">
            </p>
        </div>

        {{-- 3-Step Process --}}
        <div class="reveal-base reveal-delay-2 mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8"
             :class="shown ? 'reveal-visible' : ''">

            {{-- Step 1 --}}
            <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-brand-600/10 border border-brand-600/20 rounded-2xl mb-4">
                    <svg class="w-7 h-7 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-brand-400 uppercase tracking-wider mb-1" x-text="$store.lang.isEn ? 'Step 1' : 'Langkah 1'"></span>
                <h3 class="text-base font-semibold text-white" x-text="$store.lang.isEn ? 'Contact Us' : 'Hubungi Kami'"></h3>
                <p class="text-sm text-gray-400 mt-1" x-text="$store.lang.isEn ? 'Send a message via WhatsApp or contact form' : 'Kirim pesan via WhatsApp atau form kontak'"></p>
            </div>

            {{-- Step 2 --}}
            <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-brand-600/10 border border-brand-600/20 rounded-2xl mb-4">
                    <svg class="w-7 h-7 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-brand-400 uppercase tracking-wider mb-1" x-text="$store.lang.isEn ? 'Step 2' : 'Langkah 2'"></span>
                <h3 class="text-base font-semibold text-white" x-text="$store.lang.isEn ? 'Discuss Needs' : 'Diskusi Kebutuhan'"></h3>
                <p class="text-sm text-gray-400 mt-1" x-text="$store.lang.isEn ? 'Our team listens and analyzes your needs' : 'Tim kami dengarkan dan analisa kebutuhan Anda'"></p>
            </div>

            {{-- Step 3 --}}
            <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 flex items-center justify-center bg-brand-600/10 border border-brand-600/20 rounded-2xl mb-4">
                    <svg class="w-7 h-7 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-brand-400 uppercase tracking-wider mb-1" x-text="$store.lang.isEn ? 'Step 3' : 'Langkah 3'"></span>
                <h3 class="text-base font-semibold text-white" x-text="$store.lang.isEn ? 'Receive Proposal' : 'Terima Proposal'"></h3>
                <p class="text-sm text-gray-400 mt-1" x-text="$store.lang.isEn ? 'We send a detailed proposal + price estimate' : 'Kami kirim proposal detail + estimasi harga'"></p>
            </div>
        </div>

        {{-- CTA + Guarantee --}}
        <div class="reveal-base reveal-delay-3 mt-12"
             :class="shown ? 'reveal-visible' : ''">
            <a href="https://wa.me/6281234567890?text=Halo%20SidodadiDigital,%20saya%20ingin%20konsultasi%20gratis"
               target="_blank"
               rel="noopener noreferrer"
               class="touch-btn cta-primary-glow inline-flex items-center px-8 py-4 text-sm font-semibold text-white bg-brand-500 rounded-full hover:bg-brand-400 transition-all duration-200 shadow-lg shadow-brand-500/25 hover:shadow-xl hover:shadow-brand-400/30 hover:scale-[1.03]">
                <span x-text="$store.lang.isEn ? 'Schedule Free Consultation' : 'Jadwalkan Konsultasi Gratis'"></span>
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>

            {{-- Trust Guarantee --}}
            <div class="mt-6 flex flex-wrap items-center justify-center gap-4 sm:gap-6 text-xs text-gray-400">
                <span class="inline-flex items-center gap-1.5" x-show="$store.lang.isId">
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    100% Gratis
                </span>
                <span class="inline-flex items-center gap-1.5" x-show="$store.lang.isEn" x-cloak>
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    100% Free
                </span>
                <span class="inline-flex items-center gap-1.5" x-show="$store.lang.isId">
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Data Aman & Rahasia
                </span>
                <span class="inline-flex items-center gap-1.5" x-show="$store.lang.isEn" x-cloak>
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Data Safe & Private
                </span>
                <span class="inline-flex items-center gap-1.5" x-show="$store.lang.isId">
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Respons &lt; 1 Jam
                </span>
                <span class="inline-flex items-center gap-1.5" x-show="$store.lang.isEn" x-cloak>
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Response &lt; 1 Hour
                </span>
            </div>
        </div>
    </div>
</section>
