@extends('admin.layouts.app')

@section('title', 'Testimonials')
@section('page_title', 'Testimonials')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-400">{{ $testimonials->total() }} testimonial</p>
        <a href="{{ route('admin.testimonials.create') }}"
           class="px-4 py-2 text-sm font-medium text-white bg-brand-500 rounded-lg hover:bg-brand-400 transition-colors">
            + Tambah Testimonial
        </a>
    </div>

    <div class="bg-surface border border-surface-border rounded-xl overflow-hidden">
        @if ($testimonials->isEmpty())
            <div class="p-8 text-center">
                <p class="text-sm text-gray-500">Belum ada testimonial.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-surface-border">
                            <th class="text-left px-5 py-3 text-xs font-medium text-gray-400 uppercase">#</th>
                            <th class="text-left px-5 py-3 text-xs font-medium text-gray-400 uppercase">Name</th>
                            <th class="text-left px-5 py-3 text-xs font-medium text-gray-400 uppercase">Company</th>
                            <th class="text-center px-5 py-3 text-xs font-medium text-gray-400 uppercase">Rating</th>
                            <th class="text-center px-5 py-3 text-xs font-medium text-gray-400 uppercase">Active</th>
                            <th class="text-right px-5 py-3 text-xs font-medium text-gray-400 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-border">
                        @foreach ($testimonials as $testi)
                            <tr class="hover:bg-dark-800/30 transition-colors">
                                <td class="px-5 py-3 text-gray-500">{{ $testi->sort_order }}</td>
                                <td class="px-5 py-3">
                                    <p class="text-white font-medium">{{ $testi->name }}</p>
                                    <p class="text-xs text-gray-500">{{ $testi->position_id }}</p>
                                </td>
                                <td class="px-5 py-3 text-gray-400">{{ $testi->company }}</td>
                                <td class="px-5 py-3 text-center">
                                    <span class="text-yellow-400">{{ str_repeat('★', $testi->rating) }}</span>
                                </td>
                                <td class="px-5 py-3 text-center">
                                    <span class="w-2 h-2 inline-block rounded-full {{ $testi->is_active ? 'bg-green-400' : 'bg-gray-600' }}"></span>
                                </td>
                                <td class="px-5 py-3 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.testimonials.edit', $testi) }}" class="text-gray-400 hover:text-brand-400 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </a>
                                        <form method="POST" action="{{ route('admin.testimonials.destroy', $testi) }}" onsubmit="return confirm('Hapus testimonial ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-gray-400 hover:text-red-400 transition-colors">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
