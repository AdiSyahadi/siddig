@extends('admin.layouts.app')

@section('title', 'Contacts')
@section('page_title', 'Contact Inbox')

@section('content')
    {{-- Filter --}}
    <div class="flex items-center gap-2 mb-6">
        @php $currentStatus = request('status'); @endphp
        <a href="{{ route('admin.contacts.index') }}"
           class="px-3 py-1.5 text-xs rounded-lg {{ !$currentStatus ? 'bg-brand-500/10 text-brand-400 border border-brand-500/20' : 'text-gray-400 border border-surface-border hover:text-white' }}">
            Semua
        </a>
        @foreach (['new' => 'New', 'read' => 'Read', 'replied' => 'Replied', 'archived' => 'Archived'] as $key => $label)
            <a href="{{ route('admin.contacts.index', ['status' => $key]) }}"
               class="px-3 py-1.5 text-xs rounded-lg {{ $currentStatus === $key ? 'bg-brand-500/10 text-brand-400 border border-brand-500/20' : 'text-gray-400 border border-surface-border hover:text-white' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>

    <div class="bg-surface border border-surface-border rounded-xl overflow-hidden">
        @if ($contacts->isEmpty())
            <div class="p-8 text-center">
                <p class="text-sm text-gray-500">Belum ada pesan masuk.</p>
            </div>
        @else
            <div class="divide-y divide-surface-border">
                @foreach ($contacts as $contact)
                    <a href="{{ route('admin.contacts.show', $contact) }}" class="block px-5 py-4 hover:bg-dark-800/30 transition-colors">
                        <div class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-full {{ $contact->status === 'new' ? 'bg-brand-500/20' : 'bg-dark-700' }} flex items-center justify-center shrink-0 mt-0.5">
                                <span class="text-xs font-semibold {{ $contact->status === 'new' ? 'text-brand-400' : 'text-gray-500' }}">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-0.5">
                                    <p class="text-sm font-medium {{ $contact->status === 'new' ? 'text-white' : 'text-gray-300' }}">{{ $contact->name }}</p>
                                    @if ($contact->status === 'new')
                                        <span class="px-1.5 py-0.5 text-[10px] font-semibold bg-brand-500 text-white rounded">NEW</span>
                                    @elseif ($contact->status === 'replied')
                                        <span class="px-1.5 py-0.5 text-[10px] font-semibold bg-green-500/20 text-green-400 rounded">REPLIED</span>
                                    @elseif ($contact->status === 'archived')
                                        <span class="px-1.5 py-0.5 text-[10px] font-semibold bg-gray-500/20 text-gray-400 rounded">ARCHIVED</span>
                                    @endif
                                    <span class="text-xs text-gray-500 ml-auto shrink-0">{{ $contact->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="text-xs text-gray-500">{{ $contact->email }} {{ $contact->phone ? '· ' . $contact->phone : '' }}</p>
                                <p class="text-sm text-gray-400 mt-1 truncate">{{ $contact->service ? '['.$contact->service.'] ' : '' }}{{ Str::limit($contact->message, 100) }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            @if ($contacts->hasPages())
                <div class="px-5 py-3 border-t border-surface-border">
                    {{ $contacts->appends(request()->query())->links() }}
                </div>
            @endif
        @endif
    </div>
@endsection
