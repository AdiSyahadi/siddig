<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::orderByDesc('created_at');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $contacts = $query->paginate(15);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        // Auto-mark as read
        if ($contact->status === 'new') {
            $contact->update(['status' => 'read']);
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function updateStatus(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,read,replied,archived',
            'notes' => 'nullable|string',
        ]);

        $contact->update($validated);

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
