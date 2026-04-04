{{-- Blog Detail Page --}}
@extends('site.layouts.app')

@section('title', $blog->title . ' - DBS Blog')
@section('meta_description', $blog->description)

@section('content')
    <!-- Project Hero -->
    <section class="project-hero">
        <div class="project-hero-bg" style="background-image: url('{{ $blog->image ? asset('storage/'.$blog->image) : 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1920&q=80' }}');">
            <div class="project-hero-overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
                    <div class="project-hero-content">
                        <a href="{{ route('site.blog') }}" class="back-link mb-4 justify-content-center">
                            <i class="fas fa-arrow-left"></i> Blog'a Dön
                        </a>
                        
                        @if($blog->category)
                        <div class="mb-4">
                            <span class="project-category-badge">{{ $blog->category }}</span>
                        </div>
                        @endif

                        <h1 class="project-hero-title">
                            {{ $blog->title }}
                        </h1>
                        <p class="project-hero-subtitle mt-3">
                            {{ $blog->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Bar -->
    <section class="project-info-bar">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @if($blog->author)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Yazar</div>
                            <div class="info-value">{{ $blog->author }}</div>
                        </div>
                    </div>
                </div>
                @endif

                @if($blog->category)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Kategori</div>
                            <div class="info-value">{{ $blog->category->name }}</div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Tarih</div>
                            <div class="info-value">{{ $blog->created_at->translatedFormat('d F Y') }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Okuma Süresi</div>
                            <div class="info-value">
                                @php
                                    $word = str_word_count(strip_tags($blog->detail_text));
                                    $m = ceil($word / 200);
                                @endphp
                                {{ $m }} Dakika
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="project-content section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Complete Article -->
                    <div class="content-block mb-5 article-content" data-aos="fade-up">
                        {!! $blog->detail_text !!}
                    </div>

                    <!-- Tags -->
                    @if($blog->tags && count($blog->tags) > 0)
                    <div class="article-tags mt-5 pt-4 border-top" data-aos="fade-up">
                        <h5>İlgili Etiketler</h5>
                        <div class="tags-list">
                            @foreach($blog->tags as $tag)
                                <span class="tag">#{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        
                        @if($blog->author)
                        <!-- Author Widget -->
                        <div class="sidebar-widget author-widget glass-effect mb-4 p-0" data-aos="fade-left">
                            <div class="author-card">
                                <div class="author-card-header">
                                    <div class="author-avatar-wrapper">
                                        <div class="avatar-ring"></div>
                                        <img src="{{ 'https://ui-avatars.com/api/?name='.urlencode($blog->author) }}" alt="{{ $blog->author }}" class="author-avatar-img">
                                        <div class="verified-badge">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-card-body">
                                    <h4 class="author-name">{{ $blog->author }}</h4>

                                    <div class="author-stats">
                                        <div class="stat-item">
                                            <div class="stat-value">Makale</div>
                                            <div class="stat-label">Yazarı</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-value">{{ number_format($blog->view_count ?? 0) }}</div>
                                            <div class="stat-label">Okunma</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-value"><i class="fas fa-star text-warning"></i></div>
                                            <div class="stat-label">Uzman</div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Modern Share Actions -->
                        <div class="sidebar-widget share-widget glass-effect mb-4" data-aos="fade-left" data-aos-delay="100">
                            <h3 class="widget-title"><i class="fas fa-share-alt"></i> Bu Yazıyı Paylaş</h3>
                            
                            <div class="share-buttons-modern mb-4">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="share-btn-modern facebook">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">Facebook'ta Paylaş</span>
                                        <span class="share-count">Ağınızla paylaşın</span>
                                    </div>
                                    <i class="fas fa-chevron-right ml-auto" style="opacity: 0.5;"></i>
                                </a>

                                <!-- Twitter -->
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="share-btn-modern twitter">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">Twitter'da Paylaş</span>
                                        <span class="share-count">Takipçilerinize duyurun</span>
                                    </div>
                                    <i class="fas fa-chevron-right ml-auto" style="opacity: 0.5;"></i>
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($blog->title) }}" target="_blank" class="share-btn-modern linkedin">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">LinkedIn'de Paylaş</span>
                                        <span class="share-count">Profesyonel ağınız için</span>
                                    </div>
                                    <i class="fas fa-chevron-right ml-auto" style="opacity: 0.5;"></i>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' ' . url()->current()) }}" target="_blank" class="share-btn-modern whatsapp">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">WhatsApp'tan Gönder</span>
                                        <span class="share-count">Hızlıca paylaşın</span>
                                    </div>
                                    <i class="fas fa-chevron-right ml-auto" style="opacity: 0.5;"></i>
                                </a>
                            </div>

                            <!-- Copy Link -->
                            <div class="copy-link-wrapper mt-3 pt-3 border-top border-secondary">
                                <input type="text" class="copy-link-input" value="{{ url()->current() }}" readonly>
                                <button class="copy-link-btn" onclick="copyLink()" aria-label="Linki Kopyala" title="Bağlantıyı Kopyala">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Popular Posts -->
                        @if(isset($popular_blogs) && $popular_blogs->count() > 0)
                        <div class="sidebar-widget popular-widget glass-effect" data-aos="fade-left" data-aos-delay="200">
                            <h3 class="widget-title"><i class="fas fa-fire"></i> Popüler Yazılar</h3>
                            
                            <div class="popular-posts-modern">
                                @foreach($popular_blogs as $key => $popular)
                                <a href="{{ route('site.blog.detail', $popular->id) }}" class="popular-post-card">
                                    <div class="popular-post-image">
                                        <img src="{{ $popular->image ? asset('storage/'.$popular->image) : 'https://via.placeholder.com/300' }}" alt="{{ $popular->title }}">
                                        <div class="popular-post-overlay">
                                            <div class="post-number">{{ sprintf('%02d', $key+1) }}</div>
                                        </div>
                                    </div>
                                    <div class="popular-post-details">
                                        <h4 class="popular-post-title">{{ $popular->title }}</h4>
                                        <div class="popular-post-meta">
                                            <span class="post-date"><i class="far fa-calendar-alt"></i> {{ $popular->created_at->translatedFormat('d M') }}</span>
                                            <span class="post-views"><i class="far fa-eye"></i> {{ number_format($popular->view_count ?? 0) }}</span>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Blog Detail Styles Restored from Original Theme */
        .project-hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
        }

        .project-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        .project-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                        rgba(0, 0, 0, 0.9) 0%, 
                        rgba(0, 0, 0, 0.6) 50%, 
                        rgba(0, 0, 0, 0.9) 100%);
        }

        .project-hero-content {
            position: relative;
            z-index: 2;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--text-secondary);
            font-size: 14px;
            transition: var(--transition-fast);
        }

        .back-link:hover {
            color: var(--primary-color);
            transform: translateX(-5px);
        }

        .project-category-badge {
            display: inline-block;
            padding: 8px 20px;
            background: var(--primary-color);
            color: var(--bg-primary);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 20px;
        }

        .project-hero-title {
            font-size: 64px;
            font-weight: 900;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .project-hero-subtitle {
            font-size: 20px;
            color: var(--text-muted);
            max-width: 800px;
            margin: 0 auto;
        }

        .project-info-bar {
            margin-top: -60px;
            position: relative;
            z-index: 3;
            padding: 0 0 60px 0;
        }

        .info-item {
            padding: 25px 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            height: 100%;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--bg-primary);
            flex-shrink: 0;
        }

        .info-label {
            font-size: 12px;
            color: var(--text-muted);
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .article-content {
            font-size: 18px;
            line-height: 1.8;
            color: var(--text-secondary);
        }

        .article-content p {
            margin-bottom: 25px;
        }

        .article-content h2,
        .article-content h3,
        .article-content h4 {
            color: var(--text-primary);
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .article-content h2 { font-size: 32px; }
        .article-content h3 { font-size: 26px; }

        .article-content ul,
        .article-content ol {
            margin-bottom: 25px;
            padding-left: 20px;
        }

        .article-content li {
            margin-bottom: 10px;
        }

        .article-content blockquote {
            background: rgba(99, 102, 241, 0.05);
            border-left: 4px solid var(--primary-color);
            padding: 25px 30px;
            margin: 35px 0;
            border-radius: 0 15px 15px 0;
            font-size: 20px;
            font-style: italic;
            color: var(--text-primary);
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            margin: 35px 0;
        }

        .article-tags h5 {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .tags-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag {
            padding: 8px 16px;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary-color);
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        .sidebar-sticky {
            position: sticky;
            top: 120px;
        }

        .widget-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--text-primary);
            display: flex;
            align-items: center;
        }

        .widget-title i {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 20px;
        }

        /* Author Card Styles */
        .author-widget {
            overflow: hidden;
        }
        .author-card {
            position: relative;
        }
        .author-card-header {
            padding: 30px 20px 20px;
            text-align: center;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.05));
            border-radius: 15px 15px 0 0;
            margin: 0;
        }
        .author-avatar-wrapper {
            position: relative;
            display: inline-block;
        }
        .avatar-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), #8b5cf6);
            opacity: 0.2;
            animation: pulse 2s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.2; }
            50% { transform: translate(-50%, -50%) scale(1.1); opacity: 0.3; }
        }
        .author-avatar-img {
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
            z-index: 1;
            object-fit: cover;
        }
        .verified-badge {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #10b981, #059669);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid var(--bg-primary);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
            z-index: 2;
        }
        .verified-badge i { color: white; font-size: 14px; }
        .author-card-body {
            padding: 25px 20px;
            text-align: center;
        }
        .author-name {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--text-primary);
        }
        .author-role {
            font-size: 13px;
            color: var(--primary-color);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 15px;
        }
        .author-bio {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .author-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }
        .stat-item {
            padding: 15px 10px;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(139, 92, 246, 0.02));
            border-radius: 12px;
            border: 1px solid rgba(99, 102, 241, 0.1);
            transition: var(--transition-fast);
        }
        .stat-item:hover {
            transform: translateY(-3px);
            border-color: var(--primary-color);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.2);
        }
        .stat-value {
            font-size: 20px;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        .stat-label {
            font-size: 11px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .author-social {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .author-social .social-link {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: var(--transition-fast);
        }
        .author-social .linkedin-link { background: rgba(10, 102, 194, 0.1); color: #0a66c2; }
        .author-social .linkedin-link:hover { background: #0a66c2; color: white; transform: translateY(-3px) rotate(5deg); }
        .author-social .twitter-link { background: rgba(29, 161, 242, 0.1); color: #1da1f2; }
        .author-social .twitter-link:hover { background: #1da1f2; color: white; transform: translateY(-3px) rotate(-5deg); }
        .author-social .github-link { background: rgba(36, 41, 47, 0.1); color: #24292f; }
        .author-social .github-link:hover { background: #24292f; color: white; transform: translateY(-3px) rotate(5deg); }

        /* Share Buttons Modern Styles */
        .share-widget { padding: 25px !important; }
        .share-buttons-modern { display: flex; flex-direction: column; gap: 12px; }
        .share-btn-modern {
            display: flex; align-items: center; gap: 15px; padding: 15px 18px;
            border-radius: 12px; transition: var(--transition-fast); position: relative; overflow: hidden;
        }
        .share-btn-modern::before {
            content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
            transition: var(--transition-fast); z-index: 0;
        }
        .share-btn-modern:hover::before { left: 0; }
        .share-btn-icon {
            width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center;
            justify-content: center; font-size: 18px; flex-shrink: 0; position: relative; z-index: 1; transition: var(--transition-fast);
        }
        .share-btn-text { display: flex; flex-direction: column; flex-grow: 1; position: relative; z-index: 1; }
        .share-label { font-size: 14px; font-weight: 600; margin-bottom: 2px; }
        .share-count { font-size: 11px; opacity: 0.7; }
        
        .share-btn-modern.facebook { background: rgba(24, 119, 242, 0.08); color: #1877f2; }
        .share-btn-modern.facebook::before { background: linear-gradient(135deg, #1877f2, #0d5dbd); }
        .share-btn-modern.facebook .share-btn-icon { background: rgba(24, 119, 242, 0.15); color: #1877f2; }
        .share-btn-modern.facebook:hover { transform: translateX(5px); box-shadow: 0 8px 25px rgba(24, 119, 242, 0.3); color: white; }
        .share-btn-modern.facebook:hover .share-btn-icon { background: rgba(255, 255, 255, 0.2); color: white; transform: rotate(360deg); }

        .share-btn-modern.twitter { background: rgba(29, 161, 242, 0.08); color: #1da1f2; }
        .share-btn-modern.twitter::before { background: linear-gradient(135deg, #1da1f2, #0c8bd9); }
        .share-btn-modern.twitter .share-btn-icon { background: rgba(29, 161, 242, 0.15); color: #1da1f2; }
        .share-btn-modern.twitter:hover { transform: translateX(5px); box-shadow: 0 8px 25px rgba(29, 161, 242, 0.3); color: white; }
        .share-btn-modern.twitter:hover .share-btn-icon { background: rgba(255, 255, 255, 0.2); color: white; transform: rotate(360deg); }

        .share-btn-modern.linkedin { background: rgba(10, 102, 194, 0.08); color: #0a66c2; }
        .share-btn-modern.linkedin::before { background: linear-gradient(135deg, #0a66c2, #084d8f); }
        .share-btn-modern.linkedin .share-btn-icon { background: rgba(10, 102, 194, 0.15); color: #0a66c2; }
        .share-btn-modern.linkedin:hover { transform: translateX(5px); box-shadow: 0 8px 25px rgba(10, 102, 194, 0.3); color: white; }
        .share-btn-modern.linkedin:hover .share-btn-icon { background: rgba(255, 255, 255, 0.2); color: white; transform: rotate(360deg); }

        .share-btn-modern.whatsapp { background: rgba(37, 211, 102, 0.08); color: #25d366; }
        .share-btn-modern.whatsapp::before { background: linear-gradient(135deg, #25d366, #1ebe57); }
        .share-btn-modern.whatsapp .share-btn-icon { background: rgba(37, 211, 102, 0.15); color: #25d366; }
        .share-btn-modern.whatsapp:hover { transform: translateX(5px); box-shadow: 0 8px 25px rgba(37, 211, 102, 0.3); color: white; }
        .share-btn-modern.whatsapp:hover .share-btn-icon { background: rgba(255, 255, 255, 0.2); color: white; transform: rotate(360deg); }

        .copy-link-wrapper { position: relative; display: flex; gap: 8px; }
        .copy-link-input {
            flex: 1; padding: 12px 15px; background: rgba(99, 102, 241, 0.05); border: 1px solid rgba(99, 102, 241, 0.1);
            border-radius: 10px; color: var(--text-muted); font-size: 12px; outline: none; transition: var(--transition-fast);
        }
        .copy-link-input:focus { border-color: var(--primary-color); background: rgba(99, 102, 241, 0.08); }
        .copy-link-btn {
            width: 45px; height: 45px; background: linear-gradient(135deg, var(--primary-color), #8b5cf6); border: none;
            border-radius: 10px; color: white; font-size: 16px; cursor: pointer; display: flex; align-items: center; justify-content: center;
        }

        /* Popular Posts Modern Styles */
        .popular-widget { padding: 25px !important; }
        .popular-posts-modern { display: flex; flex-direction: column; gap: 20px; }
        .popular-post-card {
            display: block; border-radius: 15px; background: rgba(99, 102, 241, 0.03); border: 1px solid rgba(99, 102, 241, 0.08);
            overflow: hidden; transition: var(--transition-fast);
        }
        .popular-post-card:hover { border-color: var(--primary-color); box-shadow: 0 15px 40px rgba(99, 102, 241, 0.2); transform: translateY(-5px); }
        .popular-post-image { position: relative; width: 100%; height: 180px; overflow: hidden; }
        .popular-post-image img { width: 100%; height: 100%; object-fit: cover; transition: var(--transition-fast); }
        .popular-post-card:hover .popular-post-image img { transform: scale(1.1); }
        .popular-post-overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.8) 100%);
            display: flex; align-items: flex-start; justify-content: flex-end; padding: 15px;
        }
        .post-number {
            width: 40px; height: 40px; background: linear-gradient(135deg, var(--primary-color), #8b5cf6);
            border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; font-weight: 800; color: white;
        }
        .popular-post-details { padding: 18px; }
        .popular-post-title {
            font-size: 15px; font-weight: 600; color: var(--text-primary); margin-bottom: 12px;
            display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
        }
        .popular-post-meta { display: flex; gap: 15px; }
        .post-date, .post-views { font-size: 12px; color: var(--text-muted); display: flex; gap: 6px; align-items: center; }
        .post-date i, .post-views i { color: var(--primary-color); }

    </style>

    @push('scripts')
    <script>
        function copyLink() {
            const input = document.querySelector('.copy-link-input');
            const btn = document.querySelector('.copy-link-btn');
            
            input.select();
            input.setSelectionRange(0, 99999); // For mobile devices
            
            navigator.clipboard.writeText(input.value).then(() => {
                btn.innerHTML = '<i class="fas fa-check"></i>';
                btn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                setTimeout(() => {
                    btn.innerHTML = '<i class="fas fa-copy"></i>';
                    btn.style.background = 'linear-gradient(135deg, var(--primary-color), #8b5cf6)';
                }, 2000);
            });
        }
    </script>
    @endpush
@endsection
