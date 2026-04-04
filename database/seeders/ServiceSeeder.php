<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title'             => 'Yazılım Geliştirme',
                'slug'              => 'yazilim-gelistirme',
                'badge_text'        => 'Hizmet #1',
                'icon'              => 'fas fa-code',
                'section_id'        => 'software',
                'short_description' => 'Özel yazılım çözümleri, kurumsal uygulamalar ve web platformları. Modern teknolojilerle güçlü ve ölçeklenebilir sistemler.',
                'detail_text'       => 'Modern teknolojiler kullanarak işletmenizin ihtiyaçlarına özel, ölçeklenebilir ve güvenli yazılım çözümleri geliştiriyoruz. Web uygulamaları, kurumsal sistemler, e-ticaret platformları ve API entegrasyonları konusunda uzman ekibimizle projenizi hayata geçiriyoruz.',
                'features'          => ['Web Uygulamaları', 'Kurumsal Yazılımlar', 'API Entegrasyonları', 'Bulut Çözümleri', 'Micro-service Mimarisi', 'Real-time Uygulamalar'],
                'tech_stack'        => ['React.js', 'Vue.js', 'Laravel', 'Node.js', 'PostgreSQL', 'Redis', 'Docker', 'AWS'],
                'cta_text'          => 'Yazılım projeniz için hemen teklif alın',
                'order'             => 1,
                'is_active'         => true,
            ],
            [
                'title'             => 'Dijital Reklam',
                'slug'              => 'dijital-reklam',
                'badge_text'        => 'Hizmet #2',
                'icon'              => 'fas fa-bullhorn',
                'section_id'        => 'advertising',
                'short_description' => 'Markanızı öne çıkaran yaratıcı kampanyalar, sosyal medya yönetimi ve performans odaklı reklam stratejileri.',
                'detail_text'       => 'Dijital pazarlama dünyasında markanızı öne çıkarmak için kapsamlı reklam çözümleri sunuyoruz. Google Ads, Meta Ads, sosyal medya yönetimi ve içerik pazarlama ile ROI odaklı kampanyalar oluşturuyoruz.',
                'features'          => ['Sosyal Medya Pazarlama', 'Google Ads Yönetimi', 'SEO & SEM', 'İçerik Pazarlama', 'Email Marketing', 'Influencer İşbirlikleri'],
                'tech_stack'        => ['Google Ads', 'Meta Ads', 'Google Analytics 4', 'SEMrush', 'Canva Pro', 'Hootsuite'],
                'cta_text'          => 'Markanızı büyütmek için bizimle çalışın',
                'order'             => 2,
                'is_active'         => true,
            ],
            [
                'title'             => 'Mobil Uygulamalar',
                'slug'              => 'mobil-uygulamalar',
                'badge_text'        => 'Hizmet #3',
                'icon'              => 'fas fa-mobile-alt',
                'section_id'        => 'mobile',
                'short_description' => 'iOS ve Android platformları için kullanıcı dostu, performanslı ve modern mobil uygulama geliştirme hizmetleri.',
                'detail_text'       => 'Native ve cross-platform mobil uygulama geliştirme konusunda uzman ekibimizle iOS ve Android için yüksek performanslı uygulamalar geliştiriyoruz. Kullanıcı deneyimini ön planda tutarak, App Store ve Play Store süreçlerini de yönetiyoruz.',
                'features'          => ['iOS Uygulamaları', 'Android Uygulamaları', 'Cross-Platform', 'UI/UX Tasarım', 'App Store Optimizasyonu', 'Push Notification'],
                'tech_stack'        => ['Flutter', 'React Native', 'Swift', 'Kotlin', 'Firebase', 'REST API'],
                'cta_text'          => 'Mobil uygulama projeniz için hemen başlayalım',
                'order'             => 3,
                'is_active'         => true,
            ],
            [
                'title'             => 'UI/UX Tasarım',
                'slug'              => 'ui-ux-tasarim',
                'badge_text'        => 'Hizmet #4',
                'icon'              => 'fas fa-paint-brush',
                'section_id'        => 'design',
                'short_description' => 'Kullanıcı deneyimini ön planda tutan, estetik ve fonksiyonel arayüz tasarımları ile markanızı görsel olarak güçlendirin.',
                'detail_text'       => 'Kullanıcı araştırması, wireframe oluşturma, prototipleme ve görsel tasarım süreçlerini kapsayan bütünleşik UI/UX hizmeti sunuyoruz. Figma ile yüksek kaliteli tasarımlar üretip, yazılım ekibiyle senkronize şekilde hayata geçiriyoruz.',
                'features'          => ['Kullanıcı Araştırması', 'Wireframe & Prototip', 'Görsel Tasarım', 'Kullanılabilirlik Testi', 'Design System', 'Marka Kimliği'],
                'tech_stack'        => ['Figma', 'Adobe XD', 'Illustrator', 'Photoshop', 'InVision', 'Zeplin'],
                'cta_text'          => 'Markanız için premium tasarım alın',
                'order'             => 4,
                'is_active'         => true,
            ],
            [
                'title'             => 'Cloud & DevOps',
                'slug'              => 'cloud-devops',
                'badge_text'        => 'Hizmet #5',
                'icon'              => 'fas fa-cloud',
                'section_id'        => 'cloud',
                'short_description' => 'Bulut altyapı kurulumu, DevOps süreç yönetimi ve sistem optimizasyonu ile kesintisiz ve ölçeklenebilir altyapı.',
                'detail_text'       => 'AWS, Google Cloud ve Azure üzerinde scalable altyapı kurulumu, CI/CD pipeline tasarımı, container orkestrasyonu ve sistem monitoring hizmetleri sunuyoruz. %99.9 uptime garantisi ile kesintisiz hizmet vermenizi sağlıyoruz.',
                'features'          => ['AWS / GCP / Azure', 'Kubernetes & Docker', 'CI/CD Pipeline', 'Monitoring & Alerting', 'Auto Scaling', 'Disaster Recovery'],
                'tech_stack'        => ['AWS', 'Google Cloud', 'Kubernetes', 'Docker', 'Terraform', 'GitHub Actions', 'Datadog'],
                'cta_text'          => 'Altyapınızı cloud ile güçlendirin',
                'order'             => 5,
                'is_active'         => true,
            ],
            [
                'title'             => 'Dijital Danışmanlık',
                'slug'              => 'dijital-danismanlik',
                'badge_text'        => 'Hizmet #6',
                'icon'              => 'fas fa-chart-line',
                'section_id'        => 'consulting',
                'short_description' => 'İşletmenizin dijital dönüşüm yolculuğunda strateji geliştirme, teknoloji seçimi ve uygulama süreçlerinde danışmanlık.',
                'detail_text'       => 'Dijital dönüşüm sürecinizde strateji geliştirme, teknoloji seçimi, süreç optimizasyonu ve ekip eğitimi konularında kapsamlı danışmanlık hizmetleri sunuyoruz. Roadmap oluşturma ve KPI belirleme ile somut sonuçlar elde edin.',
                'features'          => ['Dijital Strateji', 'Teknoloji Seçimi', 'Süreç Optimizasyonu', 'Ekip Eğitimi', 'KPI & Roadmap', 'ROI Analizi'],
                'tech_stack'        => ['Jira', 'Confluence', 'Miro', 'Google Analytics', 'Power BI', 'Tableau'],
                'cta_text'          => 'Dijital dönüşüm danışmanlığı için iletişime geçin',
                'order'             => 6,
                'is_active'         => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
