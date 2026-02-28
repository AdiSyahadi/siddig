{{-- FAQ Section --}}
@php
$faqs = [
    ['q_id' => 'Industri apa saja yang Anda layani?',
     'q_en' => 'What industries do you serve?',
     'a_id' => 'Kami telah bermitra dengan perusahaan di bidang retail, F&B, keuangan, kesehatan, manufaktur, dan startup teknologi. Jika industri Anda tidak tercantum, jangan khawatir! Tim kami senang mempelajari bidang baru.',
     'a_en' => 'We\'ve partnered with companies in retail, F&B, finance, healthcare, manufacturing, and tech startups. If your industry isn\'t listed, don\'t worry! Our team loves learning new fields.'],
    ['q_id' => 'Apakah ada support setelah website jadi?',
     'q_en' => 'Is there support after the website is done?',
     'a_id' => 'Tentu! Kami menyediakan layanan maintenance bulanan termasuk update keamanan, backup rutin, monitoring uptime, dan perbaikan bug. Anda juga bisa menghubungi kami kapan saja untuk perubahan konten.',
     'a_en' => 'Absolutely! We provide monthly maintenance services including security updates, regular backups, uptime monitoring, and bug fixes. You can also contact us anytime for content changes.'],
    ['q_id' => 'Berapa lama proses pembuatan website?',
     'q_en' => 'How long does it take to build a website?',
     'a_id' => 'Tergantung kompleksitasnya. Landing page bisa selesai dalam 1-2 minggu, company profile 2-4 minggu, dan web application custom 1-3 bulan. Kami akan memberikan timeline detail saat konsultasi awal.',
     'a_en' => 'It depends on complexity. A landing page can be done in 1-2 weeks, company profile in 2-4 weeks, and custom web applications in 1-3 months. We\'ll provide a detailed timeline during the initial consultation.'],
    ['q_id' => 'Apakah melayani UMKM dan bisnis kecil?',
     'q_en' => 'Do you serve SMEs and small businesses?',
     'a_id' => 'Tentu saja! Kami memiliki paket khusus untuk UMKM dan bisnis kecil dengan harga terjangkau tanpa mengorbankan kualitas. Setiap bisnis layak punya website profesional.',
     'a_en' => 'Of course! We have special packages for SMEs and small businesses at affordable prices without compromising quality. Every business deserves a professional website.'],
    ['q_id' => 'Apa yang membedakan SidodadiDigital?',
     'q_en' => 'What makes SidodadiDigital different?',
     'a_id' => 'Kami tidak hanya membuat website — kami menjadi partner digital Anda. Dengan pendekatan personal, proses transparan, dan fokus pada hasil bisnis, kami memastikan setiap proyek memberikan dampak nyata.',
     'a_en' => 'We don\'t just build websites — we become your digital partner. With a personal approach, transparent process, and focus on business results, we ensure every project delivers real impact.'],
];
@endphp
<section id="faq" class="relative py-16 lg:py-20 section-glow section-glow-tr overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="reveal-base text-center mb-12"
             :class="shown ? 'reveal-visible' : ''">
            <span class="inline-block px-4 py-1.5 text-xs font-medium text-brand-400 border border-brand-400/30 rounded-full uppercase tracking-wider">
                FAQs
            </span>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold text-white"
                x-text="$store.lang.isEn ? 'Frequently Asked Questions' : 'Pertanyaan Umum'"></h2>
        </div>

        {{-- FAQ Accordion --}}
        <div class="reveal-base reveal-delay-1 bg-surface/30 border border-surface-border/50 rounded-2xl p-4 sm:p-6 lg:p-8"
             :class="shown ? 'reveal-visible' : ''">
         <div class="space-y-3"
              x-data="{ activeIndex: 0 }">

            @foreach($faqs as $i => $faq)
            <div class="bg-surface border border-surface-border rounded-xl overflow-hidden">
                <button @click="activeIndex = activeIndex === {{ $i }} ? null : {{ $i }}"
                        class="w-full flex items-center justify-between px-6 py-5 text-left">
                    <span class="text-sm font-medium text-white"
                          x-text="$store.lang.isEn ? '{{ addslashes($faq['q_en']) }}' : '{{ addslashes($faq['q_id']) }}'"></span>
                    <svg class="w-5 h-5 text-gray-400 transition-transform duration-200 flex-shrink-0 ml-4"
                         :class="{ 'rotate-180': activeIndex === {{ $i }} }"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="activeIndex === {{ $i }}"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="px-6 pb-5">
                    <p class="text-sm text-gray-400 leading-relaxed"
                       x-text="$store.lang.isEn ? '{{ addslashes($faq['a_en']) }}' : '{{ addslashes($faq['a_id']) }}'"></p>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
