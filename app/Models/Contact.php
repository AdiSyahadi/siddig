<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
        'status',
        'notes',
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeLatest($query)
    {
        return $query->orderByDesc('created_at');
    }
}
