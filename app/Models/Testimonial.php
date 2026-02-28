<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'position_id',
        'position_en',
        'company',
        'content_id',
        'content_en',
        'avatar',
        'rating',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('created_at');
    }
}
