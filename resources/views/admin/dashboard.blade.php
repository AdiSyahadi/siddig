@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    {{-- Stats Grid --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-surface border border-surface-border rounded-xl p-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-brand-500/10 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-white">{{ $stats['portfolios'] }}</p>
                    <p class="text-xs text-gray-400">Portfolio</p>
                </div>
            </div>
        </div>

        <div class="bg-surface border border-surface-border rounded-xl p-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-white">{{ $stats['pricing'] }}</p>
                    <p class="text-xs text-gray-400">Pricing</p>
                </div>
            </div>
        </div>

        <div class="bg-surface border border-surface-border rounded-xl p-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-purple-500/10 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-white">{{ $stats['testimonials'] }}</p>
                    <p class="text-xs text-gray-400">Testimonials</p>
                </div>
            </div>
        </div>

        <div class="bg-surface border border-surface-border rounded-xl p-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-2xl font-bold text-white">{{ $stats['contacts_new'] }}<span class="text-sm text-gray-500 font-normal">/{{ $stats['contacts_total'] }}</span></p>
                    <p class="text-xs text-gray-400">New Contacts</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Contacts --}}
    <div class="bg-surface border border-surface-border rounded-xl">
        <div class="px-5 py-4 border-b border-surface-border flex items-center justify-between">
            <h2 class="text-sm font-semibold text-white">Pesan Terbaru</h2>
            <a href="{{ route('admin.contacts.index') }}" class="text-xs text-brand-400 hover:text-brand-300">Lihat Semua →</a>
        </div>

        @if ($recentContacts->isEmpty())
            <div class="p-8 text-center">
                <p class="text-sm text-gray-500">Belum ada pesan masuk.</p>
            </div>
        @else
            <div class="divide-y divide-surface-border">
                @foreach ($recentContacts as $contact)
                    <a href="{{ route('admin.contacts.show', $contact) }}" class="block px-5 py-3 hover:bg-dark-800/50 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full {{ $contact->status === 'new' ? 'bg-brand-500/20' : 'bg-dark-700' }} flex items-center justify-center shrink-0">
                                <span class="text-xs font-semibold {{ $contact->status === 'new' ? 'text-brand-400' : 'text-gray-500' }}">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <p class="text-sm font-medium text-white truncate">{{ $contact->name }}</p>
                                    @if ($contact->status === 'new')
                                        <span class="px-1.5 py-0.5 text-[10px] font-semibold bg-brand-500 text-white rounded">NEW</span>
                                    @endif
                                </div>
                                <p class="text-xs text-gray-400 truncate">{{ $contact->service ? $contact->service . ' — ' : '' }}{{ Str::limit($contact->message, 60) }}</p>
                            </div>
                            <p class="text-xs text-gray-500 shrink-0">{{ $contact->created_at->diffForHumans() }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
