<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:50',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create(array_merge($validated, [
            'status' => 'new',
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim!',
        ]);
    }
}
