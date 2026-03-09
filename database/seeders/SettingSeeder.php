<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::firstOrCreate(
            ['id' => 1],
            [
                'site_name' => 'DBS Software',
                'site_title' => 'DBS Software | Yazılım & Dijital Çözümler',
                'meta_description' => 'DBS Software olarak web yazılım, mobil uygulama, dijital pazarlama ve UI/UX tasarım alanlarında profesyonel hizmet sunuyoruz.',
                'phone' => '+90 (555) 000 00 00',
                'whatsapp' => '+905550000000',
                'email' => 'info@dbssoftware.com',
                'address' => 'İstanbul, Türkiye',
                'mini_about' => 'Yazılım ve dijital dünyanın gücünü işletmenize taşıyoruz.',
                'logo_black' => null,
            ]
        );
    }
}
