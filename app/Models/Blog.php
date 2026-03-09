<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use Translatable;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'author',
        'category',
        'excerpt',
        'content',
        'image',
        'read_time',
        'tags',
        'meta_title',
        'meta_description',
        'is_published',
        'is_active',
        'order',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'is_active' => 'boolean',
        'published_at' => 'datetime',
    ];
}
