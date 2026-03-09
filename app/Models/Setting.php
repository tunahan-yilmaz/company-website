<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'site_name',
        'site_title',
        'meta_description',
        'phone',
        'whatsapp',
        'email',
        'address',
        'map_url',
        'map_frame',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'mini_about',
        'logo',
        'logo_black',
        'favicon',
    ];
}
