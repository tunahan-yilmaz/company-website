@extends('admin.pages.main')
@section('breadcumb', 'Hakkımızda Yönetimi')
@section('content')

    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Hakkımızda Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('about.update', $about->id) }}" method="post" id="mainForm"
                                    enctype="multipart/form-data">@csrf @method('put')
                                    <div class="form-group">
                                        <p>Hakkımızda Başlığı</p>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ $about->title }}" required>
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <p>Hakkımızda Yazısı İçeriği</p>
                                        <textarea class="summernote" name="about_text">{{ $about->about_text }}</textarea>
                                        @error('about_text')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </form>
                            </div>

                            <div class="col-6 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Hakkımızda Görseli 1 (600x830)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                @if($about->image_1)
                                                    <p>Mevcut Görsel:</p>
                                                    <img src="/storage/{{ $about->image_1 }}"
                                                        style="width:100%;max-height:200px;object-fit:cover;margin-bottom:15px">
                                                @endif
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                    <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                            class="custom-file-container__image-clear"
                                                            title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file" form="mainForm" name="image_1"
                                                            class="custom-file-container__custom-file__custom-file-input"
                                                            accept="image/*">
                                                        <span
                                                            class="custom-file-container__custom-file__custom-file-control"></span>
                                                    </label>
                                                    <div class="custom-file-container__image-preview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Hakkımızda Görseli 2 (600x700)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                @if($about->image_2)
                                                    <p>Mevcut Görsel:</p>
                                                    <img src="/storage/{{ $about->image_2 }}"
                                                        style="width:100%;max-height:200px;object-fit:cover;margin-bottom:15px">
                                                @endif
                                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                                    <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                            class="custom-file-container__image-clear"
                                                            title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file" form="mainForm" name="image_2"
                                                            class="custom-file-container__custom-file__custom-file-input"
                                                            accept="image/*">
                                                        <span
                                                            class="custom-file-container__custom-file__custom-file-control"></span>
                                                    </label>
                                                    <div class="custom-file-container__image-preview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-12 text-right">
                            <button form="mainForm" type="submit" class="btn btn-success btn-lg w-100">Değişiklikleri
                                Kaydet</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection