@extends('admin.pages.main')
@section('breadcumb', 'Portfolyo Yönetimi / Düzenle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Portfolyo Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('portfolios.update', $portfolio) }}" method="POST"
                            enctype="multipart/form-data" id="mainForm">
                            @csrf @method('PUT')

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
                                            @php $t = $translationsData[$locale] ?? []; @endphp
                                            <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}"
                                                id="lang-{{ $locale }}" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <p>Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="title" class="form-control"
                                                                    value="{{ old('title', $portfolio->title) }}" required>
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][title]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.title', $t['title'] ?? '') }}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <p>Alt Başlık <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <input type="text" name="subtitle" class="form-control"
                                                                    value="{{ old('subtitle', $portfolio->subtitle) }}">
                                                            @else
                                                                <input type="text" name="translations[{{ $locale }}][subtitle]"
                                                                    class="form-control"
                                                                    value="{{ old('translations.' . $locale . '.subtitle', $t['subtitle'] ?? '') }}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Kısa Açıklama <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="description" class="form-control"
                                                                    rows="2">{{ old('description', $portfolio->description) }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][description]"
                                                                    class="form-control"
                                                                    rows="2">{{ old('translations.' . $locale . '.description', $t['description'] ?? '') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Detaylı Açıklama <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="detail_text" class="form-control summernote"
                                                                    rows="8">{!! old('detail_text', $portfolio->detail_text) !!}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][detail_text]"
                                                                    class="form-control summernote"
                                                                    rows="8">{!! old('translations.' . $locale . '.detail_text', $t['detail_text'] ?? '') !!}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p>Zorluklar & Çözümler <small
                                                                    class="text-muted">({{ strtoupper($locale) }})</small></p>
                                                            @if($locale === 'tr')
                                                                <textarea name="challenge" class="form-control"
                                                                    rows="4">{{ old('challenge', $portfolio->challenge) }}</textarea>
                                                            @else
                                                                <textarea name="translations[{{ $locale }}][challenge]"
                                                                    class="form-control"
                                                                    rows="4">{{ old('translations.' . $locale . '.challenge', $t['challenge'] ?? '') }}</textarea>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-detaylar" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kategori</p>
                                                <select name="portfolio_category_id" class="form-control">
                                                    <option value="">-- Kategori Seçin --</option>
                                                    @foreach($categories as $cat)
                                                        <option value="{{ $cat->id }}" {{ old('portfolio_category_id', $portfolio->portfolio_category_id) == $cat->id ? 'selected' : '' }}>
                                                            {{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Müşteri / Firma</p>
                                                <input type="text" name="client_name" class="form-control"
                                                    value="{{ old('client_name', $portfolio->client_name) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Tarih</p>
                                                <input type="text" name="date" class="form-control"
                                                    value="{{ old('date', $portfolio->date) }}" placeholder="Eylül 2024">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Süre</p>
                                                <input type="text" name="duration" class="form-control"
                                                    value="{{ old('duration', $portfolio->duration) }}" placeholder="4 Ay">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Ekip Büyüklüğü</p>
                                                <input type="text" name="team_size" class="form-control"
                                                    value="{{ old('team_size', $portfolio->team_size) }}"
                                                    placeholder="5 Kişi">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Bütçe Aralığı</p>
                                                <input type="text" name="budget" class="form-control"
                                                    value="{{ old('budget', $portfolio->budget) }}" placeholder="50K-100K">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Lokasyon</p>
                                                <input type="text" name="location" class="form-control"
                                                    value="{{ old('location', $portfolio->location) }}"
                                                    placeholder="İstanbul, Türkiye">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Proje URL</p>
                                                <input type="url" name="project_url" class="form-control"
                                                    value="{{ old('project_url', $portfolio->project_url) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Slug (URL)</p>
                                                <input type="text" name="slug" class="form-control"
                                                    value="{{ old('slug', $portfolio->slug) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-teknoloji" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Teknoloji Yığını</p>
                                                <textarea name="tech_stack_input" class="form-control"
                                                    rows="8">{{ old('tech_stack_input', implode("\n", $portfolio->tech_stack ?? [])) }}</textarea>
                                                <small class="text-muted">Her satıra bir teknoloji</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Özellikler Listesi</p>
                                                <textarea name="features_input" class="form-control"
                                                    rows="8">{{ old('features_input', implode("\n", $portfolio->features ?? [])) }}</textarea>
                                                <small class="text-muted">Her satıra bir özellik</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Etiketler</p>
                                                <textarea name="tags_input" class="form-control"
                                                    rows="8">{{ old('tags_input', implode("\n", $portfolio->tags ?? [])) }}</textarea>
                                                <small class="text-muted">Her satıra bir etiket</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-sonuclar" role="tabpanel">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="mb-0"><strong>Proje Sonuçları</strong></p>
                                        <button type="button" class="btn btn-outline-primary btn-sm" id="addResult">+ Sonuç
                                            Ekle</button>
                                    </div>
                                    <div id="results-container">
                                        @foreach($portfolio->results ?? array_fill(0, 4, ['value' => '', 'label' => '']) as $result)
                                            <div class="row result-row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" name="result_values[]" class="form-control"
                                                        value="{{ $result['value'] ?? '' }}" placeholder="Değer: %300">
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" name="result_labels[]" class="form-control"
                                                        value="{{ $result['label'] ?? '' }}" placeholder="Etiket: ROI Artışı">
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="button" class="btn btn-danger btn-sm remove-result">×</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-yayin" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" class="form-control"
                                                    value="{{ old('order', $portfolio->order) }}" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Öne Çıkan</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_featured"
                                                        value="1" id="is_featured" {{ $portfolio->is_featured ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="is_featured">Öne Çıkan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Durum</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_active"
                                                        value="1" id="is_active" {{ $portfolio->is_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="is_active">Aktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success btn-lg me-2">Güncelle</button>
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
                        @if($portfolio->image)
                            <div class="mb-3">
                                <img src="{{ Storage::url($portfolio->image) }}" class="img-fluid rounded"
                                    style="max-height:140px;" alt="">
                                <p class="text-muted mt-1 small">Yeni görsel yüklerseniz mevcut görsel silinir.</p>
                            </div>
                        @endif
                        <div class="custom-file-container" data-upload-id="portfolio-cover">
                            <label>Yeni Kapak <a href="javascript:void(0)" class="custom-file-container__image-clear"
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
                        @if(!empty($portfolio->gallery_images))
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                @foreach($portfolio->gallery_images as $gi)
                                    <img src="{{ Storage::url($gi) }}" class="img-thumbnail" style="height:70px;width:auto;" alt="">
                                @endforeach
                            </div>
                            <small class="text-muted d-block mb-2">Yeni görseller yüklerseniz mevcut galeri silinir.</small>
                        @endif
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