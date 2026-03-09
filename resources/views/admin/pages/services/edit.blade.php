@extends('admin.pages.main')
@section('breadcumb', 'Hizmet Yönetimi / Düzenle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Hizmet Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data"
                            id="mainForm">
                            @csrf @method('PUT')

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
                                                    value="{{ old('title', $service->title) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Badge Metni</p>
                                                <input type="text" name="badge_text" class="form-control"
                                                    value="{{ old('badge_text', $service->badge_text) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Icon <small class="text-muted">(FA class)</small></p>
                                                <input type="text" name="icon" class="form-control"
                                                    value="{{ old('icon', $service->icon) }}" placeholder="fa-code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Section ID <small class="text-muted">(anchor)</small></p>
                                                <input type="text" name="section_id" class="form-control"
                                                    value="{{ old('section_id', $service->section_id) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>CTA Buton Yazısı</p>
                                                <input type="text" name="cta_text" class="form-control"
                                                    value="{{ old('cta_text', $service->cta_text) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" class="form-control"
                                                    value="{{ old('order', $service->order) }}" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Durum</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_active"
                                                        value="1" id="is_active" {{ $service->is_active ? 'checked' : '' }}>
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
                                                <textarea name="short_description" class="form-control"
                                                    rows="2">{{ old('short_description', $service->short_description) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Detaylı Açıklama</p>
                                                <textarea name="detail_text" class="form-control summernote"
                                                    rows="6">{!! old('detail_text', $service->detail_text) !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-liste" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Özellikler Listesi</p>
                                                <textarea name="features_json" class="form-control"
                                                    rows="8">{{ old('features_json', implode("\n", $service->features ?? [])) }}</textarea>
                                                <small class="text-muted">Her satıra bir madde</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Teknoloji Yığını</p>
                                                <textarea name="tech_stack_json" class="form-control"
                                                    rows="8">{{ old('tech_stack_json', implode("\n", $service->tech_stack ?? [])) }}</textarea>
                                                <small class="text-muted">Her satıra bir teknoloji</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success btn-lg me-2">Güncelle</button>
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
                        @if($service->image)
                            <div class="mb-3">
                                <img src="{{ Storage::url($service->image) }}" class="img-fluid rounded"
                                    style="max-height:160px;" alt="">
                                <p class="text-muted mt-1 small">Yeni görsel yüklerseniz mevcut görsel silinir.</p>
                            </div>
                        @endif
                        <div class="custom-file-container" data-upload-id="service-image">
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