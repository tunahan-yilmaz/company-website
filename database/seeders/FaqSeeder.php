<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question'  => 'Proje süresi ne kadar?',
                'answer'    => 'Proje süresi, projenin kapsamına ve karmaşıklığına göre değişir. Basit bir web sitesi 2-4 hafta, karmaşık bir yazılım projesi ise 3-6 ay sürebilir. İlk görüşmede size detaylı bir zaman planı sunuyoruz.',
                'order'     => 1,
                'is_active' => true,
            ],
            [
                'question'  => 'Fiyatlandırma nasıl yapılıyor?',
                'answer'    => 'Fiyatlandırma, projenin kapsamı, kullanılacak teknolojiler ve süreye göre belirlenir. Her proje için özel teklif hazırlıyoruz. Ücretsiz ön görüşme için bize ulaşabilirsiniz.',
                'order'     => 2,
                'is_active' => true,
            ],
            [
                'question'  => 'Hangi teknolojileri kullanıyorsunuz?',
                'answer'    => 'React, Vue.js, Angular, Node.js, Python, Django, Flutter, React Native, Laravel ve daha birçok modern teknoloji ile çalışıyoruz. Projenize en uygun teknoloji yığınını birlikte belirliyoruz.',
                'order'     => 3,
                'is_active' => true,
            ],
            [
                'question'  => 'Proje sonrası destek veriyor musunuz?',
                'answer'    => 'Evet, tüm projelerimiz için 1 yıl ücretsiz teknik destek ve bakım hizmeti sunuyoruz. İsterseniz uzun vadeli destek paketlerimizden de faydalanabilirsiniz.',
                'order'     => 4,
                'is_active' => true,
            ],
            [
                'question'  => 'Uzaktan çalışabiliyor musunuz?',
                'answer'    => 'Evet, Türkiye\'nin her yerinden ve yurtdışından müşterilerimizle online olarak çalışabiliyoruz. Video görüşmeler, proje yönetim araçları ve düzenli raporlamalarla süreçleri yönetiyoruz.',
                'order'     => 5,
                'is_active' => true,
            ],
            [
                'question'  => 'Proje yönetimini nasıl yürütüyorsunuz?',
                'answer'    => 'Agile/Scrum metodolojisi ile çalışıyoruz. Jira üzerinde sprint planlaması yapıyor, haftalık demo toplantıları ve detaylı raporlarla ilerlemeyi şeffaf biçimde paylaşıyoruz. Müşterilerimiz projeyi her aşamada takip edebilir.',
                'order'     => 6,
                'is_active' => true,
            ],
            [
                'question'  => 'NDA (Gizlilik Sözleşmesi) imzalıyor musunuz?',
                'answer'    => 'Kesinlikle evet. Tüm projelerimizde NDA imzalıyoruz. Müşterilerimizin ticari sırları ve proje detayları bizim için gizlidir ve üçüncü taraflarla paylaşılmaz.',
                'order'     => 7,
                'is_active' => true,
            ],
            [
                'question'  => 'Projelerde kaynak kod teslimi yapıyor musunuz?',
                'answer'    => 'Evet, proje tamamlandığında tam kaynak kodu ve geliştirme dokümantasyonu müşterimize teslim edilir. Sunucu kurulumu ve prod ortam geçişinde de destek sağlıyoruz.',
                'order'     => 8,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
