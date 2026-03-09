@extends('admin.pages.main')
@section('breadcumb', 'Slider Yönetimi / Düzenle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-8 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Slider Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('sliders.update', $slider) }}" method="POST" enctype="multipart/form-data"
                            id="mainForm">
                            @csrf @method('PUT')

                            <ul class="nav nav-tabs mb-3" id="sliderTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-temel" role="tab">Temel
                                        Bilgiler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-buton" role="tab">Butonlar</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-temel" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Üst Başlık <small class="text-muted">(küçük metin)</small></p>
                                                <input type="text" name="uptitle" class="form-control"
                                                    value="{{ old('uptitle', $slider->uptitle) }}"
                                                    placeholder="Örn: Hoşgeldiniz">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Ana Başlık <span class="text-danger">*</span></p>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ old('title', $slider->title) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Alt Başlık / Açıklama</p>
                                                <textarea name="subtitle" class="form-control"
                                                    rows="3">{{ old('subtitle', $slider->subtitle) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" class="form-control"
                                                    value="{{ old('order', $slider->order) }}" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="padding-top: 10px;">
                                            <div class="form-group">
                                                <p>Durum</p>
                                                <div class="form-check form-switch mt-1">
                                                    <input class="form-check-input" type="checkbox" name="is_active"
                                                        value="1" id="is_active" {{ $slider->is_active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="is_active">Aktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-buton" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>1. Buton Yazısı</p>
                                                <input type="text" name="btn_text" class="form-control"
                                                    value="{{ old('btn_text', $slider->btn_text) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>1. Buton URL</p>
                                                <input type="text" name="btn_url" class="form-control"
                                                    value="{{ old('btn_url', $slider->btn_url) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>2. Buton Yazısı</p>
                                                <input type="text" name="btn_text_2" class="form-control"
                                                    value="{{ old('btn_text_2', $slider->btn_text_2) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>2. Buton URL</p>
                                                <input type="text" name="btn_url_2" class="form-control"
                                                    value="{{ old('btn_url_2', $slider->btn_url_2) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success btn-lg me-2">Güncelle</button>
                                <a href="{{ route('sliders.index') }}" class="btn btn-secondary btn-lg">İptal</a>
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
                                <h4>Arka Plan Görseli</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        @if($slider->image)
                            <div class="mb-3">
                                <img src="{{ Storage::url($slider->image) }}" class="img-fluid rounded"
                                    style="max-height:160px;" alt="">
                                <p class="text-muted mt-1 small">Yeni görsel yüklerseniz mevcut görsel silinir.</p>
                            </div>
                        @endif
                        <div class="custom-file-container" data-upload-id="slider-image">
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