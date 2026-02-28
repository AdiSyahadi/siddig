<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactFormController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');

// Admin Auth
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Panel (auth protected)
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('pricing', PricingController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::patch('contacts/{contact}/status', [ContactController::class, 'updateStatus'])->name('contacts.updateStatus');
    Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::get('settings', [SiteSettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SiteSettingController::class, 'update'])->name('settings.update');
});

Route::get('/sitemap.xml', function () {
    $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    $content .= '  <url>' . "\n";
    $content .= '    <loc>' . url('/') . '</loc>' . "\n";
    $content .= '    <lastmod>' . now()->toW3cString() . '</lastmod>' . "\n";
    $content .= '    <changefreq>weekly</changefreq>' . "\n";
    $content .= '    <priority>1.0</priority>' . "\n";
    $content .= '  </url>' . "\n";
    $content .= '</urlset>';

    return response($content, 200, [
        'Content-Type' => 'application/xml',
    ]);
});
