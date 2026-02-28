<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PricingPackage;
use App\Models\Testimonial;
use App\Models\SiteSetting;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios   = Portfolio::active()->ordered()->get();
        $packages     = PricingPackage::active()->ordered()->get();
        $testimonials = Testimonial::active()->ordered()->get();

        // Ad & tracking pixels for layout injection
        $pixels = [
            'gtm_id'            => SiteSetting::getValue('gtm_id', ''),
            'google_ads_id'     => SiteSetting::getValue('google_ads_id', ''),
            'google_ads_label'  => SiteSetting::getValue('google_ads_label', ''),
            'meta_pixel_id'     => SiteSetting::getValue('meta_pixel_id', ''),
            'tiktok_pixel_id'   => SiteSetting::getValue('tiktok_pixel_id', ''),
            'custom_head_script'=> SiteSetting::getValue('custom_head_script', ''),
            'custom_body_script'=> SiteSetting::getValue('custom_body_script', ''),
        ];

        $contact = [
            'whatsapp' => SiteSetting::getValue('contact_whatsapp', '6281234567890'),
            'email'    => SiteSetting::getValue('contact_email', 'hello@sidodadidigital.com'),
            'address'  => SiteSetting::getValue('contact_address', 'Surabaya, Jawa Timur'),
        ];

        return view('pages.home', compact(
            'portfolios', 'packages', 'testimonials', 'pixels', 'contact'
        ));
    }
}
