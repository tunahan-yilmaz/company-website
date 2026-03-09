@extends('admin.pages.main')
@section('breadcumb', 'Timeline Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Timeline Olayı Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('timeline.store') }}" method="post" id="mainForm"
                                    enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Yıl</p>
                                                <input type="text" name="year"
                                                    class="form-control @error('year') is-invalid @enderror"
                                                    placeholder="Örn: 2024" required>
                                                @error('year')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Başlık</p>
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror" required>
                                                @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Sıra</p>
                                                <input type="number" name="order" value="0" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p>Açıklama</p>
                                        <textarea class="form-control" name="description" rows="4" required></textarea>
                                        @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
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