@extends('admin.pages.main')
@section('breadcumb', 'Portfolyo Kategori Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Kategori Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('portfolio-categories.update', $portfolioCategory->id) }}"
                                    method="post" id="mainForm" enctype="multipart/form-data">@csrf @method('put')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kategori Adı</p>
                                                <input type="text" name="name" value="{{ $portfolioCategory->name }}"
                                                    class="form-control @error('name') is-invalid @enderror" required>
                                                @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Slug</p>
                                                <input type="text" name="slug" value="{{ $portfolioCategory->slug }}"
                                                    class="form-control @error('slug') is-invalid @enderror">
                                                @error('slug')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order"
                                                    value="{{ $portfolioCategory->order ?? 0 }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-12 col-12">
                                <button form="mainForm" type="submit"
                                    class="btn btn-success btn-lg m-3 w-100">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection