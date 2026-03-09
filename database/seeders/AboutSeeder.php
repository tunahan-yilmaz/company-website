<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Biz Kimiz?',
                'about_text' => '<p>DBS Software olarak yazılım geliştirme, dijital pazarlama ve tasarım alanlarında yenilikçi ve etkili çözümler sunuyoruz. Müşterilerimizin başarısını kendi başarımız olarak görüyor, her projede mükemmelliği hedefliyoruz.</p>',
                'image_1' => null,
                'image_2' => null,
            ]
        );
    }
}
