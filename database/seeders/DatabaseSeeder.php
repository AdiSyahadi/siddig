<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteSetting;
use App\Models\Portfolio;
use App\Models\PricingPackage;
use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ───── Admin User ─────
        User::updateOrCreate(
            ['email' => 'admin@sidodadidigital.com'],
            [
                'name'     => 'Admin',
                'password' => Hash::make('admin123'),
            ]
        );

        // ───── Site Settings ─────
        $settings = [
            ['key' => 'site_name',        'value' => 'SidodadiDigital', 'group' => 'general', 'type' => 'text',     'label' => 'Site Name'],
            ['key' => 'site_description', 'value' => 'Jasa Pembuatan Website Profesional di Surabaya', 'group' => 'general', 'type' => 'textarea', 'label' => 'Site Description'],
            ['key' => 'contact_email',    'value' => 'hello@sidodadidigital.com', 'group' => 'contact', 'type' => 'text', 'label' => 'Email'],
            ['key' => 'contact_whatsapp', 'value' => '6281234567890',             'group' => 'contact', 'type' => 'text', 'label' => 'WhatsApp'],
            ['key' => 'contact_address',  'value' => 'Surabaya, Jawa Timur',      'group' => 'contact', 'type' => 'text', 'label' => 'Address'],
            ['key' => 'social_instagram', 'value' => '', 'group' => 'social', 'type' => 'text', 'label' => 'Instagram URL'],
            ['key' => 'social_linkedin',  'value' => '', 'group' => 'social', 'type' => 'text', 'label' => 'LinkedIn URL'],
            ['key' => 'social_github',    'value' => '', 'group' => 'social', 'type' => 'text', 'label' => 'GitHub URL'],
            ['key' => 'social_tiktok',    'value' => '', 'group' => 'social', 'type' => 'text', 'label' => 'TikTok URL'],
            ['key' => 'gtm_id',              'value' => '', 'group' => 'ads', 'type' => 'text', 'label' => 'Google Tag Manager ID'],
            ['key' => 'google_ads_id',       'value' => '', 'group' => 'ads', 'type' => 'text', 'label' => 'Google Ads Conversion ID'],
            ['key' => 'google_ads_label',    'value' => '', 'group' => 'ads', 'type' => 'text', 'label' => 'Google Ads Conversion Label'],
            ['key' => 'meta_pixel_id',       'value' => '', 'group' => 'ads', 'type' => 'text', 'label' => 'Meta Pixel ID'],
            ['key' => 'tiktok_pixel_id',     'value' => '', 'group' => 'ads', 'type' => 'text', 'label' => 'TikTok Pixel ID'],
            ['key' => 'custom_head_script', 'value' => '', 'group' => 'ads', 'type' => 'textarea', 'label' => 'Custom Head Script'],
            ['key' => 'custom_body_script', 'value' => '', 'group' => 'ads', 'type' => 'textarea', 'label' => 'Custom Body Script'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // ───── Portfolio (from frontend UI) ─────
        $portfolios = [
            [
                'title'          => 'FreshMart Online Store',
                'category'       => 'ecommerce',
                'description_id' => 'Platform e-commerce lengkap dengan integrasi pembayaran dan manajemen inventori.',
                'description_en' => 'Full-featured e-commerce platform with payment integration and inventory management.',
                'tech_stack'     => ['Laravel', 'Vue.js', 'Midtrans'],
                'sort_order'     => 1,
            ],
            [
                'title'          => 'PT Bintang Jaya Group',
                'category'       => 'company-profile',
                'description_id' => 'Company profile modern dengan virtual tour dan manajemen konten bilingual.',
                'description_en' => 'Modern company profile with virtual tour and bilingual content management.',
                'tech_stack'     => ['Next.js', 'Tailwind', 'CMS'],
                'sort_order'     => 2,
            ],
            [
                'title'          => 'NutriLife Health Campaign',
                'category'       => 'landing-page',
                'description_id' => 'Landing page konversi tinggi untuk kampanye peluncuran produk kesehatan.',
                'description_en' => 'High-conversion landing page for health product launch campaign.',
                'tech_stack'     => ['React', 'GSAP', 'A/B Test'],
                'sort_order'     => 3,
            ],
            [
                'title'          => 'LogiTrack Management System',
                'category'       => 'web-app',
                'description_id' => 'Sistem manajemen logistik custom dengan tracking real-time dan dashboard pelaporan.',
                'description_en' => 'Custom logistics management system with real-time tracking and reporting dashboard.',
                'tech_stack'     => ['Laravel', 'Livewire', 'MySQL'],
                'sort_order'     => 4,
            ],
            [
                'title'          => 'Arkana Law Firm',
                'category'       => 'company-profile',
                'description_id' => 'Situs korporat elegan dengan portofolio kasus dan booking konsultasi online.',
                'description_en' => 'Elegant corporate site with case portfolio and online consultation booking.',
                'tech_stack'     => ['WordPress', 'Elementor', 'WooCommerce'],
                'sort_order'     => 5,
            ],
            [
                'title'          => 'Batik Nusantara Store',
                'category'       => 'ecommerce',
                'description_id' => 'Marketplace batik online yang menghubungkan pengrajin dengan pelanggan global.',
                'description_en' => 'Online batik marketplace connecting artisans with global customers.',
                'tech_stack'     => ['Shopify', 'Custom Theme', 'Xendit'],
                'sort_order'     => 6,
            ],
        ];

        foreach ($portfolios as $p) {
            Portfolio::updateOrCreate(['title' => $p['title']], array_merge($p, ['is_active' => true]));
        }

        // ───── Pricing Packages (from frontend UI) ─────
        $packages = [
            [
                'name'           => 'Starter',
                'subtitle_id'   => 'Cocok untuk UMKM & bisnis kecil',
                'subtitle_en'   => 'Perfect for small businesses & SMEs',
                'price'          => 3500000,
                'price_label_id' => 'Juta',
                'price_label_en' => 'M IDR',
                'features_id'    => [
                    'Hingga 5 halaman',
                    'Desain responsif mobile',
                    'Form kontak + WhatsApp',
                    'Setup SEO dasar',
                    'Gratis domain + hosting 1 tahun',
                    'Revisi gratis 30 hari',
                ],
                'features_en'    => [
                    'Up to 5 pages',
                    'Responsive mobile design',
                    'Contact form + WhatsApp',
                    'Basic SEO setup',
                    'Free domain + hosting 1 year',
                    '30-day free revision',
                ],
                'cta_label_id'   => 'Mulai Sekarang',
                'cta_label_en'   => 'Get Started',
                'wa_message'     => 'Halo SidodadiDigital, saya tertarik paket Starter',
                'is_popular'     => false,
                'sort_order'     => 1,
            ],
            [
                'name'           => 'Professional',
                'subtitle_id'   => 'Untuk bisnis berkembang',
                'subtitle_en'   => 'For growing businesses',
                'price'          => 8500000,
                'price_label_id' => 'Juta',
                'price_label_en' => 'M IDR',
                'features_id'    => [
                    'Hingga 15 halaman',
                    'Desain UI/UX custom',
                    'CMS / dashboard admin',
                    'SEO lanjutan + Google Analytics',
                    'SSL + CDN performa',
                    'Maintenance gratis 3 bulan',
                    'Integrasi chat WhatsApp',
                ],
                'features_en'    => [
                    'Up to 15 pages',
                    'Custom UI/UX design',
                    'CMS / admin dashboard',
                    'Advanced SEO + Google Analytics',
                    'SSL + CDN performance',
                    '3-month free maintenance',
                    'WhatsApp chat integration',
                ],
                'cta_label_id'   => 'Mulai Sekarang',
                'cta_label_en'   => 'Get Started',
                'wa_message'     => 'Halo SidodadiDigital, saya tertarik paket Professional',
                'is_popular'     => true,
                'sort_order'     => 2,
            ],
            [
                'name'           => 'Enterprise',
                'subtitle_id'   => 'Untuk perusahaan besar & kebutuhan khusus',
                'subtitle_en'   => 'For large companies & custom needs',
                'price'          => 25000000,
                'price_label_id' => 'Juta',
                'price_label_en' => 'M IDR',
                'features_id'    => [
                    'Halaman tidak terbatas',
                    'Aplikasi web custom',
                    'Integrasi API & pihak ketiga',
                    'Project manager khusus',
                    'Support prioritas 24/7',
                    'Maintenance gratis 6 bulan',
                    'Serah terima source code',
                ],
                'features_en'    => [
                    'Unlimited pages',
                    'Custom web application',
                    'API & third-party integration',
                    'Dedicated project manager',
                    'Priority support 24/7',
                    '6-month free maintenance',
                    'Source code handover',
                ],
                'cta_label_id'   => 'Hubungi Sales',
                'cta_label_en'   => 'Contact Sales',
                'wa_message'     => 'Halo SidodadiDigital, saya tertarik paket Enterprise',
                'is_popular'     => false,
                'sort_order'     => 3,
            ],
        ];

        foreach ($packages as $pkg) {
            PricingPackage::updateOrCreate(['name' => $pkg['name']], array_merge($pkg, ['is_active' => true]));
        }

        // ───── Testimonials (from frontend UI) ─────
        $testimonials = [
            [
                'name'        => 'Daniel Wijaya',
                'position_id' => 'CEO',
                'position_en' => 'CEO',
                'company'     => 'Wijaya Group',
                'content_id'  => 'Dengan bantuan SidodadiDigital, website kami jadi lebih profesional. Pelanggan lebih percaya dan penjualan meningkat drastis.',
                'content_en'  => 'With SidodadiDigital\'s help, our website became more professional. Customers trust us more and sales have increased dramatically.',
                'rating'      => 5,
                'sort_order'  => 1,
            ],
            [
                'name'        => 'Aiko Santoso',
                'position_id' => 'COO',
                'position_en' => 'COO',
                'company'     => 'NextWave Startups',
                'content_id'  => 'Yang paling berkesan adalah kehangatan timnya. SidodadiDigital menjelaskan semua dengan jelas, membuat kami merasa tenang.',
                'content_en'  => 'What impressed us most was the warmth of their team. SidodadiDigital explained everything clearly, making us feel at ease.',
                'rating'      => 5,
                'sort_order'  => 2,
            ],
            [
                'name'        => 'Marcus Andhika',
                'position_id' => 'CTO',
                'position_en' => 'CTO',
                'company'     => 'BrightPath Logistics',
                'content_id'  => 'SidodadiDigital membuat migrasi website kami berjalan mulus. Sistem sekarang lebih cepat, aman, dan hemat biaya.',
                'content_en'  => 'SidodadiDigital made our website migration seamless. The system is now faster, more secure, and cost-effective.',
                'rating'      => 5,
                'sort_order'  => 3,
            ],
            [
                'name'        => 'Camille Johanes',
                'position_id' => 'Head of Operations',
                'position_en' => 'Head of Operations',
                'company'     => 'NovaRetail',
                'content_id'  => 'Mereka memandu kami melewati proses transformasi digital dan membuat semuanya terasa sederhana.',
                'content_en'  => 'They guided us through the digital transformation process and made everything feel simple.',
                'rating'      => 5,
                'sort_order'  => 4,
            ],
            [
                'name'        => 'Chris Kurniawan',
                'position_id' => 'Pemilik',
                'position_en' => 'Owner',
                'company'     => 'Kurniawan Outdoors',
                'content_id'  => 'Kami khawatir soal biaya, tapi paket Starter mereka memberikan semua yang kami butuhkan untuk modernisasi dengan harga terjangkau.',
                'content_en'  => 'We were worried about cost, but their Starter package gave us everything we needed for modernization at an affordable price.',
                'rating'      => 5,
                'sort_order'  => 5,
            ],
            [
                'name'        => 'Jordan Putra',
                'position_id' => 'Head of Digital Marketing',
                'position_en' => 'Head of Digital Marketing',
                'company'     => 'Pulse Media',
                'content_id'  => 'Mereka tidak pernah memberikan solusi template. SidodadiDigital menyesuaikan solusi yang terbayar setiap hari.',
                'content_en'  => 'They never give template solutions. SidodadiDigital customizes solutions that pay for themselves every day.',
                'rating'      => 5,
                'sort_order'  => 6,
            ],
            [
                'name'        => 'Patrick Ongko',
                'position_id' => 'Director of Technology',
                'position_en' => 'Director of Technology',
                'company'     => 'Greenfield Mfg',
                'content_id'  => 'SidodadiDigital lebih dari sekadar vendor. Mereka membantu kami memikirkan ulang strategi teknologi dan menjadi partner sejati.',
                'content_en'  => 'SidodadiDigital is more than just a vendor. They helped us rethink our tech strategy and became a true partner.',
                'rating'      => 5,
                'sort_order'  => 7,
            ],
            [
                'name'        => 'Sofia Maharani',
                'position_id' => 'Chief Strategy',
                'position_en' => 'Chief Strategy',
                'company'     => 'MediaPlus',
                'content_id'  => 'Kami butuh website yang cepat dan secure. SidodadiDigital deliver tepat waktu dengan kualitas terbaik.',
                'content_en'  => 'We needed a fast and secure website. SidodadiDigital delivered on time with the best quality.',
                'rating'      => 5,
                'sort_order'  => 8,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['name' => $t['name']], array_merge($t, ['is_active' => true]));
        }
    }
}
