@extends('admin.pages.main')
@section('breadcumb', 'Referans Yönetimi / Düzenle')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-7 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Referans Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form action="{{ route('references.update', $reference) }}" method="POST"
                            enctype="multipart/form-data" id="mainForm">
                            @csrf @method('PUT')

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>Firma / Referans Adı <span class="text-danger">*</span></p>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name', $reference->name) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>Web Sitesi URL</p>
                                        <input type="url" name="website_url" class="form-control"
                                            value="{{ old('website_url', $reference->website_url) }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>Açıklama</p>
                                        <textarea name="description" class="form-control"
                                            rows="3">{{ old('description', $reference->description) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p>Sıra</p>
                                        <input type="number" name="order" class="form-control"
                                            value="{{ old('order', $reference->order) }}" min="0">
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-top: 10px;">
                                    <div class="form-group">
                                        <p>Durum</p>
                                        <div class="form-check form-switch mt-1">
                                            <input class="form-check-input" type="checkbox" name="is_active" value="1"
                                                id="is_active" {{ $reference->is_active ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_active">Aktif</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success btn-lg me-2">Güncelle</button>
                                <a href="{{ route('references.index') }}" class="btn btn-secondary btn-lg">İptal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-12">
                                <h4>Logo Görseli</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        @if($reference->logo_image)
                            <div class="mb-3">
                                <img src="{{ Storage::url($reference->logo_image) }}" class="img-fluid rounded"
                                    style="max-height:100px;" alt="">
                                <p class="text-muted mt-1 small">Yeni görsel yüklerseniz mevcut logo silinir.</p>
                            </div>
                        @endif
                        <div class="custom-file-container" data-upload-id="ref-logo">
                            <label>Yeni Logo <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Temizle">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" form="mainForm" name="logo_image"
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