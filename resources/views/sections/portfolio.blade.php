{{-- Portfolio Section --}}
<section id="portfolio" class="relative py-16 lg:py-20 section-glow section-glow-cl overflow-hidden"
         x-data="{ shown: false, activeFilter: 'all' }"
         x-intersect.once="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="reveal-base text-center mb-12"
             :class="shown ? 'reveal-visible' : ''">
            <span class="inline-block px-4 py-1.5 text-xs font-medium text-brand-400 border border-brand-400/30 rounded-full uppercase tracking-wider">
                Portfolio
            </span>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold text-white"
                x-text="$store.lang.isEn ? 'Our Recent Work' : 'Karya Terbaru Kami'"></h2>
            <p class="mt-3 text-gray-400 max-w-2xl mx-auto"
               x-text="$store.lang.isEn ? 'Browse through our latest projects across various industries.' : 'Lihat proyek terbaru kami di berbagai industri.'"></p>
        </div>

        {{-- Filter Tabs --}}
        <div class="reveal-base reveal-delay-1 flex flex-wrap items-center justify-center gap-2 mb-10"
             :class="shown ? 'reveal-visible' : ''">
            <button @click="activeFilter = 'all'"
                    class="px-4 py-2 text-sm rounded-full border transition-all duration-200"
                    :class="activeFilter === 'all' ? 'bg-brand-500 border-brand-500 text-white' : 'border-surface-border text-gray-400 hover:text-white hover:border-gray-500'"
                    x-text="$store.lang.isEn ? 'All' : 'Semua'"></button>
            <button @click="activeFilter = 'company-profile'"
                    class="px-4 py-2 text-sm rounded-full border transition-all duration-200"
                    :class="activeFilter === 'company-profile' ? 'bg-brand-500 border-brand-500 text-white' : 'border-surface-border text-gray-400 hover:text-white hover:border-gray-500'">
                Company Profile
            </button>
            <button @click="activeFilter = 'ecommerce'"
                    class="px-4 py-2 text-sm rounded-full border transition-all duration-200"
                    :class="activeFilter === 'ecommerce' ? 'bg-brand-500 border-brand-500 text-white' : 'border-surface-border text-gray-400 hover:text-white hover:border-gray-500'">
                E-Commerce
            </button>
            <button @click="activeFilter = 'landing-page'"
                    class="px-4 py-2 text-sm rounded-full border transition-all duration-200"
                    :class="activeFilter === 'landing-page' ? 'bg-brand-500 border-brand-500 text-white' : 'border-surface-border text-gray-400 hover:text-white hover:border-gray-500'">
                Landing Page
            </button>
            <button @click="activeFilter = 'web-app'"
                    class="px-4 py-2 text-sm rounded-full border transition-all duration-200"
                    :class="activeFilter === 'web-app' ? 'bg-brand-500 border-brand-500 text-white' : 'border-surface-border text-gray-400 hover:text-white hover:border-gray-500'">
                Web App
            </button>
        </div>

        {{-- Portfolio Grid --}}
        <div class="reveal-base reveal-delay-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
             :class="shown ? 'reveal-visible' : ''">

            {{-- Project 1: E-Commerce --}}
            <div class="group touch-card bg-surface border border-surface-border rounded-2xl overflow-hidden hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300"
                 x-show="activeFilter === 'all' || activeFilter === 'ecommerce'"
                 x-transition>
                <div class="relative aspect-video bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-brand-600/5"></div>
                    <div class="relative z-10 w-4/5 h-4/5 bg-dark-700/80 rounded-lg border border-surface-border p-3">
                        <div class="w-full h-2 bg-dark-600 rounded mb-2"></div>
                        <div class="grid grid-cols-3 gap-2 h-[60%]">
                            <div class="bg-brand-600/20 rounded"></div>
                            <div class="bg-brand-500/15 rounded"></div>
                            <div class="bg-brand-600/20 rounded"></div>
                        </div>
                        <div class="mt-2 w-1/3 h-2 bg-brand-500/30 rounded"></div>
                    </div>
                    <div class="absolute inset-0 bg-dark-950/0 group-hover:bg-dark-950/60 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="px-4 py-2 bg-brand-500 text-white text-sm rounded-full font-medium"
                              x-text="$store.lang.isEn ? 'View Detail' : 'Lihat Detail'"></span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="text-xs text-brand-400 font-medium uppercase tracking-wider">E-Commerce</span>
                    <h3 class="mt-1 text-lg font-semibold text-white">FreshMart Online Store</h3>
                    <p class="mt-1 text-sm text-gray-400"
                       x-text="$store.lang.isEn ? 'Full-featured e-commerce platform with payment integration and inventory management.' : 'Platform e-commerce lengkap dengan integrasi pembayaran dan manajemen inventori.'"></p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Laravel</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Vue.js</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Midtrans</span>
                    </div>
                </div>
            </div>

            {{-- Project 2: Company Profile --}}
            <div class="group touch-card bg-surface border border-surface-border rounded-2xl overflow-hidden hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300"
                 x-show="activeFilter === 'all' || activeFilter === 'company-profile'"
                 x-transition>
                <div class="relative aspect-video bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-brand-500/5"></div>
                    <div class="relative z-10 w-4/5 h-4/5 bg-dark-700/80 rounded-lg border border-surface-border p-3">
                        <div class="w-1/2 h-2 bg-dark-600 rounded mb-3"></div>
                        <div class="w-full h-[40%] bg-brand-600/15 rounded mb-2"></div>
                        <div class="w-3/4 h-1.5 bg-dark-600 rounded mb-1"></div>
                        <div class="w-1/2 h-1.5 bg-dark-600 rounded"></div>
                    </div>
                    <div class="absolute inset-0 bg-dark-950/0 group-hover:bg-dark-950/60 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="px-4 py-2 bg-brand-500 text-white text-sm rounded-full font-medium"
                              x-text="$store.lang.isEn ? 'View Detail' : 'Lihat Detail'"></span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="text-xs text-brand-400 font-medium uppercase tracking-wider">Company Profile</span>
                    <h3 class="mt-1 text-lg font-semibold text-white">PT Bintang Jaya Group</h3>
                    <p class="mt-1 text-sm text-gray-400"
                       x-text="$store.lang.isEn ? 'Modern company profile with virtual tour and bilingual content management.' : 'Company profile modern dengan virtual tour dan manajemen konten bilingual.'"></p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Next.js</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Tailwind</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">CMS</span>
                    </div>
                </div>
            </div>

            {{-- Project 3: Landing Page --}}
            <div class="group touch-card bg-surface border border-surface-border rounded-2xl overflow-hidden hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300"
                 x-show="activeFilter === 'all' || activeFilter === 'landing-page'"
                 x-transition>
                <div class="relative aspect-video bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-brand-400/5"></div>
                    <div class="relative z-10 w-4/5 h-4/5 bg-dark-700/80 rounded-lg border border-surface-border p-3 flex flex-col items-center justify-center">
                        <div class="w-2/3 h-2 bg-dark-600 rounded mb-2"></div>
                        <div class="w-1/2 h-1.5 bg-dark-600 rounded mb-3"></div>
                        <div class="w-1/3 h-6 bg-brand-500/30 rounded-full"></div>
                    </div>
                    <div class="absolute inset-0 bg-dark-950/0 group-hover:bg-dark-950/60 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="px-4 py-2 bg-brand-500 text-white text-sm rounded-full font-medium"
                              x-text="$store.lang.isEn ? 'View Detail' : 'Lihat Detail'"></span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="text-xs text-brand-400 font-medium uppercase tracking-wider">Landing Page</span>
                    <h3 class="mt-1 text-lg font-semibold text-white">NutriLife Health Campaign</h3>
                    <p class="mt-1 text-sm text-gray-400"
                       x-text="$store.lang.isEn ? 'High-conversion landing page for health product launch campaign.' : 'Landing page konversi tinggi untuk kampanye peluncuran produk kesehatan.'"></p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">React</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">GSAP</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">A/B Test</span>
                    </div>
                </div>
            </div>

            {{-- Project 4: Web App --}}
            <div class="group touch-card bg-surface border border-surface-border rounded-2xl overflow-hidden hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300"
                 x-show="activeFilter === 'all' || activeFilter === 'web-app'"
                 x-transition>
                <div class="relative aspect-video bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-brand-600/5"></div>
                    <div class="relative z-10 w-4/5 h-4/5 bg-dark-700/80 rounded-lg border border-surface-border p-3 flex gap-2">
                        <div class="w-1/4 h-full bg-dark-800 rounded flex flex-col gap-1 p-1">
                            <div class="w-full h-2 bg-dark-600 rounded"></div>
                            <div class="w-full h-2 bg-brand-600/20 rounded"></div>
                            <div class="w-full h-2 bg-dark-600 rounded"></div>
                        </div>
                        <div class="flex-1 bg-dark-800 rounded p-1">
                            <div class="w-full h-2 bg-dark-600 rounded mb-1"></div>
                            <div class="w-full h-[60%] bg-brand-500/10 rounded"></div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-dark-950/0 group-hover:bg-dark-950/60 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="px-4 py-2 bg-brand-500 text-white text-sm rounded-full font-medium"
                              x-text="$store.lang.isEn ? 'View Detail' : 'Lihat Detail'"></span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="text-xs text-brand-400 font-medium uppercase tracking-wider">Web App</span>
                    <h3 class="mt-1 text-lg font-semibold text-white">LogiTrack Management System</h3>
                    <p class="mt-1 text-sm text-gray-400"
                       x-text="$store.lang.isEn ? 'Custom logistics management system with real-time tracking and reporting dashboard.' : 'Sistem manajemen logistik custom dengan tracking real-time dan dashboard pelaporan.'"></p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Laravel</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Livewire</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">MySQL</span>
                    </div>
                </div>
            </div>

            {{-- Project 5: Company Profile --}}
            <div class="group touch-card bg-surface border border-surface-border rounded-2xl overflow-hidden hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300"
                 x-show="activeFilter === 'all' || activeFilter === 'company-profile'"
                 x-transition>
                <div class="relative aspect-video bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-brand-500/5"></div>
                    <div class="relative z-10 w-4/5 h-4/5 bg-dark-700/80 rounded-lg border border-surface-border p-3">
                        <div class="flex gap-2 mb-2">
                            <div class="w-8 h-2 bg-dark-600 rounded"></div>
                            <div class="w-8 h-2 bg-dark-600 rounded"></div>
                            <div class="w-8 h-2 bg-brand-500/20 rounded"></div>
                        </div>
                        <div class="w-full h-[50%] bg-gradient-to-r from-brand-600/10 to-brand-400/10 rounded mb-2"></div>
                        <div class="grid grid-cols-2 gap-1 h-[20%]">
                            <div class="bg-dark-600 rounded"></div>
                            <div class="bg-dark-600 rounded"></div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-dark-950/0 group-hover:bg-dark-950/60 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="px-4 py-2 bg-brand-500 text-white text-sm rounded-full font-medium"
                              x-text="$store.lang.isEn ? 'View Detail' : 'Lihat Detail'"></span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="text-xs text-brand-400 font-medium uppercase tracking-wider">Company Profile</span>
                    <h3 class="mt-1 text-lg font-semibold text-white">Arkana Law Firm</h3>
                    <p class="mt-1 text-sm text-gray-400"
                       x-text="$store.lang.isEn ? 'Elegant corporate site with case portfolio and online consultation booking.' : 'Situs korporat elegan dengan portofolio kasus dan booking konsultasi online.'"></p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">WordPress</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Elementor</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">WooCommerce</span>
                    </div>
                </div>
            </div>

            {{-- Project 6: E-Commerce --}}
            <div class="group touch-card bg-surface border border-surface-border rounded-2xl overflow-hidden hover:border-brand-600/30 hover:shadow-lg hover:shadow-brand-500/5 transition-all duration-300"
                 x-show="activeFilter === 'all' || activeFilter === 'ecommerce'"
                 x-transition>
                <div class="relative aspect-video bg-gradient-to-br from-dark-800 to-dark-900 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-brand-600/5"></div>
                    <div class="relative z-10 w-4/5 h-4/5 bg-dark-700/80 rounded-lg border border-surface-border p-3">
                        <div class="w-full h-2 bg-dark-600 rounded mb-2"></div>
                        <div class="flex gap-2 h-[60%]">
                            <div class="flex-1 bg-brand-600/15 rounded"></div>
                            <div class="w-1/3 flex flex-col gap-1">
                                <div class="flex-1 bg-dark-600 rounded"></div>
                                <div class="h-4 bg-brand-500/25 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-dark-950/0 group-hover:bg-dark-950/60 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <span class="px-4 py-2 bg-brand-500 text-white text-sm rounded-full font-medium"
                              x-text="$store.lang.isEn ? 'View Detail' : 'Lihat Detail'"></span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="text-xs text-brand-400 font-medium uppercase tracking-wider">E-Commerce</span>
                    <h3 class="mt-1 text-lg font-semibold text-white">Batik Nusantara Store</h3>
                    <p class="mt-1 text-sm text-gray-400"
                       x-text="$store.lang.isEn ? 'Online batik marketplace connecting artisans with global customers.' : 'Marketplace batik online yang menghubungkan pengrajin dengan pelanggan global.'"></p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Shopify</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Custom Theme</span>
                        <span class="px-2 py-0.5 text-xs bg-dark-700 text-gray-400 rounded">Xendit</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="reveal-base reveal-delay-3 mt-12 text-center"
             :class="shown ? 'reveal-visible' : ''">
            <p class="text-gray-400 mb-4" x-text="$store.lang.isEn ? 'Want to see more or discuss your project?' : 'Ingin lihat lebih banyak atau diskusi proyek Anda?'"></p>
            <a href="#contact"
               class="touch-btn inline-flex items-center px-6 py-3 text-sm font-medium text-brand-300 border border-brand-500/30 rounded-full hover:bg-brand-500/10 hover:border-brand-500/50 transition-all duration-200"
               x-text="$store.lang.isEn ? 'Discuss Your Project' : 'Diskusikan Proyek Anda'"></a>
        </div>
    </div>
</section>
