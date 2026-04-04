<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::updateOrCreate(['id' => 1], [
            'title'       => 'Hakkımızda',
            'about_text'  => '<p>2014 yılında kurulan <strong>DBS Software</strong>, yazılım ve dijital reklam sektöründe 10+ yıllık deneyimiyle Türkiye\'nin en güvenilir teknoloji partnerlerinden biri haline geldi.</p><p>Sektöre yeni girmiş olsak da, ekibimizin on yılı aşkın deneyimi sayesinde, elit müşterilere profesyonel ve lüks hizmetler sunuyoruz. Her projede mükemmelliği hedefliyor, müşterilerimize sadece yazılım değil, dijital dönüşümde güvenilir bir partner oluyoruz.</p><p>Modern teknolojileri takip eden, yenilikçi çözümler üreten ve müşteri memnuniyetini her şeyin önünde tutan bir ekiple, markanızı dijital dünyada zirveye taşıyoruz.</p>',
            'mission'     => 'İşletmelerin dijital dönüşüm süreçlerinde, en son teknolojileri kullanarak yenilikçi ve kullanıcı odaklı çözümler sunmak, müşterilerimizin dijital varlıklarını güçlendirerek rekabet avantajı sağlamalarına katkıda bulunmak.',
            'vision'      => 'Türkiye\'nin ve bölgenin en güvenilir ve tercih edilen yazılım ve dijital pazarlama şirketi olmak, global pazarlarda tanınan bir marka haline gelmek ve teknoloji ile iş dünyasını şekillendiren öncü bir organizasyon olmak.',
            'values'      => 'Müşteri memnuniyeti, yenilikçilik, şeffaflık, takım çalışması, sürekli gelişim, kalite odaklılık ve etik değerlere bağlılık bizim temel prensiblerimizdir. Her projede bu değerlerle hareket ederiz.',
            'stat_1_number' => '150+',
            'stat_1_label'  => 'Tamamlanan Proje',
            'stat_2_number' => '120+',
            'stat_2_label'  => 'Mutlu Müşteri',
            'stat_3_number' => '%98',
            'stat_3_label'  => 'Müşteri Memnuniyeti',
            'stat_4_number' => '10+',
            'stat_4_label'  => 'Yıllık Deneyim',
            'image_1'       => null,
            'image_2'       => null,
        ]);
    }
}
