{{-- Why Choose Us Section --}}
<section id="about" class="relative py-16 lg:py-20 section-glow section-glow-cl overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="reveal-base text-center mb-12"
             :class="shown ? 'reveal-visible' : ''">
            <span class="inline-block px-4 py-1.5 text-xs font-medium text-brand-400 border border-brand-400/30 rounded-full uppercase tracking-wider"
                  x-text="$store.lang.isEn ? 'Why Us' : 'Keunggulan'"></span>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                <span x-text="$store.lang.isEn ? 'Why Businesses Choose' : 'Kenapa Bisnis Memilih'"></span><br>SidodadiDigital
            </h2>
        </div>

        {{-- Top Row: 3 Cards --}}
        <div class="reveal-base reveal-delay-1 grid grid-cols-1 md:grid-cols-3 gap-6 mb-6"
             :class="shown ? 'reveal-visible' : ''">

            {{-- Card 1: Tim Berdedikasi --}}
            <div class="touch-card p-6 lg:p-8 bg-gradient-to-br from-surface to-dark-900 border border-surface-border/50 rounded-2xl hover:border-surface-border">
                <div class="mb-6 flex -space-x-3">
                    <div class="w-12 h-12 rounded-full bg-brand-600/20 border-2 border-dark-950 flex items-center justify-center text-brand-400 text-sm font-bold">A</div>
                    <div class="w-12 h-12 rounded-full bg-brand-500/20 border-2 border-dark-950 flex items-center justify-center text-brand-300 text-sm font-bold">B</div>
                    <div class="w-12 h-12 rounded-full bg-brand-400/20 border-2 border-dark-950 flex items-center justify-center text-brand-200 text-sm font-bold">C</div>
                    <div class="w-12 h-12 rounded-full bg-brand-300/20 border-2 border-dark-950 flex items-center justify-center text-brand-100 text-sm font-bold">D</div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2" x-text="$store.lang.isEn ? 'Dedicated Team' : 'Tim Berdedikasi'"></h3>
                <p class="text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'Work with dedicated consultants who understand your business goals.' : 'Bekerja dengan konsultan khusus yang memahami tujuan bisnis Anda.'">
                </p>
            </div>

            {{-- Card 2: Pendampingan Penuh --}}
            <div class="touch-card p-6 lg:p-8 bg-gradient-to-br from-surface to-dark-900 border border-surface-border/50 rounded-2xl hover:border-surface-border">
                <div class="mb-6 space-y-2">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-brand-600/20 flex-shrink-0 flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <div class="space-y-1.5">
                            <div class="bg-dark-700 rounded-lg rounded-tl-none px-3 py-2 text-sm text-gray-300 max-w-[200px]"
                                 x-text="$store.lang.isEn ? 'Your design draft is ready!' : 'Desain draft Anda sudah siap!'">
                            </div>
                            <div class="bg-dark-700 rounded-lg rounded-tl-none px-3 py-2 text-sm text-gray-300 max-w-[240px]"
                                 x-text="$store.lang.isEn ? 'Want to review before the next stage?' : 'Mau review sebelum lanjut tahap berikutnya?'">
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2" x-text="$store.lang.isEn ? 'Full Guidance' : 'Pendampingan Penuh'"></h3>
                <p class="text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'We guide you from initial consultation until your website is live and ready to use.' : 'Kami mendampingi Anda dari konsultasi awal hingga website live dan siap digunakan.'">
                </p>
            </div>

            {{-- Card 3: Hasil Terukur --}}
            <div class="touch-card p-6 lg:p-8 bg-gradient-to-br from-surface to-dark-900 border border-surface-border/50 rounded-2xl hover:border-surface-border">
                <div class="mb-6">
                    <div class="flex items-center justify-between text-xs text-gray-400 mb-2">
                        <span x-text="$store.lang.isEn ? 'Website Performance' : 'Performa Website'"></span>
                        <div class="flex gap-2">
                            <span class="text-brand-400 font-medium">H</span>
                            <span>M</span>
                            <span>B</span>
                            <span>T</span>
                        </div>
                    </div>
                    <div class="flex items-end gap-1 h-16">
                        @php
                            $barHeights = [45, 62, 38, 71, 55, 83, 47, 66, 52, 90, 74, 85, 68, 92, 78, 95, 88, 100, 82, 97];
                        @endphp
                        @foreach($barHeights as $i => $h)
                            <div class="flex-1 rounded-sm {{ $i > 14 ? 'bg-white' : ($i > 10 ? 'bg-brand-400' : 'bg-brand-600/40') }}"
                                 style="height: {{ $h }}%"></div>
                        @endforeach
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2" x-text="$store.lang.isEn ? 'Measurable Results' : 'Hasil Terukur'"></h3>
                <p class="text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'We track performance and show ROI at every stage to ensure long-term success.' : 'Kami lacak performa dan tunjukkan ROI di setiap tahap untuk memastikan kesuksesan jangka panjang.'">
                </p>
            </div>
        </div>

        {{-- Bottom Row: 2 Cards --}}
        <div class="reveal-base reveal-delay-2 grid grid-cols-1 md:grid-cols-2 gap-6"
             :class="shown ? 'reveal-visible' : ''">

            {{-- Card 4: Solusi Masa Depan --}}
            <div class="touch-card p-6 lg:p-8 bg-gradient-to-br from-surface to-dark-900 border border-surface-border/50 rounded-2xl hover:border-surface-border">
                <div class="mb-6 flex items-center justify-center gap-4">
                    <div class="w-14 h-14 rounded-xl bg-dark-700 border border-surface-border flex items-center justify-center">
                        <svg class="w-7 h-7 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="w-16 h-16 rounded-xl bg-brand-600/20 border border-brand-600/30 flex items-center justify-center">
                        <svg class="w-8 h-8 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
                        </svg>
                    </div>
                    <div class="w-14 h-14 rounded-xl bg-dark-700 border border-surface-border flex items-center justify-center">
                        <svg class="w-7 h-7 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2" x-text="$store.lang.isEn ? 'Future-Proof Solutions' : 'Solusi Masa Depan'"></h3>
                <p class="text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'We design scalable systems so your business stays competitive in the future.' : 'Kami merancang sistem yang scalable agar bisnis Anda tetap kompetitif di masa depan.'">
                </p>
            </div>

            {{-- Card 5: Proses Transparan --}}
            <div class="touch-card p-6 lg:p-8 bg-gradient-to-br from-surface to-dark-900 border border-surface-border/50 rounded-2xl hover:border-surface-border">
                <div class="mb-6 space-y-2">
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 text-xs bg-dark-700 border border-surface-border rounded-md text-gray-400" x-text="$store.lang.isEn ? 'Brief approval' : 'Persetujuan brief'"></span>
                        <span class="px-3 py-1 text-xs bg-dark-700 border border-surface-border rounded-md text-gray-400" x-text="$store.lang.isEn ? 'Content plan' : 'Rencana konten'"></span>
                    </div>
                    <div class="flex flex-wrap gap-2 ml-4">
                        <span class="px-3 py-1 text-xs bg-dark-700 border border-surface-border rounded-md text-gray-400" x-text="$store.lang.isEn ? 'Internal review' : 'Review internal'"></span>
                        <span class="px-3 py-1 text-xs bg-brand-600/20 border border-brand-600/30 rounded-md text-brand-400" x-text="$store.lang.isEn ? 'Client feedback' : 'Feedback klien'"></span>
                    </div>
                    <div class="flex flex-wrap gap-2 ml-8">
                        <span class="px-3 py-1 text-xs bg-dark-700 border border-surface-border rounded-md text-gray-400" x-text="$store.lang.isEn ? 'Asset export' : 'Export aset'"></span>
                    </div>
                    <div class="flex flex-wrap gap-2 ml-12">
                        <span class="px-3 py-1 text-xs bg-dark-700 border border-surface-border rounded-md text-gray-400" x-text="$store.lang.isEn ? 'Launch setup' : 'Setup peluncuran'"></span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2" x-text="$store.lang.isEn ? 'Transparent Process' : 'Proses Transparan'"></h3>
                <p class="text-gray-400 leading-relaxed"
                   x-text="$store.lang.isEn ? 'You always know project progress with clear timelines, regular updates, and open communication.' : 'Anda selalu tahu perkembangan proyek dengan timeline jelas, update rutin, dan komunikasi terbuka.'">
                </p>
            </div>
        </div>
    </div>
</section>
