<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPackage extends Model
{
    protected $fillable = [
        'name',
        'subtitle_id',
        'subtitle_en',
        'price',
        'price_label_id',
        'price_label_en',
        'features_id',
        'features_en',
        'cta_label_id',
        'cta_label_en',
        'wa_message',
        'is_popular',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'features_id' => 'array',
            'features_en' => 'array',
            'price' => 'decimal:0',
            'is_popular' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price / 1000000, 1);
    }
}
