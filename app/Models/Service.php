<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'slug',
        'badge_text',
        'icon',
        'short_description',
        'detail_text',
        'image',
        'features',
        'tech_stack',
        'cta_text',
        'section_id',
        'order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'tech_stack' => 'array',
        'is_active' => 'boolean',
    ];
}
