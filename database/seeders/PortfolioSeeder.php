<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioCategory;
use App\Models\Portfolio;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $categories = [
            ['name' => 'Web Uygulamaları', 'slug' => 'web', 'order' => 1],
            ['name' => 'Mobil Uygulama',   'slug' => 'mobil', 'order' => 2],
            ['name' => 'E-Ticaret',         'slug' => 'e-ticaret', 'order' => 3],
            ['name' => 'Dijital Reklam',    'slug' => 'dijital-reklam', 'order' => 4],
            ['name' => 'UI/UX Tasarım',     'slug' => 'ui-ux', 'order' => 5],
        ];

        foreach ($categories as $cat) {
            PortfolioCategory::firstOrCreate(['slug' => $cat['slug']], $cat);
        }

        $web     = PortfolioCategory::where('slug', 'web')->first();
        $mobil   = PortfolioCategory::where('slug', 'mobil')->first();
        $ecom    = PortfolioCategory::where('slug', 'e-ticaret')->first();
        $reklam  = PortfolioCategory::where('slug', 'dijital-reklam')->first();
        $uiux    = PortfolioCategory::where('slug', 'ui-ux')->first();

        $portfolios = [
            [
                'portfolio_category_id' => $web->id,
                'title'       => 'FinTech Platform',
                'subtitle'    => 'Kurumsal finans yönetim platformu',
                'slug'        => 'fintech-platform',
                'description' => 'Büyük ölçekli finansal kurumlar için geliştirilen gerçek zamanlı işlem, raporlama ve portföy yönetim platformu.',
                'detail_text' => 'Bu proje kapsamında, finans sektörüne özel olarak geliştirilmiş gerçek zamanlı işlem yönetimi, otomatik raporlama, risk analizi ve portföy optimizasyonu modülleri içeren kapsamlı bir platform oluşturduk. Günlük 50.000+ işlem kapasitesi ile tasarlandı.',
                'challenge'   => 'Yüksek transaction hacmi, veri güvenliği gereksinimleri ve %99.99 uptime hedefi en büyük teknik zorluklarımızdı.',
                'client_name' => 'TürkFinans A.Ş.',
                'date'        => '2024-06',
                'duration'    => '8 ay',
                'team_size'   => '12 kişi',
                'location'    => 'İstanbul',
                'project_url' => 'https://example.com',
                'tags'        => ['fintech', 'web', 'kurumsal'],
                'tech_stack'  => ['Laravel', 'Vue.js', 'PostgreSQL', 'Redis', 'AWS', 'Docker'],
                'features'    => ['Gerçek zamanlı işlem takibi', 'Otomatik raporlama', 'Risk yönetimi', 'REST API entegrasyonu', 'Multi-tenant mimari'],
                'results'     => [
                    ['value' => '%40', 'label' => 'Operasyonel Verimlilik Artışı'],
                    ['value' => '50K+', 'label' => 'Günlük İşlem Kapasitesi'],
                    ['value' => '%99.99', 'label' => 'Uptime Garantisi'],
                ],
                'is_featured' => true,
                'is_active'   => true,
                'order'       => 1,
            ],
            [
                'portfolio_category_id' => $mobil->id,
                'title'       => 'MediCare Mobil Uygulaması',
                'subtitle'    => 'Sağlık takip ve randevu yönetimi',
                'slug'        => 'medicare-mobil',
                'description' => 'Hasta ve doktor arasında köprü kuran, randevu yönetimi, sağlık takibi ve teleTıp özelliklerine sahip mobil uygulama.',
                'detail_text' => 'iOS ve Android için geliştirilen bu uygulama, hastaların doktorlarıyla video görüşme yapmasına, randevu almasına, ilaç takibi yapmasına ve sağlık verilerini kaydetmesine olanak tanıyor.',
                'challenge'   => 'KVKK uyumluluğu, HIPAA standartları ve düşük latency video görüşme altyapısı kurulumu.',
                'client_name' => 'HealthTech TR',
                'date'        => '2024-03',
                'duration'    => '6 ay',
                'team_size'   => '8 kişi',
                'location'    => 'Ankara',
                'project_url' => null,
                'tags'        => ['mobil', 'sağlık', 'flutter'],
                'tech_stack'  => ['Flutter', 'Dart', 'Firebase', 'Node.js', 'WebRTC', 'MongoDB'],
                'features'    => ['Video teleTıp', 'Randevu yönetimi', 'İlaç takibi', 'Sağlık raporları', 'Push bildirimler'],
                'results'     => [
                    ['value' => '50K+', 'label' => 'Aktif Kullanıcı'],
                    ['value' => '4.8', 'label' => 'App Store Puanı'],
                    ['value' => '%85', 'label' => 'Kullanıcı Memnuniyeti'],
                ],
                'is_featured' => true,
                'is_active'   => true,
                'order'       => 2,
            ],
            [
                'portfolio_category_id' => $ecom->id,
                'title'       => 'LuxuryShop E-Ticaret',
                'subtitle'    => 'Lüks ürünler e-ticaret platformu',
                'slug'        => 'luxuryshop-eticaret',
                'description' => 'Lüks segment için tasarlanmış, özel üyelik sistemi, kişiselleştirilmiş alışveriş deneyimi ve global ödeme entegrasyonları sunan e-ticaret platformu.',
                'detail_text' => 'Premium kullanıcı deneyimi ile tasarlanan bu platform, özel üyelik sistemi, AI tabanlı ürün önerileri, çoklu dil ve para birimi desteği ile 15 ülkeye hizmet veriyor.',
                'challenge'   => 'Küresel ödeme sistemleri entegrasyonu, çoklu döviz yönetimi ve lüks marka kimliğine uygun UX tasarımı.',
                'client_name' => 'Luxury Group',
                'date'        => '2023-11',
                'duration'    => '7 ay',
                'team_size'   => '10 kişi',
                'location'    => 'İstanbul',
                'project_url' => 'https://example.com',
                'tags'        => ['e-ticaret', 'lüks', 'web'],
                'tech_stack'  => ['Next.js', 'NestJS', 'PostgreSQL', 'Elasticsearch', 'Stripe', 'Cloudinary'],
                'features'    => ['AI ürün önerileri', 'Çoklu para birimi', 'VIP üyelik sistemi', 'Özel ambalaj seçimi', '3D ürün önizleme'],
                'results'     => [
                    ['value' => '3x', 'label' => 'Dönüşüm Oranı Artışı'],
                    ['value' => '15', 'label' => 'Aktif Ülke'],
                    ['value' => '₺2M+', 'label' => 'Aylık GMV'],
                ],
                'is_featured' => true,
                'is_active'   => true,
                'order'       => 3,
            ],
            [
                'portfolio_category_id' => $reklam->id,
                'title'       => 'TechBrand 360° Dijital Kampanya',
                'subtitle'    => 'Entegre dijital pazarlama stratejisi',
                'slug'        => 'techbrand-dijital-kampanya',
                'description' => 'Teknoloji markası için yürütülen kapsamlı 360° dijital pazarlama kampanyası: sosyal medya, Google Ads, içerik pazarlama ve influencer işbirlikleri.',
                'detail_text' => "6 aylık entegre kampanya sürecinde marka bilinirliğini ölçülebilir şekilde artırdık. Google Ads'de %35 ROI iyileştirmesi, Meta kampanyasında %22 CPA düşüşü gerçekleştirdik.",
                'challenge'   => 'Kırmızı okyanus teknoloji pazarında düşük bütçeyle maksimum görünürlük elde etme.',
                'client_name' => 'TechBrand TR',
                'date'        => '2024-01',
                'duration'    => '6 ay',
                'team_size'   => '5 kişi',
                'location'    => 'Remote',
                'project_url' => null,
                'tags'        => ['dijital reklam', 'sosyal medya', 'seo'],
                'tech_stack'  => ['Google Ads', 'Meta Ads', 'GA4', 'SEMrush', 'Canva Pro', 'HubSpot'],
                'features'    => ['Google Ads kampanyaları', 'Meta & Instagram reklamları', 'SEO içerik stratejisi', 'Influencer yönetimi', 'Haftalık raporlama'],
                'results'     => [
                    ['value' => '%280', 'label' => 'Marka Arama Artışı'],
                    ['value' => '%35', 'label' => 'ROI İyileştirmesi'],
                    ['value' => '2.5M+', 'label' => 'Aylık Erişim'],
                ],
                'is_featured' => false,
                'is_active'   => true,
                'order'       => 4,
            ],
            [
                'portfolio_category_id' => $uiux->id,
                'title'       => 'InsureTech Dashboard',
                'subtitle'    => 'Sigorta yönetim paneli UI/UX tasarımı',
                'slug'        => 'insuretech-dashboard',
                'description' => 'Sigorta sektörü için veri görselleştirme odaklı, kullanıcı dostu yönetim paneli tasarımı ve geliştirmesi.',
                'detail_text' => 'Kullanıcı araştırması, personas oluşturma, wireframe ve prototipleme aşamalarından geçen bu proje 200+ ekran kapsayan kapsamlı bir design system ile tamamlandı.',
                'challenge'   => 'Karmaşık sigorta verilerini 60+ yaş kullanıcılar için anlaşılır ve erişilebilir hale getirme.',
                'client_name' => 'SigortaPlus',
                'date'        => '2023-08',
                'duration'    => '4 ay',
                'team_size'   => '4 kişi',
                'location'    => 'İzmir',
                'project_url' => null,
                'tags'        => ['ui/ux', 'dashboard', 'tasarım'],
                'tech_stack'  => ['Figma', 'Adobe XD', 'React.js', 'D3.js', 'Tailwind CSS'],
                'features'    => ['Design System', 'Kullanıcı araştırması', '200+ ekran tasarımı', 'WCAG 2.1 uyumu', 'Kullanılabilirlik testleri'],
                'results'     => [
                    ['value' => '%42', 'label' => 'Kullanıcı Hata Oranı Düşüşü'],
                    ['value' => '%30', 'label' => 'Görev Tamamlama Hızı Artışı'],
                    ['value' => '4.9/5', 'label' => 'Kullanıcı Memnuniyet Puanı'],
                ],
                'is_featured' => false,
                'is_active'   => true,
                'order'       => 5,
            ],
            [
                'portfolio_category_id' => $web->id,
                'title'       => 'EduLearn LMS Platformu',
                'subtitle'    => 'Online eğitim yönetim sistemi',
                'slug'        => 'edulearn-lms',
                'description' => 'Üniversiteler ve kurumsal eğitim için geliştirilen, video streaming, quiz ve sertifika sistemleri içeren LMS platformu.',
                'detail_text' => '10.000+ öğrenciye aynı anda hizmet verebilen bu platform, canlı ders akışı, interaktif quizler, ödev yönetimi ve otomatik sertifika üretimi özelliklerine sahiptir.',
                'challenge'   => 'Yüksek eş zamanlı user kapasitesi ve video streaming altyapısının optimize edilmesi.',
                'client_name' => 'EduTech Akademi',
                'date'        => '2023-05',
                'duration'    => '9 ay',
                'team_size'   => '14 kişi',
                'location'    => 'İstanbul',
                'project_url' => 'https://example.com',
                'tags'        => ['eğitim', 'web', 'lms'],
                'tech_stack'  => ['Laravel', 'React.js', 'WebRTC', 'FFmpeg', 'AWS S3', 'Redis'],
                'features'    => ['Canlı ders streaming', 'Interaktif quizler', 'Sertifika sistemi', 'Öğrenci takip paneli', 'Mobil uyumlu'],
                'results'     => [
                    ['value' => '25K+', 'label' => 'Aktif Öğrenci'],
                    ['value' => '500+', 'label' => 'Kurs İçeriği'],
                    ['value' => '%95', 'label' => 'Kursu Tamamlama Oranı'],
                ],
                'is_featured' => true,
                'is_active'   => true,
                'order'       => 6,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
