@extends('admin.pages.main')

@section('title', 'Genel Bakış')
@section('breadcrumb-title', 'Genel Bakış')
@section('breadcrumb-parent', 'Admin')
@section('breadcrumb-current', 'Dashboard')

@section('content')
    <div class="layout-px-spacing">

        {{-- Stat Cards --}}
        <div class="row g-3 mb-4 mt-2">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="widget widget-card-one">
                    <div class="widget-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="w-title" style="color:#888;font-size:13px;margin-bottom:4px;">Slider</p>
                                <h3 class="w-value" style="font-size:32px;font-weight:700;color:#4361ee;">
                                    {{ $counts['sliders'] }}</h3>
                            </div>
                            <div class="w-icon" style="background:#eef2ff;border-radius:12px;padding:14px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="#4361ee" stroke-width="2">
                                    <rect x="2" y="7" width="20" height="13" rx="2" />
                                    <path d="M16 2H8" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 mb-0" style="font-size:12px;color:#aaa;">Toplam slider sayısı</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="widget widget-card-one">
                    <div class="widget-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="w-title" style="color:#888;font-size:13px;margin-bottom:4px;">Portfolyo</p>
                                <h3 class="w-value" style="font-size:32px;font-weight:700;color:#00ab55;">
                                    {{ $counts['portfolios'] }}</h3>
                            </div>
                            <div class="w-icon" style="background:#e8f7ef;border-radius:12px;padding:14px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="#00ab55" stroke-width="2">
                                    <rect x="2" y="3" width="20" height="14" rx="2" />
                                    <path d="M8 21h8M12 17v4" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 mb-0" style="font-size:12px;color:#aaa;">Toplam proje sayısı</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="widget widget-card-one">
                    <div class="widget-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="w-title" style="color:#888;font-size:13px;margin-bottom:4px;">Blog Yazısı</p>
                                <h3 class="w-value" style="font-size:32px;font-weight:700;color:#e7515a;">
                                    {{ $counts['blogs'] }}</h3>
                            </div>
                            <div class="w-icon" style="background:#fdf2f3;border-radius:12px;padding:14px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="#e7515a" stroke-width="2">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 mb-0" style="font-size:12px;color:#aaa;">Toplam blog sayısı</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="widget widget-card-one">
                    <div class="widget-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="w-title" style="color:#888;font-size:13px;margin-bottom:4px;">Mesajlar</p>
                                <h3 class="w-value" style="font-size:32px;font-weight:700;color:#e2a03f;">
                                    {{ $counts['messages'] }}</h3>
                            </div>
                            <div class="w-icon" style="background:#fef6ea;border-radius:12px;padding:14px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="#e2a03f" stroke-width="2">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 mb-0" style="font-size:12px;color:#aaa;">
                            @php $unread = \App\Models\Contact::where('is_read', false)->count(); @endphp
                            <span class="badge bg-warning text-dark">{{ $unread }} okunmamış</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Second row: more stats --}}
        <div class="row g-3 mb-4">
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="widget widget-card-one text-center">
                    <div class="widget-content py-3">
                        <div style="font-size:28px;font-weight:700;color:#4361ee;">{{ \App\Models\Service::count() }}</div>
                        <div style="font-size:12px;color:#888;margin-top:4px;">Hizmet</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="widget widget-card-one text-center">
                    <div class="widget-content py-3">
                        <div style="font-size:28px;font-weight:700;color:#00ab55;">{{ \App\Models\Reference::count() }}
                        </div>
                        <div style="font-size:12px;color:#888;margin-top:4px;">Referans</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="widget widget-card-one text-center">
                    <div class="widget-content py-3">
                        <div style="font-size:28px;font-weight:700;color:#e7515a;">{{ \App\Models\TeamMember::count() }}
                        </div>
                        <div style="font-size:12px;color:#888;margin-top:4px;">Ekip Üyesi</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="widget widget-card-one text-center">
                    <div class="widget-content py-3">
                        <div style="font-size:28px;font-weight:700;color:#e2a03f;">{{ \App\Models\TimelineEvent::count() }}
                        </div>
                        <div style="font-size:12px;color:#888;margin-top:4px;">Timeline</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="widget widget-card-one text-center">
                    <div class="widget-content py-3">
                        <div style="font-size:28px;font-weight:700;color:#805dca;">
                            {{ \App\Models\PortfolioCategory::count() }}</div>
                        <div style="font-size:12px;color:#888;margin-top:4px;">Kategori</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="widget widget-card-one text-center">
                    <div class="widget-content py-3">
                        <div style="font-size:28px;font-weight:700;color:#009688;">
                            {{ \App\Models\Portfolio::where('is_featured', true)->count() }}</div>
                        <div style="font-size:12px;color:#888;margin-top:4px;">Öne Çıkan</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Recent Messages + Recent Blogs side by side --}}
        <div class="row g-3">
            <div class="col-xl-6">
                <div class="widget widget-table-one">
                    <div class="widget-heading d-flex justify-content-between align-items-center">
                        <h5>Son Mesajlar</h5>
                        <a href="{{ route('contactMessages.index') }}" class="btn btn-sm btn-outline-primary">Tümü</a>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>İsim</th>
                                        <th>Konu</th>
                                        <th>Tarih</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse(\App\Models\Contact::latest()->take(5)->get() as $msg)
                                        <tr>
                                            <td>{{ $msg->fullname }}</td>
                                            <td>{{ Str::limit($msg->subject, 25) }}</td>
                                            <td>{{ $msg->created_at->format('d.m.Y') }}</td>
                                            <td>
                                                @if(!$msg->is_read)
                                                    <span class="badge bg-warning text-dark">Yeni</span>
                                                @else
                                                    <span class="badge bg-secondary">Okundu</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-3">Mesaj yok</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="widget widget-table-one">
                    <div class="widget-heading d-flex justify-content-between align-items-center">
                        <h5>Son Blog Yazıları</h5>
                        <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-outline-primary">Tümü</a>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Başlık</th>
                                        <th>Kategori</th>
                                        <th>Tarih</th>
                                        <th>Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse(\App\Models\Blog::latest()->take(5)->get() as $blog)
                                        <tr>
                                            <td>{{ Str::limit($blog->title, 25) }}</td>
                                            <td>{{ $blog->category ?? '-' }}</td>
                                            <td>{{ $blog->created_at->format('d.m.Y') }}</td>
                                            <td>
                                                @if($blog->is_published)
                                                    <span class="badge bg-success">Yayında</span>
                                                @else
                                                    <span class="badge bg-secondary">Taslak</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-3">Blog yazısı yok</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection