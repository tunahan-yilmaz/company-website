<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = [
        'title',
        'about_text',
        'image_1',
        'image_2',
        'mission',
        'vision',
        'values',
        'stat_1_number', 'stat_1_label',
        'stat_2_number', 'stat_2_label',
        'stat_3_number', 'stat_3_label',
        'stat_4_number', 'stat_4_label',
    ];
}
