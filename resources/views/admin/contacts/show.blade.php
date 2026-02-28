@extends('admin.layouts.app')

@section('title', 'Detail Pesan')
@section('page_title', 'Detail Pesan')

@section('content')
    <div class="max-w-3xl">
        <div class="bg-surface border border-surface-border rounded-xl">
            {{-- Header --}}
            <div class="px-6 py-4 border-b border-surface-border">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500/20 flex items-center justify-center">
                        <span class="text-sm font-semibold text-brand-400">{{ strtoupper(substr($contact->name, 0, 1)) }}</span>
                    </div>
                    <div>
                        <p class="text-base font-semibold text-white">{{ $contact->name }}</p>
                        <p class="text-xs text-gray-400">{{ $contact->email }} {{ $contact->phone ? '· ' . $contact->phone : '' }}</p>
                    </div>
                    <div class="ml-auto text-right">
                        <p class="text-xs text-gray-500">{{ $contact->created_at->format('d M Y H:i') }}</p>
                        @if ($contact->service)
                            <span class="px-2 py-0.5 text-xs bg-brand-500/10 text-brand-400 rounded-full">{{ $contact->service }}</span>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Message Body --}}
            <div class="px-6 py-5">
                <p class="text-sm text-gray-300 leading-relaxed whitespace-pre-wrap">{{ $contact->message }}</p>
            </div>

            {{-- Status Update --}}
            <div class="px-6 py-4 border-t border-surface-border">
                <form method="POST" action="{{ route('admin.contacts.updateStatus', $contact) }}" class="space-y-3">
                    @csrf @method('PATCH')

                    <div class="flex items-center gap-3">
                        <label class="text-sm text-gray-400 shrink-0">Status:</label>
                        <select name="status"
                                class="px-3 py-2 text-sm bg-dark-800 border border-surface-border rounded-lg text-white focus:border-brand-500 outline-none">
                            @foreach (['new' => 'New', 'read' => 'Read', 'replied' => 'Replied', 'archived' => 'Archived'] as $key => $label)
                                <option value="{{ $key }}" {{ $contact->status === $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-400 transition-colors">
                            Update
                        </button>
                    </div>

                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Notes</label>
                        <textarea name="notes" rows="2"
                                  class="w-full px-3 py-2 text-sm bg-dark-800 border border-surface-border rounded-lg text-white placeholder-gray-500 focus:border-brand-500 outline-none resize-none"
                                  placeholder="Catatan internal...">{{ $contact->notes }}</textarea>
                    </div>
                </form>
            </div>

            {{-- Actions --}}
            <div class="px-6 py-4 border-t border-surface-border flex items-center gap-3">
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->phone) }}?text=Halo%20{{ urlencode($contact->name) }},%20terima%20kasih%20sudah%20menghubungi%20SidodadiDigital."
                   target="_blank" rel="noopener"
                   class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-500 transition-colors inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                    Reply via WA
                </a>
                <a href="mailto:{{ $contact->email }}"
                   class="px-4 py-2 text-sm font-medium text-gray-400 border border-surface-border rounded-lg hover:text-white hover:border-gray-500 transition-colors">
                    Reply via Email
                </a>
                <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" onsubmit="return confirm('Hapus pesan ini?')" class="ml-auto">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-gray-500 hover:text-red-400 text-sm transition-colors">Hapus</button>
                </form>
            </div>
        </div>

        <a href="{{ route('admin.contacts.index') }}" class="inline-block mt-4 text-sm text-gray-400 hover:text-brand-400 transition-colors">← Kembali ke Inbox</a>
    </div>
@endsection
