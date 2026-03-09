@extends('admin.pages.main')
@section('breadcumb', 'Ekip Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Ekip Üyesi Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-7">
                                <form action="{{ route('team.store') }}" method="post" id="mainForm"
                                    enctype="multipart/form-data">@csrf

                                    <ul class="nav nav-tabs mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab1" data-toggle="tab" href="#underline-1"
                                                role="tab" aria-selected="true">Kişisel Bilgiler</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tab2" data-toggle="tab" href="#underline-2" role="tab"
                                                aria-selected="false">Sosyal Medya</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="lineTabContent">
                                        <div class="tab-pane fade show active" id="underline-1" role="tabpanel"
                                            aria-labelledby="tab1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Ad Soyad</p>
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            required>
                                                        @error('name')<div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Unvan / Görev</p>
                                                        <input type="text" name="role"
                                                            class="form-control @error('role') is-invalid @enderror"
                                                            required>
                                                        @error('role')<div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Sıra</p>
                                                        <input type="number" name="order" value="0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p>Kısa Biyografi</p>
                                                <textarea class="form-control" name="bio" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="underline-2" role="tabpanel" aria-labelledby="tab2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>LinkedIn URL</p>
                                                        <input type="text" name="linkedin_url" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Twitter URL</p>
                                                        <input type="text" name="twitter_url" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>GitHub URL</p>
                                                        <input type="text" name="github_url" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                <h4>Profil Fotoğrafı (400x400)</h4>
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