@extends('admin.pages.main')
@section('breadcumb', 'Hizmet Yönetimi / Ekle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Hizmet Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data"
                            id="mainForm">
                            @csrf

                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-genel" role="tab">Genel
                                        Bilgiler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-detay" role="tab">Detay &
                                        Açıklamalar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-liste" role="tab">Özellikler &
                                        Teknolojiler</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-genel" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <p>Başlık <span class="text-danger">*</span></p>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ old('title') }}" required placeholder="Hizmet başlığı">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Badge Metni</p>
                                                <input type="text" name="badge_text" class="form-control"
                                                    value="{{ old('badge_text') }}" placeholder="Hizmet #1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Icon <small class="text-muted">(FontAwesome class)</small></p>
                                                <input type="text" name="icon" class="form-control"
                                                    value="{{ old('icon') }}" placeholder="fa-code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Section ID <small class="text-muted">(anchor #)</small></p>
                                                <input type="text" name="section_id" class="form-control"
                                                    value="{{ old('section_id') }}" placeholder="software">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>CTA Buton Yazısı</p>
                                                <input type="text" name="cta_text" class="form-control"
                                                    value="{{ old('cta_text', 'Detaylı Bilgi') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" class="form-control"
                                                    value="{{ old('order', 0) }}" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-top: 10px;">
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

                                <div class="tab-pane fade" id="tab-detay" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Kısa Açıklama</p>
                                                <textarea name="short_description" class="form-control" rows="2"
                                                    placeholder="Hizmetin kısa tanımı">{{ old('short_description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Detaylı Açıklama</p>
                                                <textarea name="detail_text" class="form-control summernote"
                                                    rows="6">{{ old('detail_text') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-liste" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Özellikler Listesi</p>
                                                <textarea name="features_json" class="form-control" rows="8"
                                                    placeholder="Her satıra bir özellik:&#10;Web Uygulamaları&#10;Kurumsal Yazılımlar">{{ old('features_json') }}</textarea>
                                                <small class="text-muted">Her satıra bir madde</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Teknoloji Yığını</p>
                                                <textarea name="tech_stack_json" class="form-control" rows="8"
                                                    placeholder="Her satıra bir teknoloji:&#10;React.js&#10;Node.js">{{ old('tech_stack_json') }}</textarea>
                                                <small class="text-muted">Her satıra bir teknoloji</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success btn-lg me-2">Kaydet</button>
                                <a href="{{ route('services.index') }}" class="btn btn-secondary btn-lg">İptal</a>
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
                                <h4>Detay Görseli</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="service-image">
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