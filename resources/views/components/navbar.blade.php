{{-- Navbar Component --}}
<nav x-data="{ mobileOpen: false }" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     x-init="
        window.addEventListener('scroll', () => {
            $el.classList.toggle('bg-dark-950/90', window.scrollY > 50);
            $el.classList.toggle('backdrop-blur-md', window.scrollY > 50);
            $el.classList.toggle('shadow-lg', window.scrollY > 50);
        })
     ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2 text-xl font-bold tracking-tight">
                <span class="text-white">SIDODADI</span><span class="text-brand-400">DIGITAL</span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center">
                <div class="flex items-center gap-1 bg-dark-800/60 border border-surface-border rounded-full px-2 py-1">
                    <a href="#services" class="px-4 py-2 text-sm text-gray-300 hover:text-white rounded-full transition-colors duration-200"
                       x-text="$store.lang.isEn ? 'Services' : 'Layanan'"></a>
                    <a href="#portfolio" class="px-4 py-2 text-sm text-gray-300 hover:text-white rounded-full transition-colors duration-200">
                        Portfolio
                    </a>
                    <a href="#pricing" class="px-4 py-2 text-sm text-gray-300 hover:text-white rounded-full transition-colors duration-200"
                       x-text="$store.lang.isEn ? 'Pricing' : 'Harga'"></a>
                    <a href="#testimonials" class="px-4 py-2 text-sm text-gray-300 hover:text-white rounded-full transition-colors duration-200"
                       x-text="$store.lang.isEn ? 'Testimonials' : 'Testimoni'"></a>
                    <a href="#faq" class="px-4 py-2 text-sm text-gray-300 hover:text-white rounded-full transition-colors duration-200">
                        FAQ
                    </a>
                    <a href="#about" class="px-4 py-2 text-sm text-gray-300 hover:text-white rounded-full transition-colors duration-200"
                       x-text="$store.lang.isEn ? 'About' : 'Tentang'"></a>
                </div>
            </div>

            {{-- CTA + Language Toggle + Theme Toggle (Desktop) --}}
            <div class="hidden lg:flex items-center gap-3">
                {{-- Theme Toggle --}}
                <button @click="$store.theme.toggle()"
                        class="p-2 rounded-full border transition-all duration-200"
                        :class="$store.theme.isDark
                            ? 'border-surface-border bg-dark-800/60 text-gray-400 hover:text-gray-200'
                            : 'border-surface-border bg-dark-800/60 text-gray-400 hover:text-gray-200'"
                        :aria-label="$store.theme.isDark ? 'Switch to light mode' : 'Switch to dark mode'">
                    {{-- Sun icon (shown in dark mode → click to go light) --}}
                    <svg x-show="$store.theme.isDark" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    {{-- Moon icon (shown in light mode → click to go dark) --}}
                    <svg x-show="$store.theme.isLight" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                </button>

                {{-- Language Toggle --}}
                <button @click="$store.lang.toggle()"
                        class="flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-full border transition-all duration-200"
                        :class="$store.lang.isEn
                            ? 'border-brand-400/40 bg-brand-500/10 text-brand-300'
                            : 'border-surface-border bg-dark-800/60 text-gray-400 hover:text-gray-200'">
                    <span :class="$store.lang.isId ? 'text-white font-semibold' : 'text-gray-500'">ID</span>
                    <span class="text-gray-600">|</span>
                    <span :class="$store.lang.isEn ? 'text-white font-semibold' : 'text-gray-500'">EN</span>
                </button>

                {{-- CTA Button --}}
                <a href="#contact"
                   class="touch-btn inline-flex items-center px-5 py-2.5 text-sm font-medium text-white bg-brand-500 rounded-full hover:bg-brand-400 transition-all duration-200 shadow-md shadow-brand-500/20"
                   x-text="$store.lang.isEn ? 'Contact Us' : 'Hubungi Kami'"></a>
            </div>

            {{-- Mobile Menu Button --}}
            <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 text-gray-300 hover:text-white" aria-label="Toggle menu">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         x-cloak
         class="lg:hidden bg-dark-900/95 backdrop-blur-lg border-t border-surface-border">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            <a href="#services" @click="mobileOpen = false" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-dark-800 rounded-lg transition-colors"
               x-text="$store.lang.isEn ? 'Services' : 'Layanan'"></a>
            <a href="#portfolio" @click="mobileOpen = false" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-dark-800 rounded-lg transition-colors">
                Portfolio
            </a>
            <a href="#pricing" @click="mobileOpen = false" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-dark-800 rounded-lg transition-colors"
               x-text="$store.lang.isEn ? 'Pricing' : 'Harga'"></a>
            <a href="#testimonials" @click="mobileOpen = false" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-dark-800 rounded-lg transition-colors"
               x-text="$store.lang.isEn ? 'Testimonials' : 'Testimoni'"></a>
            <a href="#faq" @click="mobileOpen = false" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-dark-800 rounded-lg transition-colors">
                FAQ
            </a>
            <a href="#about" @click="mobileOpen = false" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-dark-800 rounded-lg transition-colors"
               x-text="$store.lang.isEn ? 'About' : 'Tentang'"></a>
            <div class="pt-2 flex items-center gap-3">
                {{-- Mobile Theme Toggle --}}
                <button @click="$store.theme.toggle()"
                        class="p-3 rounded-lg border transition-all duration-200 border-surface-border bg-dark-800/60 text-gray-400"
                        :aria-label="$store.theme.isDark ? 'Switch to light mode' : 'Switch to dark mode'">
                    <svg x-show="$store.theme.isDark" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <svg x-show="$store.theme.isLight" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                </button>

                {{-- Mobile Language Toggle --}}
                <button @click="$store.lang.toggle()"
                        class="flex items-center gap-1.5 px-3 py-3 text-xs font-medium rounded-lg border transition-all duration-200"
                        :class="$store.lang.isEn
                            ? 'border-brand-400/40 bg-brand-500/10 text-brand-300'
                            : 'border-surface-border bg-dark-800/60 text-gray-400'">
                    <span :class="$store.lang.isId ? 'text-white font-semibold' : 'text-gray-500'">ID</span>
                    <span class="text-gray-600">|</span>
                    <span :class="$store.lang.isEn ? 'text-white font-semibold' : 'text-gray-500'">EN</span>
                </button>
                <a href="#contact" @click="mobileOpen = false"
                   class="flex-1 block text-center px-4 py-3 text-sm font-medium text-white bg-brand-600 rounded-lg hover:bg-brand-700 transition-colors"
                   x-text="$store.lang.isEn ? 'Contact Us' : 'Hubungi Kami'"></a>
            </div>
        </div>
    </div>
</nav>
