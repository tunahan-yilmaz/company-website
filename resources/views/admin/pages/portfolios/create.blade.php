@extends('admin.pages.main')
@section('breadcumb', 'Portfolyo Yönetimi / Ekle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Portfolyo Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data"
                            id="mainForm">
                            @csrf

                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-icerik" role="tab">İçerik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-detaylar" role="tab">Proje
                                        Detayları</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-teknoloji" role="tab">Teknoloji &
                                        Özellikler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-sonuclar" role="tab">Sonuçlar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-yayin" role="tab">Yayın</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                {{-- İçerik: dil alt tabları --}}
                                <div class="tab-pane fade show active" id="tab-icerik" role="tabpanel">
                                    <ul class="nav nav-pills mb-3" role="tablist">
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
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <p>Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small>
                                                                {{ $locale === 'tr' ? '<span class="text-danger">*</span>' : '' }}
                                                            </p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="title" class="form-control"
                                                                    value="{{ old('title') }}" required placeholder="Proje başlığı">
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][title]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.title') }}"
                                                                    placeholder="Project title">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <p>Alt Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="subtitle" class="form-control"
                                                                    value="{{ old('subtitle') }}" placeholder="Hero alt başlık">
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
                                                            <p>Kısa Açıklama <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="description" class="form-control" rows="2"
                                                                    placeholder="Özet açıklama">{{ old('description') }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][description]"
                                                                    class="form-control" rows="2"
                                                                    placeholder="Short description">{{ old('translations.' . $locale . '.description') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Detaylı Açıklama <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="detail_text" class="form-control summernote"
                                                                    rows="8">{{ old('detail_text') }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][detail_text]"
                                                                    class="form-control summernote"
                                                                    rows="8">{{ old('translations.' . $locale . '.detail_text') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Zorluklar & Çözümler <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="challenge" class="form-control" rows="4"
                                                                    placeholder="Projede karşılaşılan zorluklar...">{{ old('challenge') }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][challenge]"
                                                                    class="form-control" rows="4"
                                                                    placeholder="Challenges & solutions...">{{ old('translations.' . $locale . '.challenge') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- Proje Detayları --}}
                                <div class="tab-pane fade" id="tab-detaylar" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kategori</p>
                                                <select name="portfolio_category_id" class="form-control">
                                                    <option value="">-- Kategori Seçin --</option>
                                                    @foreach($categories as $cat)
                                                        <option value="{{ $cat->id }}" {{ old('portfolio_category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Müşteri / Firma</p>
                                                <input type="text" name="client_name" class="form-control"
                                                    value="{{ old('client_name') }}" placeholder="Firma adı">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Tarih</p>
                                                <input type="text" name="date" class="form-control"
                                                    value="{{ old('date') }}" placeholder="Eylül 2024">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Süre</p>
                                                <input type="text" name="duration" class="form-control"
                                                    value="{{ old('duration') }}" placeholder="4 Ay">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Ekip Büyüklüğü</p>
                                                <input type="text" name="team_size" class="form-control"
                                                    value="{{ old('team_size') }}" placeholder="5 Kişi">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Bütçe Aralığı</p>
                                                <input type="text" name="budget" class="form-control"
                                                    value="{{ old('budget') }}" placeholder="50K-100K">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Lokasyon</p>
                                                <input type="text" name="location" class="form-control"
                                                    value="{{ old('location') }}" placeholder="İstanbul, Türkiye">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Proje URL</p>
                                                <input type="url" name="project_url" class="form-control"
                                                    value="{{ old('project_url') }}" placeholder="https://...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Slug (URL)</p>
                                                <input type="text" name="slug" class="form-control"
                                                    value="{{ old('slug') }}" placeholder="otomatik-olusturulur">
                                                <small class="text-muted">Boş bırakırsanız başlıktan otomatik
                                                    oluşturulur.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Teknoloji & Özellikler --}}
                                <div class="tab-pane fade" id="tab-teknoloji" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Teknoloji Yığını</p>
                                                <textarea name="tech_stack_input" class="form-control" rows="8"
                                                    placeholder="Her satıra bir teknoloji:&#10;React.js&#10;Laravel&#10;PostgreSQL">{{ old('tech_stack_input') }}</textarea>
                                                <small class="text-muted">Her satıra bir teknoloji</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Özellikler Listesi</p>
                                                <textarea name="features_input" class="form-control" rows="8"
                                                    placeholder="Her satıra bir özellik:&#10;Gerçek zamanlı analitik&#10;Çoklu dil desteği">{{ old('features_input') }}</textarea>
                                                <small class="text-muted">Her satıra bir özellik</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Etiketler</p>
                                                <textarea name="tags_input" class="form-control" rows="8"
                                                    placeholder="Her satıra bir etiket:&#10;E-Commerce&#10;Yapay Zeka">{{ old('tags_input') }}</textarea>
                                                <small class="text-muted">Her satıra bir etiket</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Sonuçlar --}}
                                <div class="tab-pane fade" id="tab-sonuclar" role="tabpanel">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0"><strong>Proje Sonuçları</strong></p>
                                        <button type="button" class="btn btn-outline-primary btn-sm" id="addResult">+ Sonuç
                                            Ekle</button>
                                    </div>
                                    <div id="results-container">
                                        @for($r = 0; $r < 4; $r++)
                                            <div class="row result-row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" name="result_values[]" class="form-control"
                                                        placeholder="Değer: %300">
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" name="result_labels[]" class="form-control"
                                                        placeholder="Etiket: ROI Artışı">
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="button" class="btn btn-danger btn-sm remove-result">×</button>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                {{-- Yayın Ayarları --}}
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
                                                <p>Öne Çıkan</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_featured"
                                                        value="1" id="is_featured">
                                                    <label class="form-check-label" for="is_featured">Öne Çıkan</label>
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
                                <a href="{{ route('portfolios.index') }}" class="btn btn-secondary btn-lg">İptal</a>
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
                        <div class="custom-file-container" data-upload-id="portfolio-cover">
                            <label>Kapak <a href="javascript:void(0)" class="custom-file-container__image-clear"
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

                <div class="statbox widget box box-shadow mt-4">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Galeri Görselleri</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="portfolio-gallery">
                            <label>Çoklu Görsel Yükle <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Temizle">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" form="mainForm" name="gallery_images[]" class="custom-file-container__custom-file__custom-file-input" accept="image/*" multiple>
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addResult').addEventListener('click', function () {
            const c = document.getElementById('results-container');
            const row = document.createElement('div');
            row.className = 'row result-row mb-2';
            row.innerHTML = `<div class="col-md-4"><input type="text" name="result_values[]" class="form-control" placeholder="Değer: %300"></div><div class="col-md-7"><input type="text" name="result_labels[]" class="form-control" placeholder="Etiket: ROI Artışı"></div><div class="col-md-1"><button type="button" class="btn btn-danger btn-sm remove-result">×</button></div>`;
            c.appendChild(row);
        });
        document.getElementById('results-container').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-result')) e.target.closest('.result-row').remove();
        });
    </script>
@endsection