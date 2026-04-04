<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

$placeholderUrls = [
    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&q=80',
    'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=80',
    'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80',
    'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800&q=80',
    'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80',
    'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&q=80',
    'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&q=80',
    'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
];

function downloadAndSave($url, $folder) {
    if (!Storage::disk('public')->exists($folder)) {
        Storage::disk('public')->makeDirectory($folder);
    }
    $contents = file_get_contents($url);
    $filename = $folder . '/' . Str::random(10) . '.jpg';
    Storage::disk('public')->put($filename, $contents);
    return $filename;
}

shuffle($placeholderUrls);
foreach(Portfolio::all() as $i => $portfolio) {
    $url = $placeholderUrls[$i % count($placeholderUrls)];
    $path = downloadAndSave($url, 'portfolios');
    $portfolio->update(['image' => $path]);
}

shuffle($placeholderUrls);
foreach(Blog::all() as $i => $blog) {
    $url = $placeholderUrls[$i % count($placeholderUrls)];
    $path = downloadAndSave($url, 'blogs');
    $blog->update(['image' => $path]);
}

shuffle($placeholderUrls);
foreach(Slider::all() as $i => $slider) {
    $url = $placeholderUrls[$i % count($placeholderUrls)];
    $path = downloadAndSave($url, 'sliders');
    $slider->update(['image' => $path]);
}

echo "Images downloaded and attached successfully.\n";
