{{-- Testimonials Section --}}
@php
$row1 = [
    ['initials' => 'DW', 'name' => 'Daniel Wijaya', 'role' => 'CEO, Wijaya Group', 'color' => 'brand-600',
     'id' => ['Dengan bantuan SidodadiDigital, website kami jadi lebih profesional. Pelanggan lebih percaya dan penjualan meningkat drastis.'],
     'en' => ['With SidodadiDigital\'s help, our website became more professional. Customers trust us more and sales have increased dramatically.']],
    ['initials' => 'AS', 'name' => 'Aiko Santoso', 'role' => 'COO, NextWave Startups', 'color' => 'brand-500',
     'id' => ['Yang paling berkesan adalah kehangatan timnya. SidodadiDigital menjelaskan semua dengan jelas, membuat kami merasa tenang.'],
     'en' => ['What impressed us most was the warmth of their team. SidodadiDigital explained everything clearly, making us feel at ease.']],
    ['initials' => 'MA', 'name' => 'Marcus Andhika', 'role' => 'CTO, BrightPath Logistics', 'color' => 'brand-400',
     'id' => ['SidodadiDigital membuat migrasi website kami berjalan mulus. Sistem sekarang lebih cepat, aman, dan hemat biaya.'],
     'en' => ['SidodadiDigital made our website migration seamless. The system is now faster, more secure, and cost-effective.']],
    ['initials' => 'CJ', 'name' => 'Camille Johanes', 'role' => 'Head of Operations, NovaRetail', 'color' => 'brand-300',
     'id' => ['Mereka memandu kami melewati proses transformasi digital dan membuat semuanya terasa sederhana.'],
     'en' => ['They guided us through the digital transformation process and made everything feel simple.']],
];
$row2 = [
    ['initials' => 'CK', 'name' => 'Chris Kurniawan', 'role_id' => 'Pemilik, Kurniawan Outdoors', 'role_en' => 'Owner, Kurniawan Outdoors', 'color' => 'brand-600',
     'id' => ['Kami khawatir soal biaya, tapi paket Starter mereka memberikan semua yang kami butuhkan untuk modernisasi dengan harga terjangkau.'],
     'en' => ['We were worried about cost, but their Starter package gave us everything we needed for modernization at an affordable price.']],
    ['initials' => 'JP', 'name' => 'Jordan Putra', 'role' => 'Head of Digital Marketing, Pulse Media', 'color' => 'brand-500',
     'id' => ['Mereka tidak pernah memberikan solusi template. SidodadiDigital menyesuaikan solusi yang terbayar setiap hari.'],
     'en' => ['They never give template solutions. SidodadiDigital customizes solutions that pay for themselves every day.']],
    ['initials' => 'PO', 'name' => 'Patrick Ongko', 'role' => 'Director of Technology, Greenfield Mfg', 'color' => 'brand-400',
     'id' => ['SidodadiDigital lebih dari sekadar vendor. Mereka membantu kami memikirkan ulang strategi teknologi dan menjadi partner sejati.'],
     'en' => ['SidodadiDigital is more than just a vendor. They helped us rethink our tech strategy and became a true partner.']],
    ['initials' => 'SM', 'name' => 'Sofia Maharani', 'role' => 'Chief Strategy, MediaPlus', 'color' => 'brand-300',
     'id' => ['Kami butuh website yang cepat dan secure. SidodadiDigital deliver tepat waktu dengan kualitas terbaik.'],
     'en' => ['We needed a fast and secure website. SidodadiDigital delivered on time with the best quality.']],
];
$avatarStyles = [
    'brand-600' => 'bg-brand-600/20 text-brand-400',
    'brand-500' => 'bg-brand-500/20 text-brand-300',
    'brand-400' => 'bg-brand-400/20 text-brand-200',
    'brand-300' => 'bg-brand-300/20 text-brand-100',
];
@endphp
<section id="testimonials" class="relative py-16 lg:py-20 overflow-hidden"
         x-data="{ shown: false }"
         x-intersect.once="shown = true">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="reveal-base text-center mb-12"
             :class="shown ? 'reveal-visible' : ''">
            <span class="inline-block px-4 py-1.5 text-xs font-medium text-brand-400 border border-brand-400/30 rounded-full uppercase tracking-wider"
                  x-text="$store.lang.isEn ? 'Testimonials' : 'Testimoni'"></span>
            <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-bold text-white"
                x-text="$store.lang.isEn ? 'What Our Clients Say' : 'Kata Klien Kami'"></h2>
        </div>
    </div>

    {{-- Testimonial Row 1 (scrolls left) --}}
    <div class="reveal-base reveal-delay-1 mb-6 marquee-wrapper testimonial-scroll-wrapper"
         :class="shown ? 'reveal-visible' : ''">
        <div class="marquee-track gap-4 sm:gap-6">
            @foreach([false, true] as $isDuplicate)
            <div class="flex gap-4 sm:gap-6 shrink-0 {{ !$isDuplicate ? 'pl-4 sm:pl-6 lg:pl-8' : '' }}" {!! $isDuplicate ? 'aria-hidden="true"' : '' !!}>
                @foreach($row1 as $t)
                <div class="flex-shrink-0 w-72 sm:w-80 p-6 bg-surface border border-surface-border rounded-2xl">
                    <p class="text-gray-300 text-sm leading-relaxed mb-6"
                       x-text="($store.lang.isEn ? '&ldquo;{{ addslashes($t['en'][0]) }}&rdquo;' : '&ldquo;{{ addslashes($t['id'][0]) }}&rdquo;')">
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full {{ $avatarStyles[$t['color']] }} flex items-center justify-center text-sm font-bold">{{ $t['initials'] }}</div>
                        <div>
                            <p class="text-white text-sm font-medium">{{ $t['name'] }}</p>
                            <p class="text-gray-400 text-xs">{{ $t['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

    {{-- Testimonial Row 2 (scrolls right) --}}
    <div class="reveal-base reveal-delay-2 marquee-wrapper testimonial-scroll-wrapper"
         :class="shown ? 'reveal-visible' : ''">
        <div class="marquee-track-reverse gap-4 sm:gap-6">
            @foreach([false, true] as $isDuplicate)
            <div class="flex gap-4 sm:gap-6 shrink-0 {{ !$isDuplicate ? 'pl-4 sm:pl-6 lg:pl-8' : '' }}" {!! $isDuplicate ? 'aria-hidden="true"' : '' !!}>
                @foreach($row2 as $t)
                <div class="flex-shrink-0 w-72 sm:w-80 p-6 bg-surface border border-surface-border rounded-2xl">
                    <p class="text-gray-300 text-sm leading-relaxed mb-6"
                       x-text="($store.lang.isEn ? '&ldquo;{{ addslashes($t['en'][0]) }}&rdquo;' : '&ldquo;{{ addslashes($t['id'][0]) }}&rdquo;')">
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full {{ $avatarStyles[$t['color']] }} flex items-center justify-center text-sm font-bold">{{ $t['initials'] }}</div>
                        <div>
                            <p class="text-white text-sm font-medium">{{ $t['name'] }}</p>
                            @if(isset($t['role_id']))
                            <p class="text-gray-400 text-xs" x-text="$store.lang.isEn ? '{{ $t['role_en'] }}' : '{{ $t['role_id'] }}'"></p>
                            @else
                            <p class="text-gray-400 text-xs">{{ $t['role'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>
