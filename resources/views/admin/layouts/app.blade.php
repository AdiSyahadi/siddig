<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - SidodadiDigital</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-950 text-white font-sans antialiased" x-data="{ sidebarOpen: false }">

    <div class="flex min-h-screen">

        {{-- Sidebar Overlay (mobile) --}}
        <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-dark-950/80 z-40 lg:hidden" @click="sidebarOpen = false" x-cloak></div>

        {{-- Sidebar --}}
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 w-64 bg-surface border-r border-surface-border transition-transform duration-200 lg:translate-x-0 lg:static lg:z-auto flex flex-col">

            {{-- Logo --}}
            <div class="flex items-center gap-2.5 px-5 h-16 border-b border-surface-border shrink-0">
                <div class="w-8 h-8 rounded-lg bg-brand-500 flex items-center justify-center">
                    <span class="text-white font-bold text-sm">S</span>
                </div>
                <span class="text-base font-bold text-white">SidodadiDigital</span>
            </div>

            {{-- Navigation --}}
            <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
                @php
                    $navItems = [
                        ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
                        ['route' => 'admin.portfolios.index', 'label' => 'Portfolio', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>'],
                        ['route' => 'admin.pricing.index', 'label' => 'Pricing', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                        ['route' => 'admin.testimonials.index', 'label' => 'Testimonials', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>'],
                        ['route' => 'admin.contacts.index', 'label' => 'Contacts', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>', 'badge' => \App\Models\Contact::where('status', 'new')->count()],
                        ['route' => 'admin.settings.index', 'label' => 'Settings', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'],
                    ];
                @endphp

                @foreach ($navItems as $item)
                    @php
                        $isActive = request()->routeIs($item['route'] . '*') || request()->routeIs($item['route']);
                    @endphp
                    <a href="{{ route($item['route']) }}"
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-colors {{ $isActive ? 'bg-brand-500/10 text-brand-400 border border-brand-500/20' : 'text-gray-400 hover:text-white hover:bg-dark-800' }}">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                        <span>{{ $item['label'] }}</span>
                        @if (isset($item['badge']) && $item['badge'] > 0)
                            <span class="ml-auto px-2 py-0.5 text-xs font-semibold bg-red-500 text-white rounded-full">{{ $item['badge'] }}</span>
                        @endif
                    </a>
                @endforeach
            </nav>

            {{-- User Info --}}
            <div class="px-3 py-4 border-t border-surface-border shrink-0">
                <div class="flex items-center gap-3 px-3">
                    <div class="w-8 h-8 rounded-full bg-brand-600/20 flex items-center justify-center">
                        <span class="text-xs font-semibold text-brand-400">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                    </div>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-red-400 transition-colors" title="Logout">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col min-w-0">

            {{-- Top Bar --}}
            <header class="h-16 bg-surface border-b border-surface-border flex items-center px-4 lg:px-6 shrink-0">
                <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-400 hover:text-white mr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <h1 class="text-lg font-semibold text-white">@yield('page_title', 'Dashboard')</h1>
                <div class="ml-auto flex items-center gap-3">
                    <a href="/" target="_blank" class="text-xs text-gray-400 hover:text-brand-400 transition-colors flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                        View Site
                    </a>
                </div>
            </header>

            {{-- Page Content --}}
            <main class="flex-1 p-4 lg:p-6 overflow-y-auto">
                {{-- Flash Messages --}}
                @if (session('success'))
                    <div class="mb-4 p-3 bg-green-500/10 border border-green-500/20 rounded-xl flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-sm text-green-400">{{ session('success') }}</p>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-4 p-3 bg-red-500/10 border border-red-500/20 rounded-xl flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        <p class="text-sm text-red-400">{{ session('error') }}</p>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>
