<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Starter, Professional, Enterprise
            $table->string('subtitle_id');
            $table->string('subtitle_en');
            $table->decimal('price', 12, 0); // in IDR
            $table->string('price_label_id')->default('Juta');
            $table->string('price_label_en')->default('M IDR');
            $table->json('features_id'); // ["Hingga 5 halaman", ...]
            $table->json('features_en'); // ["Up to 5 pages", ...]
            $table->string('cta_label_id')->default('Mulai Sekarang');
            $table->string('cta_label_en')->default('Get Started');
            $table->string('wa_message')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_packages');
    }
};
