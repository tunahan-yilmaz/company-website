{{-- Blog List Page --}}
@extends('site.layouts.app')

@section('title', 'Blog - DBS Software')
@section('meta_description', 'DBS Software Blog - Teknoloji, yazılım ve dijital pazarlama hakkında güncel içerikler.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Blog</span>
                    </h1>
                    <p class="page-description">
                        Teknoloji ve dijital dünya hakkında güncel içerikler
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row g-4">
                @forelse($blogs as $i => $blog)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3 + 1) * 100 }}">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="{{ $blog->image ? asset('storage/'.$blog->image) : 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&q=80' }}"
                                 alt="{{ $blog->title }}" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">{{ $blog->created_at->format('d') }}</span>
                                <span class="month">{{ $blog->created_at->translatedFormat('M') }}</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> {{ $blog->author ?? 'Admin' }}</span>
                                @if($blog->category)<span><i class="fas fa-folder"></i> {{ $blog->category }}</span>@endif
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <p class="blog-excerpt">{{ Str::limit($blog->excerpt ?? strip_tags($blog->content ?? ''), 130) }}</p>
                            <a href="{{ route('site.blog.detail', $blog->slug) }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <i class="fas fa-pen-nib fa-3x mb-3 opacity-25"></i>
                        <p>Henüz blog yazısı eklenmemiş.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($blogs->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $blogs->links() }}
            </div>
            @endif
        </div>
    </section>
@endsection
