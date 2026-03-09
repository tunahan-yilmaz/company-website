@extends('admin.pages.main')
@section('breadcumb', 'Blog Yönetimi / Ekle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Blog Yazısı Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" id="mainForm">
                            @csrf

                            {{-- Ana Sekme Listesi --}}
                            <ul class="nav nav-tabs mb-3" id="blogTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-icerik" role="tab">İçerik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-meta" role="tab">Meta &
                                        Sınıflandırma</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-yayin" role="tab">Yayın Ayarları</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                {{-- İçerik Sekmesi: Dil Alt Tabları --}}
                                <div class="tab-pane fade show active" id="tab-icerik" role="tabpanel">
                                    <ul class="nav nav-pills mb-3" id="langPills" role="tablist">
                                        @foreach($locales as $i => $locale)
                                            <li class="nav-item me-1">
                                                <a class="nav-link {{ $i === 0 ? 'active' : '' }}" data-toggle="tab"
                                                    href="#lang-{{ $locale }}" role="tab">
                                                    🌐 {{ strtoupper($locale) }}
                                                    @if($locale === 'tr') <span class="badge badge-primary ms-1">Zorunlu</span>
                                                    @endif
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        @foreach($locales as $i => $locale)
                                            <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}"
                                                id="lang-{{ $locale }}" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small>
                                                                {{ $locale === 'tr' ? '<span class="text-danger">*</span>' : '' }}
                                                            </p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="title" class="form-control"
                                                                    value="{{ old('title') }}" required placeholder="Blog başlığı">
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][title]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.title') }}"
                                                                    placeholder="Title ({{ strtoupper($locale) }})">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Alt Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="subtitle" class="form-control"
                                                                    value="{{ old('subtitle') }}" placeholder="Kısa alt başlık">
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][subtitle]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.subtitle') }}"
                                                                    placeholder="Subtitle">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Özet / Excerpt <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="excerpt" class="form-control" rows="2"
                                                                    placeholder="Kısa özet">{{ old('excerpt') }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][excerpt]"
                                                                    class="form-control" rows="2"
                                                                    placeholder="Excerpt">{{ old('translations.' . $locale . '.excerpt') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>İçerik <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="content" class="form-control summernote"
                                                                    rows="10">{{ old('content') }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][content]"
                                                                    class="form-control summernote"
                                                                    rows="10">{{ old('translations.' . $locale . '.content') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- Meta Sekmesi --}}
                                <div class="tab-pane fade" id="tab-meta" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kategori</p>
                                                <input type="text" name="category" class="form-control"
                                                    value="{{ old('category') }}" placeholder="Teknoloji, AI, ...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Yazar</p>
                                                <input type="text" name="author" class="form-control"
                                                    value="{{ old('author', 'DBS Software') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Okuma Süresi <small class="text-muted">(dk)</small></p>
                                                <input type="number" name="read_time" class="form-control"
                                                    value="{{ old('read_time', 5) }}" min="1" max="120">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>Etiketler</p>
                                                <input type="text" name="tags_input" class="form-control"
                                                    value="{{ old('tags_input') }}"
                                                    placeholder="Yapay Zeka, Machine Learning (virgülle ayırın)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Slug (URL)</p>
                                                <input type="text" name="slug" class="form-control"
                                                    value="{{ old('slug') }}" placeholder="otomatik-olusturulur">
                                                <small class="text-muted">Boş bırakırsanız başlıktan otomatik
                                                    oluşturulur.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>SEO Başlık</p>
                                                <input type="text" name="meta_title" class="form-control"
                                                    value="{{ old('meta_title') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>SEO Açıklama</p>
                                                <input type="text" name="meta_description" class="form-control"
                                                    value="{{ old('meta_description') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Yayın Sekmesi --}}
                                <div class="tab-pane fade" id="tab-yayin" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" class="form-control"
                                                    value="{{ old('order', 0) }}" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Yayın Durumu</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_published"
                                                        value="1" id="is_published">
                                                    <label class="form-check-label" for="is_published">Yayınla</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Durum</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_active"
                                                        value="1" id="is_active" checked>
                                                    <label class="form-check-label" for="is_active">Aktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success btn-lg me-2">Kaydet</button>
                                <a href="{{ route('blogs.index') }}" class="btn btn-secondary btn-lg">İptal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Kapak Görseli</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="blog-image">
                            <label>Görsel Yükle <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Temizle">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" form="mainForm" name="image"
                                    class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection