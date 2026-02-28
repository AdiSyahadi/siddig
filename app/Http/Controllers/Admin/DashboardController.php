<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\PricingPackage;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'portfolios' => Portfolio::count(),
            'pricing' => PricingPackage::count(),
            'testimonials' => Testimonial::count(),
            'contacts_new' => Contact::where('status', 'new')->count(),
            'contacts_total' => Contact::count(),
        ];

        $recentContacts = Contact::orderByDesc('created_at')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentContacts'));
    }
}
