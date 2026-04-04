<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title'            => 'Laravel ile Yüksek Performanslı API Geliştirme: Best Practices',
                'subtitle'         => 'Modern API mimarisi, cache stratejileri ve rate limiting teknikleri',
                'slug'             => 'laravel-yuksek-performansli-api-gelistirme',
                'author'           => 'DBS Software',
                'category'         => 'Yazılım Geliştirme',
                'excerpt'          => 'Laravel\'de RESTful API geliştirirken dikkat edilmesi gereken performans optimizasyonları, cache mekanizmaları ve güvenlik önlemlerini ele alıyoruz.',
                'content'          => '<h2>Giriş</h2><p>Modern yazılım projelerinde API performansı kritik öneme sahiptir. Doğru mimari kararlar, uygulamanızın ölçeklenebilirliğini ve kullanıcı deneyimini doğrudan etkiler.</p><h2>1. Route Cache ve Config Cache</h2><p>Production ortamında <code>php artisan route:cache</code> ve <code>php artisan config:cache</code> komutları ile performansı %30-50 artırabilirsiniz. Bu önbelleğe alma mekanizmaları, her istek için tekrarlanan dosya okuma işlemlerini ortadan kaldırır.</p><h2>2. Eager Loading ile N+1 Sorunu Önleme</h2><p>Eloquent ORM kullanırken ilişkisel veriler için mutlaka eager loading kullanın. <code>Post::with([\'user\', \'comments.user\'])->get()</code> şeklinde zincirleme eager loading ile veritabanı sorgu sayısını dramatik biçimde azaltabilirsiniz.</p><h2>3. Redis ile Cache Stratejisi</h2><p>Sık erişilen veriler için Redis cache kullanımı API yanıt sürelerini 10ms seviyelerine indirebilir. Cache invalidation stratejinizi doğru kurmak, stale data problemlerini önleyecektir.</p><h2>4. API Rate Limiting</h2><p>Laravel\'in built-in throttle middleware\'i ile endpoint başına istek sınırlaması uygulayın. Bu hem abuse\'i önler hem de sunucu kaynaklarını korur.</p><h2>Sonuç</h2><p>Performanslı bir API; doğru cache stratejisi, optimize edilmiş sorgular ve akıllı rate limiting kombinasyonuyla elde edilir. Yukarıdaki teknikleri projenize adapte ederek ölçeklenebilir sistemler inşa edebilirsiniz.</p>',
                'read_time'        => 7,
                'tags'             => ['Laravel', 'PHP', 'API', 'Performance', 'Redis'],
                'meta_title'       => 'Laravel API Performans Optimizasyonu | DBS Software Blog',
                'meta_description' => 'Laravel ile yüksek performanslı API geliştirme teknikleri, cache stratejileri ve best practices.',
                'is_published'     => true,
                'is_active'        => true,
                'order'            => 1,
                'published_at'     => now()->subDays(5),
            ],
            [
                'title'            => 'React Native ile Cross-Platform Mobil Uygulama Geliştirme',
                'subtitle'         => 'Tek kod tabanı ile iOS ve Android uygulamaları oluşturmanın avantajları',
                'slug'             => 'react-native-cross-platform-mobil-uygulama',
                'author'           => 'DBS Software',
                'category'         => 'Mobil Geliştirme',
                'excerpt'          => 'React Native, tek bir JavaScript kod tabanı ile hem iOS hem de Android platformlarına yönelik native performanslı uygulamalar geliştirmenizi sağlar.',
                'content'          => '<h2>React Native Nedir?</h2><p>Meta tarafından geliştirilen React Native, web geliştiriccilerinin tanıdık React paradigmasını kullanarak mobil uygulama geliştirmesine olanak sunar. JavaScript ile yazılan kodunuz, native bileşenlere dönüştürülerek gerçek anlamda native performans sağlar.</p><h2>Cross-Platform Geliştirmenin Avantajları</h2><ul><li><strong>Geliştirme süresi %40-50 kısalır:</strong> Aynı iş mantığını iki farklı platform için yazmak zorunda kalmazsınız.</li><li><strong>Bakım kolaylığı:</strong> Bug fix ve özellik geliştirmeleri tek bir yerden yapılır.</li><li><strong>Ekip verimliliği:</strong> Web ve mobil arasında paylaşılan bilgi birikimi.</li></ul><h2>Native ile Karşılaştırma</h2><p>Oyun motorları, AR/VR uygulamaları veya platform özelliklerine derin entegrasyon gerektiren projeler için native geliştirme hâlâ tercih nedeni olabilir. Ancak kurumsal uygulamalar, e-ticaret platformları ve içerik odaklı uygulamalar için React Native mükemmel bir seçimdir.</p><h2>DBS Software\'in Tercihi</h2><p>Müşterilerimizin büyük çoğunluğunda React Native kullanarak geliştirme maliyetlerini %35-45 oranında düşürürken, her iki platformda da native kalitede kullanıcı deneyimi sunuyoruz.</p>',
                'read_time'        => 5,
                'tags'             => ['React Native', 'Mobile', 'iOS', 'Android', 'JavaScript'],
                'meta_title'       => 'React Native Cross-Platform Geliştirme | DBS Software Blog',
                'meta_description' => 'React Native ile iOS ve Android için tek kod tabanı kullanarak nasıl uygulama geliştirilir?',
                'is_published'     => true,
                'is_active'        => true,
                'order'            => 2,
                'published_at'     => now()->subDays(12),
            ],
            [
                'title'            => 'Google Ads ve Meta Ads: 2025\'te Dijital Reklam Stratejileri',
                'subtitle'         => 'ROI\'ı maksimize etmek için doğru platform seçimi ve optimizasyon teknikleri',
                'slug'             => 'google-ads-meta-ads-2025-dijital-reklam-stratejileri',
                'author'           => 'DBS Software',
                'category'         => 'Dijital Pazarlama',
                'excerpt'          => '2025 yılında dijital reklam harcamalarınızı en verimli biçimde kullanmak için Google Ads ve Meta Ads platformlarının doğru stratejilerle nasıl yönetileceğini anlatıyoruz.',
                'content'          => '<h2>Dijital Reklamcılık 2025\'te Nerede?</h2><p>Yapay zekanın devreye girmesiyle birlikte dijital reklam ekosistemi köklü bir dönüşüm geçiriyor. Smart bidding, otomatik hedefleme ve AI-driven creative optimization artık bir tercih değil, rekabetçi kalmak için zorunluluk haline geldi.</p><h2>Google Ads Stratejisi</h2><p><strong>Performance Max kampanyaları</strong> 2025\'te tüm Google envanterini (Arama, Display, YouTube, Alışveriş, Haritalar) tek bir kampanyadan yönetmenizi sağlar. Conversion hedeflerini doğru tanımladığınızda AI, bütçenizi en verimli kanallara otomatik olarak dağıtır.</p><h2>Meta Ads Stratejisi</h2><p>iOS 14+ değişiklikleriyle azalan attribution penceresi sorununa karşı <strong>Conversions API (CAPI)</strong> entegrasyonu artık kritik. Server-side tracking ile %20-30 daha fazla conversion yakalayabilir, retargeting kampanyalarınızı güçlendirebilirsiniz.</p><h2>Platform Seçimi</h2><p>B2B müşterileri için yüksek intent\'li Google Arama, B2C ve e-ticaret için Meta\'nın görsel odaklı formatları daha iyi sonuç verir. Hibrit yaklaşım, iki platformu da birbirini tamamlayacak şekilde kullanmak genellikle en iyi ROAS\'ı sağlar.</p>',
                'read_time'        => 8,
                'tags'             => ['Google Ads', 'Meta Ads', 'Dijital Pazarlama', 'ROI', 'Performance Max'],
                'meta_title'       => 'Google Ads ve Meta Ads Stratejileri 2025 | DBS Software Blog',
                'meta_description' => '2025\'te dijital reklam ROI\'ını artırmak için Google Performance Max ve Meta CAPI stratejileri.',
                'is_published'     => true,
                'is_active'        => true,
                'order'            => 3,
                'published_at'     => now()->subDays(20),
            ],
            [
                'title'            => 'UI/UX Tasarımda Kullanıcı Psikolojisi: Dönüşüm Artıran Tasarım Kararları',
                'subtitle'         => 'Renk, tipografi ve mikro animasyonların kullanıcı davranışı üzerindeki etkisi',
                'slug'             => 'ui-ux-tasarimda-kullanici-psikolojisi',
                'author'           => 'DBS Software',
                'category'         => 'UI/UX Tasarım',
                'excerpt'          => 'Başarılı bir dijital ürün, güzel görünmekten çok doğru psikolojik tetikleyicileri kullanarak kullanıcıları istenen aksiyonlara yönlendirir.',
                'content'          => '<h2>Tasarım Neden Psikolojik Bir Disiplindir?</h2><p>Kullanıcılar web sitenizde saniyeler içinde kararlar verir. Bu kararları şekillendiren renk seçimleriniz, buton pozisyonları ve metin hiyerarşisidir. Doğru tasarım kararları dönüşüm oranlarını %200\'e kadar artırabilir.</p><h2>Renk Psikolojisi</h2><p><strong>Kırmızı</strong> aciliyet hissi yaratır (indirim badgeleri). <strong>Mavi</strong> güven duygusunu tetikler (finans, sağlık sektörü). <strong>Yeşil</strong> onay ve başarı ile ilişkilendirilir (CTA butonları, form onayları). Renk tutarlılığı, kullanıcının zihinsel modelini güçlendirir.</p><h2>Mikro Animasyonların Gücü</h2><p>Hover efektleri, loading skeleton\'lar ve başarılı form gönderim animasyonları kullanıcıya uygulamanın "canlı" olduğunu hissettirir. Bu küçük detaylar, algılanan kaliteyi ve güveni önemli ölçüde artırır.</p><h2>F-Pattern ve Z-Pattern Okuma</h2><p>Kullanıcıların web sayfalarını F veya Z harfi şeklinde taradığı eye-tracking çalışmalarıyla kanıtlanmıştır. En önemli içeriğinizi bu pattern\'lerin başlangıç noktalarına yerleştirmek engagement\'ı artırır.</p>',
                'read_time'        => 6,
                'tags'             => ['UI/UX', 'Tasarım', 'Kullanıcı Deneyimi', 'Psikoloji', 'Dönüşüm'],
                'meta_title'       => 'UI/UX Tasarımda Kullanıcı Psikolojisi | DBS Software Blog',
                'meta_description' => 'Renk psikolojisi, mikro animasyonlar ve layout kararlarının dönüşüm oranlarına etkisi.',
                'is_published'     => true,
                'is_active'        => true,
                'order'            => 4,
                'published_at'     => now()->subDays(28),
            ],
            [
                'title'            => 'Docker & Kubernetes ile Modern DevOps: Sıfırdan Production\'a',
                'subtitle'         => 'Konteyner orkestrasyonu ile ölçeklenebilir ve güvenilir altyapı kurulumu',
                'slug'             => 'docker-kubernetes-modern-devops',
                'author'           => 'DBS Software',
                'category'         => 'Cloud & DevOps',
                'excerpt'          => 'Docker ile konteynerize edilmiş uygulamalarınızı Kubernetes ortamında nasıl yöneteceğinizi, CI/CD pipeline kurulumunu ve monitoring stratejilerini öğrenin.',
                'content'          => '<h2>Neden Konteyner?</h2><p>"Bende çalışıyor" sorununu ortadan kaldıran Docker, uygulamanızın bağımlılıklarını ve ortam konfigürasyonunu bir arada paketleyerek her ortamda tutarlı çalışmasını sağlar. Bu, development, staging ve production arasındaki tutarsızlıkları %90 oranında azaltır.</p><h2>Kubernetes ile Orkestrasyon</h2><p>Kubernetes; otomatik yeniden başlatma, yük dengeleme, sıfır-downtime deployment ve yatay ölçekleme gibi yetenekleriyle production ortamlarının vazgeçilmez aracı haline geldi. Bir pod çöktüğünde K8s onu otomatik olarak yeniden oluşturur.</p><h2>CI/CD Pipeline</h2><p>GitLab CI/CD veya GitHub Actions ile her code push\'ta otomatik test, build ve deployment sağlayın. Bu süreç insan hatalarını azaltır ve release sıklığınızı artırır.</p><h2>Monitoring: Prometheus + Grafana</h2><p>Altyapınızın sağlığını ve uygulama metriklerinizi gerçek zamanlı izlemek için Prometheus + Grafana stack\'ini kullanın. Alerting kuralları ile sorunları kullanıcılar fark etmeden tespit edin.</p>',
                'read_time'        => 10,
                'tags'             => ['Docker', 'Kubernetes', 'DevOps', 'CI/CD', 'Cloud'],
                'meta_title'       => 'Docker Kubernetes DevOps Rehberi | DBS Software Blog',
                'meta_description' => 'Docker ve Kubernetes ile modern DevOps: konteyner orkestrasyonu ve CI/CD pipeline kurulumu.',
                'is_published'     => true,
                'is_active'        => true,
                'order'            => 5,
                'published_at'     => now()->subDays(35),
            ],
            [
                'title'            => 'E-Ticaret Projelerinde Güvenli Ödeme Entegrasyonu: Stripe ve İyzico',
                'subtitle'         => 'PCI DSS uyumlu ödeme sistemlerini Laravel projelerinize entegre etme rehberi',
                'slug'             => 'e-ticaret-guvenli-odeme-entegrasyonu-stripe-iyzico',
                'author'           => 'DBS Software',
                'category'         => 'E-Ticaret',
                'excerpt'          => 'E-ticaret projelerinde ödeme güvenliği, PCI DSS uyumluluğu ve Stripe/İyzico entegrasyonunu doğru şekilde nasıl yapacağınızı adım adım anlatıyoruz.',
                'content'          => '<h2>Ödeme Güvenliği Neden Kritik?</h2><p>Veri ihlali yaşayan e-ticaret sitelerinin %60\'ı 6 ay içinde kapanmak zorunda kalıyor. Kullanıcı kredi kartı bilgilerini korumak sadece yasal bir yükümlülük değil, işletmenizin sürdürülebilirliği açısından da hayati önem taşıyor.</p><h2>PCI DSS Uyumluluğu</h2><p>Payment Card Industry Data Security Standard, kart sahiplerinin verilerini koruyan 12 temel güvenlik ilkesi barındırır. Stripe ve İyzico gibi sertifikalı ödeme sağlayıcıları kullandığınızda, PCI uyumluluğunun büyük bölümü provider tarafından üstlenilir.</p><h2>Stripe Entegrasyonu</h2><p>Stripe\'ın Laravel paketi (<code>laravel/cashier</code>) ile abonelik yönetimi, tek seferlik ödemeler ve webhook\'lar kolayca yönetilir. 3D Secure, tokenization ve fraud detection özellikleri kutu içinden gelir.</p><h2>İyzico Entegrasyonu (Türkiye Pazarı)</h2><p>Türk kullanıcılar için taksitli ödeme seçenekleri ve yerel banka entegrasyonları sunan İyzico, Türkiye\'deki e-ticaret projelerinin vazgeçilmez ödeme altyapısıdır. İyzico PHP SDK\'sı ile form tabanlı entegrasyon oldukça basittir.</p>',
                'read_time'        => 9,
                'tags'             => ['E-Ticaret', 'Stripe', 'İyzico', 'Ödeme', 'Güvenlik'],
                'meta_title'       => 'E-Ticaret Ödeme Entegrasyonu Stripe İyzico | DBS Software Blog',
                'meta_description' => 'E-ticaret projelerinde PCI uyumlu ödeme entegrasyonu: Stripe ve İyzico Laravel rehberi.',
                'is_published'     => true,
                'is_active'        => true,
                'order'            => 6,
                'published_at'     => now()->subDays(42),
            ],
        ];

        foreach ($blogs as $data) {
            Blog::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
