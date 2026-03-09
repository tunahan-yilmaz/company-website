<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use Translatable;

    protected $fillable = [
        'portfolio_category_id',
        'title',
        'subtitle',
        'slug',
        'description',
        'detail_text',
        'challenge',
        'image',
        'project_url',
        'client_name',
        'date',
        'duration',
        'team_size',
        'budget',
        'location',
        'tags',
        'tech_stack',
        'features',
        'results',
        'gallery_images',
        'is_featured',
        'is_active',
        'order',
    ];

    protected $casts = [
        'tags' => 'array',
        'tech_stack' => 'array',
        'features' => 'array',
        'results' => 'array',
        'gallery_images' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }
}
