<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'SidodadiDigital - Jasa Pembuatan Website Profesional. Kami membantu bisnis Anda berkembang dengan solusi digital terbaik.')">
    <meta name="keywords" content="jasa pembuatan website, web developer, website profesional, sidodadi digital">
    <meta name="author" content="SidodadiDigital">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#020a13">

    @php
        $__gtmId        = \App\Models\SiteSetting::getValue('gtm_id', '');
        $__googleAdsId  = \App\Models\SiteSetting::getValue('google_ads_id', '');
        $__metaPixelId  = \App\Models\SiteSetting::getValue('meta_pixel_id', '');
        $__tiktokPixelId= \App\Models\SiteSetting::getValue('tiktok_pixel_id', '');
        $__customHead   = \App\Models\SiteSetting::getValue('custom_head_script', '');
    @endphp

    {{-- Google Tag Manager --}}
    @if($__gtmId)
    <script>
        window.dataLayer = window.dataLayer || [];
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ $__gtmId }}');
    </script>
    @endif

    {{-- Google Ads (gtag.js) --}}
    @if($__googleAdsId)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $__googleAdsId }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ $__googleAdsId }}');
    </script>
    @endif

    {{-- Meta (Facebook) Pixel --}}
    @if($__metaPixelId)
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ $__metaPixelId }}');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ $__metaPixelId }}&ev=PageView&noscript=1"/></noscript>
    @endif

    {{-- TikTok Pixel --}}
    @if($__tiktokPixelId)
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
            ttq.load('{{ $__tiktokPixelId }}');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    @endif

    {{-- Custom Head Script --}}
    @if($__customHead)
    {!! $__customHead !!}
    @endif

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'SidodadiDigital - Jasa Pembuatan Website Profesional')">
    <meta property="og:description" content="@yield('meta_description', 'SidodadiDigital - Jasa Pembuatan Website Profesional. Kami membantu bisnis Anda berkembang dengan solusi digital terbaik.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="SidodadiDigital">
    <meta property="og:image" content="{{ asset('images/og-cover.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'SidodadiDigital - Jasa Pembuatan Website Profesional')">
    <meta name="twitter:description" content="@yield('meta_description', 'SidodadiDigital - Jasa Pembuatan Website Profesional. Kami membantu bisnis Anda berkembang dengan solusi digital terbaik.')">
    <meta name="twitter:image" content="{{ asset('images/og-cover.png') }}">

    <title>@yield('title', 'SidodadiDigital - Jasa Pembuatan Website Profesional')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.svg') }}">

    {{-- Google Fonts: Inter (optimized weights) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Vite Assets (CSS + JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- FOUC prevention: apply theme + lang before first paint --}}
    <script>
        if (localStorage.getItem('theme') === 'light') {
            document.documentElement.classList.add('light');
        }
        (function() {
            var lang = localStorage.getItem('lang') || 'id';
            document.documentElement.lang = lang;
        })();
    </script>

    @stack('head')

    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ProfessionalService",
        "name": "SidodadiDigital",
        "description": "Jasa pembuatan website profesional. Kami membantu bisnis berkembang dengan solusi digital terbaik.",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/og-cover.jpg') }}",
        "image": "{{ asset('images/og-cover.jpg') }}",
        "telephone": "+6281234567890",
        "email": "hello@sidodadidigital.com",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Surabaya",
            "addressRegion": "Jawa Timur",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-7.2575",
            "longitude": "112.7521"
        },
        "priceRange": "$$",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
            "opens": "09:00",
            "closes": "18:00"
        },
        "sameAs": [],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.97",
            "reviewCount": "150",
            "bestRating": "5"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Web Development Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Website Company Profile",
                        "description": "Website company profile modern, cepat, dan responsif"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Website E-Commerce",
                        "description": "Toko online lengkap dengan sistem pembayaran dan dashboard admin"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Landing Page",
                        "description": "Halaman khusus untuk konversi tinggi"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Custom Web Application",
                        "description": "Aplikasi web khusus sesuai kebutuhan bisnis"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "UI/UX Design",
                        "description": "Desain antarmuka yang indah dan intuitif"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Maintenance & SEO",
                        "description": "Layanan pemeliharaan dan optimasi SEO"
                    }
                }
            ]
        }
    }
    </script>

    {{-- FAQ Schema --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Industri apa saja yang Anda layani?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kami telah bermitra dengan perusahaan di bidang retail, F&B, keuangan, kesehatan, manufaktur, dan startup teknologi."
                }
            },
            {
                "@type": "Question",
                "name": "Apakah ada support setelah website jadi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tentu! Kami menyediakan layanan maintenance bulanan termasuk update keamanan, backup rutin, monitoring uptime, dan perbaikan bug."
                }
            },
            {
                "@type": "Question",
                "name": "Berapa lama proses pembuatan website?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tergantung kompleksitasnya. Landing page 1-2 minggu, company profile 2-4 minggu, web application custom 1-3 bulan."
                }
            },
            {
                "@type": "Question",
                "name": "Apakah melayani UMKM dan bisnis kecil?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tentu saja! Kami memiliki paket khusus untuk UMKM dan bisnis kecil dengan harga terjangkau tanpa mengorbankan kualitas."
                }
            },
            {
                "@type": "Question",
                "name": "Apa yang membedakan SidodadiDigital?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kami tidak hanya membuat website — kami menjadi partner digital Anda. Dengan pendekatan personal, proses transparan, dan fokus pada hasil bisnis."
                }
            }
        ]
    }
    </script>
</head>
<body class="bg-dark-950 text-white font-sans antialiased">

    {{-- Google Tag Manager (noscript) --}}
    @if($__gtmId)
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $__gtmId }}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Floating WhatsApp Button --}}
    @php $__waNumber = \App\Models\SiteSetting::getValue('contact_whatsapp', '6281234567890'); @endphp
    <a href="https://wa.me/{{ $__waNumber }}?text=Halo%20SidodadiDigital,%20saya%20ingin%20bertanya"
       target="_blank"
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-40 w-14 h-14 bg-green-500 hover:bg-green-400 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30 hover:shadow-xl hover:shadow-green-400/40 transition-all duration-200 hover:scale-110"
       aria-label="Chat via WhatsApp"
       onclick="window.dataLayer && window.dataLayer.push({event:'wa_float_click'})">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    {{-- Cookie Consent Banner --}}
    <div x-data="{ show: !localStorage.getItem('cookieConsent') }"
         x-show="show"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="translate-y-full opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="translate-y-full opacity-0"
         x-cloak
         class="fixed bottom-0 left-0 right-0 z-50 p-4 sm:p-6">
        <div class="max-w-4xl mx-auto bg-surface border border-surface-border rounded-2xl p-4 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center gap-4 shadow-2xl shadow-dark-950/50">
            <div class="flex-1">
                <p class="text-sm text-gray-300 leading-relaxed"
                   x-text="$store.lang.isEn
                       ? 'We use cookies to improve your browsing experience and analyze site traffic. By clicking Accept, you consent to our use of cookies.'
                       : 'Kami menggunakan cookies untuk meningkatkan pengalaman browsing dan menganalisa traffic situs. Dengan mengklik Terima, Anda menyetujui penggunaan cookies kami.'">
                </p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <button @click="localStorage.setItem('cookieConsent', 'accepted'); show = false"
                        class="px-5 py-2 text-sm font-medium text-white bg-brand-500 rounded-full hover:bg-brand-400 transition-colors">
                    <span x-text="$store.lang.isEn ? 'Accept' : 'Terima'"></span>
                </button>
                <button @click="localStorage.setItem('cookieConsent', 'declined'); show = false"
                        class="px-5 py-2 text-sm font-medium text-gray-400 border border-surface-border rounded-full hover:text-white hover:border-gray-500 transition-colors">
                    <span x-text="$store.lang.isEn ? 'Decline' : 'Tolak'"></span>
                </button>
            </div>
        </div>
    </div>

    {{-- Custom Body Script --}}
    @php $__customBody = \App\Models\SiteSetting::getValue('custom_body_script', ''); @endphp
    @if($__customBody)
    {!! $__customBody !!}
    @endif

    @stack('scripts')
</body>
</html>
