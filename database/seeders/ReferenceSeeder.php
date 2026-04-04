<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reference;

class ReferenceSeeder extends Seeder
{
    public function run(): void
    {
        $references = [
            [
                'name'        => 'TürkFinans A.Ş.',
                'website_url' => 'https://turkfinans.com',
                'logo_image'  => null,
                'description' => 'Türkiye\'nin önde gelen finans kuruluşlarından. Fintech platform projemizle 5 yıllık iş ortaklığı.',
                'order'       => 1,
                'is_active'   => true,
            ],
            [
                'name'        => 'Garanti BBVA',
                'website_url' => 'https://garantibbva.com.tr',
                'logo_image'  => null,
                'description' => 'Türkiye\'nin en büyük özel bankalarından biri ile dijital dönüşüm projesi.',
                'order'       => 2,
                'is_active'   => true,
            ],
            [
                'name'        => 'Sabancı Holding',
                'website_url' => 'https://sabanci.com',
                'logo_image'  => null,
                'description' => 'Kurumsal yazılım ve dijital danışmanlık hizmetleri.',
                'order'       => 3,
                'is_active'   => true,
            ],
            [
                'name'        => 'Turkcell',
                'website_url' => 'https://turkcell.com.tr',
                'logo_image'  => null,
                'description' => 'Mobil uygulama geliştirme ve UI/UX tasarım hizmetleri.',
                'order'       => 4,
                'is_active'   => true,
            ],
            [
                'name'        => 'Arçelik / Beko',
                'website_url' => 'https://arcelik.com',
                'logo_image'  => null,
                'description' => 'E-ticaret platformu ve IoT entegrasyonu projeleri.',
                'order'       => 5,
                'is_active'   => true,
            ],
            [
                'name'        => 'Anadolu Efes',
                'website_url' => 'https://anadoluefes.com',
                'logo_image'  => null,
                'description' => '360° dijital pazarlama kampanya yönetimi ve strateji danışmanlığı.',
                'order'       => 6,
                'is_active'   => true,
            ],
            [
                'name'        => 'Koç Holding',
                'website_url' => 'https://koc.com.tr',
                'logo_image'  => null,
                'description' => 'Kurumsal intranet uygulaması ve cloud altyapı kurulumu.',
                'order'       => 7,
                'is_active'   => true,
            ],
            [
                'name'        => 'Migros Online',
                'website_url' => 'https://migros.com.tr',
                'logo_image'  => null,
                'description' => 'E-ticaret optimizasyonu ve sipariş yönetim sistemi geliştirme.',
                'order'       => 8,
                'is_active'   => true,
            ],
        ];

        foreach ($references as $reference) {
            Reference::create($reference);
        }
    }
}
