{{-- Stats Section --}}
<section class="relative py-16 lg:py-20 overflow-hidden"
         x-data="{ curveVisible: false, shown: false }"
         x-intersect.once="curveVisible = true; shown = true">

    {{-- Curved Gradient Background --}}
    <div class="absolute inset-0">
        <div class="stats-top-fade absolute top-0 left-0 right-0 h-20 bg-gradient-to-b from-dark-950 to-transparent z-[1]"></div>
        <div class="absolute inset-0 stats-bg-radial"></div>

        {{-- Premium Radial Glow Arc --}}
        <div class="premium-glow-arc"></div>

        {{-- Animated SVG Curves --}}
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[130%] h-[60%]"
             :class="curveVisible ? 'stats-curve-animated' : ''">
            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1200 600" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">

                {{-- Glow Filters --}}
                <defs>
                    <filter id="curveBlur1" x="-20%" y="-20%" width="140%" height="140%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="3" />
                    </filter>
                    <filter id="curveBlur2" x="-20%" y="-20%" width="140%" height="140%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" />
                    </filter>
                    <filter id="curveBlur3" x="-20%" y="-20%" width="140%" height="140%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="12" />
                    </filter>

                    {{-- Curve 1: Brightest inner arc --}}
                    <linearGradient id="curveGradient1" x1="0" y1="0" x2="1200" y2="0" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#00aaff" stop-opacity="0" />
                        <stop offset="12%" stop-color="#00aaff" stop-opacity="0.4" />
                        <stop offset="50%" stop-color="#4dc8ff" stop-opacity="0.8" />
                        <stop offset="88%" stop-color="#00aaff" stop-opacity="0.4" />
                        <stop offset="100%" stop-color="#00aaff" stop-opacity="0" />
                    </linearGradient>
                    {{-- Curve 2: Mid arc --}}
                    <linearGradient id="curveGradient2" x1="0" y1="0" x2="1200" y2="0" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#0088dd" stop-opacity="0" />
                        <stop offset="15%" stop-color="#0088dd" stop-opacity="0.3" />
                        <stop offset="50%" stop-color="#00aaff" stop-opacity="0.5" />
                        <stop offset="85%" stop-color="#0088dd" stop-opacity="0.3" />
                        <stop offset="100%" stop-color="#0088dd" stop-opacity="0" />
                    </linearGradient>
                    {{-- Curve 3: Outer arc --}}
                    <linearGradient id="curveGradient3" x1="0" y1="0" x2="1200" y2="0" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#006bb3" stop-opacity="0" />
                        <stop offset="20%" stop-color="#006bb3" stop-opacity="0.2" />
                        <stop offset="50%" stop-color="#0088dd" stop-opacity="0.3" />
                        <stop offset="80%" stop-color="#006bb3" stop-opacity="0.2" />
                        <stop offset="100%" stop-color="#006bb3" stop-opacity="0" />
                    </linearGradient>
                    {{-- Curve 4: Faintest outermost --}}
                    <linearGradient id="curveGradient4" x1="0" y1="0" x2="1200" y2="0" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#004d80" stop-opacity="0" />
                        <stop offset="25%" stop-color="#004d80" stop-opacity="0.1" />
                        <stop offset="50%" stop-color="#006bb3" stop-opacity="0.15" />
                        <stop offset="75%" stop-color="#004d80" stop-opacity="0.1" />
                        <stop offset="100%" stop-color="#004d80" stop-opacity="0" />
                    </linearGradient>
                </defs>

                {{-- Curve 1: Wide glow halo --}}
                <path d="M-50 50 Q600 580 1250 50"
                      class="stats-curve-path stats-curve-glow"
                      stroke="url(#curveGradient1)"
                      stroke-width="6"
                      stroke-linecap="round"
                      fill="none"
                      filter="url(#curveBlur3)" />

                {{-- Curve 1: Sharp core arc --}}
                <path d="M-50 50 Q600 580 1250 50"
                      class="stats-curve-path stats-curve-glow"
                      stroke="url(#curveGradient1)"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      fill="none" />

                {{-- Curve 2: Wide glow halo --}}
                <path d="M-80 80 Q600 650 1280 80"
                      class="stats-curve-path stats-curve-path-2 stats-curve-glow stats-curve-glow-2"
                      stroke="url(#curveGradient2)"
                      stroke-width="5"
                      stroke-linecap="round"
                      fill="none"
                      filter="url(#curveBlur2)" />

                {{-- Curve 2: Sharp line --}}
                <path d="M-80 80 Q600 650 1280 80"
                      class="stats-curve-path stats-curve-path-2 stats-curve-glow stats-curve-glow-2"
                      stroke="url(#curveGradient2)"
                      stroke-width="1"
                      stroke-linecap="round"
                      fill="none" />

                {{-- Curve 3: Glow layer --}}
                <path d="M-120 120 Q600 740 1320 120"
                      class="stats-curve-path stats-curve-path-3 stats-curve-glow stats-curve-glow-3"
                      stroke="url(#curveGradient3)"
                      stroke-width="4"
                      stroke-linecap="round"
                      fill="none"
                      filter="url(#curveBlur2)" />

                {{-- Curve 3: Sharp line --}}
                <path d="M-120 120 Q600 740 1320 120"
                      class="stats-curve-path stats-curve-path-3 stats-curve-glow stats-curve-glow-3"
                      stroke="url(#curveGradient3)"
                      stroke-width="0.8"
                      stroke-linecap="round"
                      fill="none" />

                {{-- Curve 4: Faint outermost glow only --}}
                <path d="M-160 160 Q600 840 1360 160"
                      class="stats-curve-path stats-curve-path-3 stats-curve-glow stats-curve-glow-3"
                      stroke="url(#curveGradient4)"
                      stroke-width="3"
                      stroke-linecap="round"
                      fill="none"
                      filter="url(#curveBlur3)" />

            </svg>
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        {{-- Heading --}}
        <h2 class="reveal-base text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight"
            :class="shown ? 'reveal-visible' : ''">
            <span class="text-gray-300" x-text="$store.lang.isEn ? 'Don\'t take our ' : 'Jangan percaya '"></span>
            <span class="text-white" x-text="$store.lang.isEn ? 'word' : 'kata'"></span>
            <span class="text-gray-300" x-text="$store.lang.isEn ? ' for it.' : ' kami.'"></span>
        </h2>

        {{-- Stats Grid --}}
        <div class="reveal-base reveal-delay-1 mt-12 grid grid-cols-3 gap-4 sm:gap-8 lg:gap-16"
             :class="shown ? 'reveal-visible' : ''"
             x-data="{
                 started: false,
                 clients: 0,
                 retention: 0,
                 rating: 0,
                 animateCounter(target, key, duration, decimal = false) {
                     const increment = target / (duration / 16);
                     const interval = setInterval(() => {
                         this[key] += increment;
                         if (this[key] >= target) {
                             this[key] = target;
                             clearInterval(interval);
                         }
                     }, 16);
                 }
             }"
             x-intersect.once="
                 if (!started) {
                     started = true;
                     animateCounter(147, 'clients', 2000);
                     animateCounter(98, 'retention', 2000);
                     animateCounter(4.97, 'rating', 2000, true);
                 }
             ">

            {{-- Stat 1 --}}
            <div>
                <div class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white">
                    <span x-text="Math.floor(clients)">0</span><span class="text-brand-400">+</span>
                </div>
                <p class="mt-1 sm:mt-2 text-xs sm:text-base text-gray-400" x-text="$store.lang.isEn ? 'satisfied clients' : 'klien puas'"></p>
            </div>

            {{-- Stat 2 --}}
            <div>
                <div class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white">
                    <span x-text="Math.floor(retention)">0</span><span class="text-brand-400">%</span>
                </div>
                <p class="mt-1 sm:mt-2 text-xs sm:text-base text-gray-400" x-text="$store.lang.isEn ? 'satisfaction rate' : 'tingkat kepuasan'"></p>
            </div>

            {{-- Stat 3 --}}
            <div>
                <div class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white">
                    <span x-text="rating.toFixed(2)">0.00</span>
                </div>
                <p class="mt-1 sm:mt-2 text-xs sm:text-base text-gray-400" x-text="$store.lang.isEn ? 'average rating' : 'rating rata-rata'"></p>
            </div>
        </div>
    </div>
</section>
