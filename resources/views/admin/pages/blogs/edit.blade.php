@extends('admin.pages.main')
@section('breadcumb', 'Blog Yönetimi / Düzenle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Blog Yazısı Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data"
                            id="mainForm">
                            @csrf @method('PUT')

                            <ul class="nav nav-tabs mb-3" role="tablist">
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

                                <div class="tab-pane fade show active" id="tab-icerik" role="tabpanel">
                                    <ul class="nav nav-pills mb-3" role="tablist">
                                        @foreach($locales as $i => $locale)
                                            @php $t = $translationsData[$locale] ?? []; @endphp
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
                                            @php $t = $translationsData[$locale] ?? []; @endphp
                                            <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}"
                                                id="lang-{{ $locale }}" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="title" class="form-control"
                                                                    value="{{ old('title', $blog->title) }}" required>
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][title]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.title', $t['title'] ?? '') }}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Alt Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="subtitle" class="form-control"
                                                                    value="{{ old('subtitle', $blog->subtitle) }}">
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][subtitle]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.subtitle', $t['subtitle'] ?? '') }}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Özet <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="excerpt" class="form-control"
                                                                    rows="2">{{ old('excerpt', $blog->excerpt) }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][excerpt]"
                                                                    class="form-control"
                                                                    rows="2">{{ old('translations.' . $locale . '.excerpt', $t['excerpt'] ?? '') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>İçerik <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="content" class="form-control summernote"
                                                                    rows="10">{!! old('content', $blog->content) !!}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][content]"
                                                                    class="form-control summernote"
                                                                    rows="10">{!! old('translations.' . $locale . '.content', $t['content'] ?? '') !!}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-meta" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kategori</p>
                                                <input type="text" name="category" class="form-control"
                                                    value="{{ old('category', $blog->category) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Yazar</p>
                                                <input type="text" name="author" class="form-control"
                                                    value="{{ old('author', $blog->author) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Okuma Süresi <small class="text-muted">(dk)</small></p>
                                                <input type="number" name="read_time" class="form-control"
                                                    value="{{ old('read_time', $blog->read_time) }}" min="1">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>Etiketler</p>
                                                <input type="text" name="tags_input" class="form-control"
                                                    value="{{ old('tags_input', implode(', ', $blog->tags ?? [])) }}"
                                                    placeholder="Virgülle ayırın">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Slug (URL)</p>
                                                <input type="text" name="slug" class="form-control"
                                                    value="{{ old('slug', $blog->slug) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>SEO Başlık</p>
                                                <input type="text" name="meta_title" class="form-control"
                                                    value="{{ old('meta_title', $blog->meta_title) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>SEO Açıklama</p>
                                                <input type="text" name="meta_description" class="form-control"
                                                    value="{{ old('meta_description', $blog->meta_description) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-yayin" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" class="form-control"
                                                    value="{{ old('order', $blog->order) }}" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Yayın Durumu</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_published"
                                                        value="1" id="is_published" {{ $blog->is_published ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="is_published">Yayınla</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Durum</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_active"
                                                        value="1" id="is_active" {{ $blog->is_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="is_active">Aktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success btn-lg me-2">Güncelle</button>
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
                        @if($blog->image)
                            <div class="mb-3">
                                <img src="{{ Storage::url($blog->image) }}" class="img-fluid rounded" style="max-height:160px;"
                                    alt="">
                                <p class="text-muted mt-1 small">Yeni görsel yüklerseniz mevcut görsel silinir.</p>
                            </div>
                        @endif
                        <div class="custom-file-container" data-upload-id="blog-image">
                            <label>Yeni Görsel <a href="javascript:void(0)" class="custom-file-container__image-clear"
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