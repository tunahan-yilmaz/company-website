<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::updateOrCreate(['id' => 1], [
            'site_name'        => 'DBS Software',
            'site_title'       => 'DBS Software - Premium Yazılım & Dijital Çözümler',
            'meta_description' => '10+ yıllık deneyim ile premium yazılım çözümleri ve dijital dönüşüm partneri. Her projede mükemmelliği hedefliyoruz.',
            'phone'            => '+90 212 123 45 67',
            'whatsapp'         => '+90 532 123 45 67',
            'email'            => 'info@dbssoftware.com',
            'address'          => 'Maslak, Büyükdere Cad. No:255, Sarıyer, İstanbul, Türkiye',
            'map_url'          => 'https://goo.gl/maps/example',
            'map_frame'        => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.875707778473!2d29.012623315397935!3d41.08572302542889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab5f7e19e2b9b%3A0x2c0c8c7c6c0c8c7c!2sMaslak!5e0!3m2!1str!2str',
            'facebook'         => 'https://facebook.com/dbssoftware',
            'twitter'          => 'https://twitter.com/dbssoftware',
            'instagram'        => 'https://instagram.com/dbssoftware',
            'linkedin'         => 'https://linkedin.com/company/dbssoftware',
            'youtube'          => 'https://youtube.com/dbssoftware',
            'mini_about'       => '10+ yıllık deneyim ile premium yazılım çözümleri ve dijital dönüşüm partneri. Her projede mükemmelliği hedefliyoruz.',
        ]);
    }
}
