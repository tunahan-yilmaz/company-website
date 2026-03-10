@extends('admin.pages.main')
@section('breadcumb', 'Kurumsal Yönetimi')
@section('content')
<div class="container-fluid">
    <div class="row layout-top-spacing">
        <div class="col-lg-8 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-12"><h4>Kurumsal Bilgiler</h4></div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">
                    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data" id="mainForm">
                        @csrf @method('PUT')

                        @if(session('success'))
                            <div class="alert alert-success mb-3">{{ session('success') }}</div>
                        @endif

                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-genel" role="tab">Genel Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-mvv" role="tab">Misyon / Vizyon / Değerler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-sayaclar" role="tab">Sayaçlar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-gorseller" role="tab">Görseller</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            {{-- Genel Bilgiler --}}
                            <div class="tab-pane fade show active" id="tab-genel" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <p>Sayfa Başlığı</p>
                                            <input type="text" name="title" class="form-control" value="{{ old('title', $about->title) }}" placeholder="Hakkımızda">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <p>Hakkımızda Metni</p>
                                            <textarea name="about_text" class="form-control summernote" rows="8">{!! old('about_text', $about->about_text) !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Misyon / Vizyon / Değerler --}}
                            <div class="tab-pane fade" id="tab-mvv" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <p>Misyonumuz</p>
                                            <textarea name="mission" class="form-control" rows="5" placeholder="İşletmelerin dijital dönüşümünde...">{{ old('mission', $about->mission) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <p>Vizyonumuz</p>
                                            <textarea name="vision" class="form-control" rows="5" placeholder="Türkiye'nin en güvenilir...">{{ old('vision', $about->vision) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <p>Değerlerimiz</p>
                                            <textarea name="values" class="form-control" rows="5" placeholder="Müşteri memnuniyeti, yenilikçilik, şeffaflık...">{{ old('values', $about->values) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Sayaçlar --}}
                            <div class="tab-pane fade" id="tab-sayaclar" role="tabpanel">
                                <p class="text-muted mb-3">Web sitesinde animasyonlu olarak gösterilen 4 sayaç değerini buradan yönetin.</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 1 — Değer</p>
                                            <input type="text" name="stat_1_number" class="form-control" value="{{ old('stat_1_number', $about->stat_1_number) }}" placeholder="150+">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 1 — Etiket</p>
                                            <input type="text" name="stat_1_label" class="form-control" value="{{ old('stat_1_label', $about->stat_1_label) }}" placeholder="Tamamlanan Proje">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 2 — Değer</p>
                                            <input type="text" name="stat_2_number" class="form-control" value="{{ old('stat_2_number', $about->stat_2_number) }}" placeholder="120+">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 2 — Etiket</p>
                                            <input type="text" name="stat_2_label" class="form-control" value="{{ old('stat_2_label', $about->stat_2_label) }}" placeholder="Mutlu Müşteri">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 3 — Değer</p>
                                            <input type="text" name="stat_3_number" class="form-control" value="{{ old('stat_3_number', $about->stat_3_number) }}" placeholder="98">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 3 — Etiket</p>
                                            <input type="text" name="stat_3_label" class="form-control" value="{{ old('stat_3_label', $about->stat_3_label) }}" placeholder="Müşteri Memnuniyeti %">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 4 — Değer</p>
                                            <input type="text" name="stat_4_number" class="form-control" value="{{ old('stat_4_number', $about->stat_4_number) }}" placeholder="12">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <p>Sayaç 4 — Etiket</p>
                                            <input type="text" name="stat_4_label" class="form-control" value="{{ old('stat_4_label', $about->stat_4_label) }}" placeholder="Yıllık Deneyim">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Görseller --}}
                            <div class="tab-pane fade" id="tab-gorseller" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <p>Görsel 1 <small class="text-muted">(600x830 px önerilen)</small></p>
                                            @if($about->image_1)
                                                <img src="/storage/{{ $about->image_1 }}" class="img-fluid rounded mb-2" style="max-height:140px;">
                                                <p class="text-muted small">Yeni görsel yüklerseniz mevcut silinir.</p>
                                            @endif
                                            <div class="custom-file-container" data-upload-id="about-img1">
                                                <label>Görsel 1 <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Temizle">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" form="mainForm" name="image_1" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <p>Görsel 2 <small class="text-muted">(600x700 px önerilen)</small></p>
                                            @if($about->image_2)
                                                <img src="/storage/{{ $about->image_2 }}" class="img-fluid rounded mb-2" style="max-height:140px;">
                                                <p class="text-muted small">Yeni görsel yüklerseniz mevcut silinir.</p>
                                            @endif
                                            <div class="custom-file-container" data-upload-id="about-img2">
                                                <label>Görsel 2 <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Temizle">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" form="mainForm" name="image_2" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-success btn-lg me-2">Değişiklikleri Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Sağ kolon: hızlı bilgi --}}
        <div class="col-lg-4 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-12"><h4>Hızlı Bilgi</h4></div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">
                    <ul class="list-unstyled mb-0" style="line-height:2.2">
                        <li><i class="far fa-file-alt me-2 text-primary"></i> <strong>Genel Bilgiler:</strong> Sayfa başlığı ve ana metin</li>
                        <li><i class="fas fa-rocket me-2 text-warning"></i> <strong>Misyon/Vizyon/Değerler:</strong> 3 kart, site "Hakkımızda" bölümü</li>
                        <li><i class="fas fa-chart-bar me-2 text-success"></i> <strong>Sayaçlar:</strong> Animasyonlu 4 istatistik kutusu</li>
                        <li><i class="far fa-image me-2 text-info"></i> <strong>Görseller:</strong> Hikaye bölümü 2 görsel</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection