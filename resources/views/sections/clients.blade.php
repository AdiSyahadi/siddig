{{-- Client Logos Trust Bar --}}
<section class="relative py-10 lg:py-12 overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="reveal-base text-center mb-8"
             :class="shown ? 'reveal-visible' : ''">
            <p class="text-sm text-gray-400 uppercase tracking-wider font-medium"
               x-text="$store.lang.isEn ? 'Trusted by Leading Companies' : 'Dipercaya oleh Perusahaan Terkemuka'"></p>
        </div>

        {{-- Logo Marquee --}}
        <div class="reveal-base reveal-delay-1 marquee-wrapper testimonial-scroll-wrapper"
             :class="shown ? 'reveal-visible' : ''">
            <div class="marquee-track gap-12 lg:gap-16" style="animation-duration: 30s;">
                @foreach([false, true] as $isDuplicate)
                <div class="flex items-center gap-12 lg:gap-16 shrink-0" {!! $isDuplicate ? 'aria-hidden="true"' : '' !!}>
                    {{-- Logo 1 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">Wijaya Group</span>
                    </div>
                    {{-- Logo 2 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">NextWave</span>
                    </div>
                    {{-- Logo 3 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">BrightPath</span>
                    </div>
                    {{-- Logo 4 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">NovaRetail</span>
                    </div>
                    {{-- Logo 5 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">Pulse Media</span>
                    </div>
                    {{-- Logo 6 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">Greenfield Mfg</span>
                    </div>
                    {{-- Logo 7 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">MediaPlus</span>
                    </div>
                    {{-- Logo 8 --}}
                    <div class="flex items-center gap-2 opacity-40 hover:opacity-70 transition-opacity duration-300">
                        <div class="w-8 h-8 bg-gray-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-400 tracking-tight whitespace-nowrap">Kurniawan Co</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
