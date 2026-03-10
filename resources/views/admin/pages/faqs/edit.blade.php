@extends('admin.pages.main')
@section('breadcumb', 'SSS Yönetimi / Düzenle')
@section('content')
<div class="container-fluid">
    <div class="row layout-top-spacing">
        <div class="col-lg-8 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-12"><h4>Sık Sorulan Soru Düzenle</h4></div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">
                    <form action="{{ route('faqs.update', $faq->id) }}" method="POST" id="mainForm">
                        @csrf @method('PUT')

                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <p>Soru <span class="text-danger">*</span></p>
                                    <input type="text" name="question" class="form-control @error('question') is-invalid @enderror"
                                        value="{{ old('question', $faq->question) }}">
                                    @error('question')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <p>Sıra</p>
                                    <input type="number" name="order" class="form-control" value="{{ old('order', $faq->order) }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p>Cevap <span class="text-danger">*</span></p>
                                    <textarea name="answer" class="form-control @error('answer') is-invalid @enderror" rows="6">{{ old('answer', $faq->answer) }}</textarea>
                                    @error('answer')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check form-switch mt-1 mb-3">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" {{ $faq->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">Aktif</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-success btn-lg me-2">Güncelle</button>
                            <a href="{{ route('faqs.index') }}" class="btn btn-secondary btn-lg">İptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-12"><h4>Kayıt Bilgisi</h4></div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">
                    <p class="text-muted mb-1"><strong>Eklenme:</strong> {{ $faq->created_at?->format('d.m.Y H:i') }}</p>
                    <p class="text-muted mb-1"><strong>Güncelleme:</strong> {{ $faq->updated_at?->format('d.m.Y H:i') }}</p>
                    <p class="text-muted mb-0"><strong>Durum:</strong>
                        @if($faq->is_active)
                            <span class="badge badge-success">Aktif</span>
                        @else
                            <span class="badge badge-danger">Pasif</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
