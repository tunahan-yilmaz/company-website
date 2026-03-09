<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'uptitle',
        'title',
        'subtitle',
        'btn_text',
        'btn_url',
        'btn_text_2',
        'btn_url_2',
        'image',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
