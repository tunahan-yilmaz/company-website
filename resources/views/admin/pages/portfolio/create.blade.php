@extends('admin.pages.main')
@section('breadcumb', 'Portfolyo Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Portfolyo Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-7">
                                <form action="{{ route('portfolios.store') }}" method="post" id="mainForm"
                                    enctype="multipart/form-data">@csrf

                                    <ul class="nav nav-tabs mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="underline-tab" data-toggle="tab"
                                                href="#underline-1" role="tab" aria-selected="true">Portfolyo Detayları</a>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Başlık</p>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror" required>
                                                @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kategori</p>
                                                <select name="portfolio_category_id" class="form-control">
                                                    <option value="">Kategori Seçin</option>
                                                    @foreach($categories as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Müşteri / Firma</p>
                                                <input type="text" name="client"
                                                    class="form-control @error('client') is-invalid @enderror">
                                                @error('client')<div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Proje URL</p>
                                                <input type="text" name="project_url" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>Açıklama</p>
                                        <textarea class="summernote" name="description"></textarea>
                                        @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group">
                                        <p>Sıra</p>
                                        <input type="number" name="order" value="0" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <button form="mainForm" type="submit"
                                            class="btn btn-success btn-lg m-3">Kaydet</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-5 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Portfolyo Görseli (900x600)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                    <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                            class="custom-file-container__image-clear"
                                                            title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file" form="mainForm" name="image"
                                                            class="custom-file-container__custom-file__custom-file-input"
                                                            accept="image/*" required>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection