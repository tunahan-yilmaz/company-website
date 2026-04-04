<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $sliders = [
            [
                'uptitle'   => 'Premium Dijital Çözümler',
                'title'     => "Geleceği\nKodluyoruz",
                'subtitle'  => '10+ yıllık deneyim ile premium yazılım çözümleri ve dijital dönüşüm partneri',
                'btn_text'  => 'Projelerimiz',
                'btn_url'   => '/portfolyo',
                'btn_text_2'=> 'İletişime Geç',
                'btn_url_2' => '/iletisim',
                'image'     => null, // Unsplash: https://images.unsplash.com/photo-1451187580459-43490279c0fa
                'is_active' => true,
                'order'     => 1,
            ],
            [
                'uptitle'   => 'Yenilikçi Teknoloji',
                'title'     => "Dijital\nMükemmellik",
                'subtitle'  => 'İşinizi zirveye taşıyan teknoloji çözümleri ve yaratıcı stratejiler',
                'btn_text'  => 'Hizmetlerimiz',
                'btn_url'   => '/hizmetlerimiz',
                'btn_text_2'=> 'Bizi Keşfedin',
                'btn_url_2' => '/hakkimizda',
                'image'     => null, // Unsplash: https://images.unsplash.com/photo-1519389950473-47ba0277781c
                'is_active' => true,
                'order'     => 2,
            ],
            [
                'uptitle'   => 'Marka Değeri',
                'title'     => "İnovasyon\n& Yaratıcılık",
                'subtitle'  => 'Markanıza değer katan reklam ve yazılım çözümleri ile fark yaratın',
                'btn_text'  => 'Portföyümüz',
                'btn_url'   => '/portfolyo',
                'btn_text_2'=> 'Teklif Alın',
                'btn_url_2' => '/iletisim',
                'image'     => null, // Unsplash: https://images.unsplash.com/photo-1504384308090-c894fdcc538d
                'is_active' => true,
                'order'     => 3,
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
