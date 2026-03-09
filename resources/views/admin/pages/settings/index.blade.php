@extends('admin.pages.main')
@section('breadcumb', 'Site Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Genel Site Ayarları</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('settings.update', $settings->id) }}" method="post" id="mainForm"
                                    enctype="multipart/form-data">@csrf @method('put')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="underline-tab" data-toggle="tab"
                                                href="#underline-1" role="tab" aria-controls="underline-1"
                                                aria-selected="true">Genel Bilgiler</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="underline-tab2" data-toggle="tab" href="#underline-2"
                                                role="tab" aria-controls="underline-2" aria-selected="false">SEO</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="lineTabContent-3">
                                        <div class="tab-pane fade show active" id="underline-1" role="tabpanel"
                                            aria-labelledby="underline-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Site Adı</p>
                                                        <input type="text" name="site_name"
                                                            class="form-control @error('site_name') is-invalid @enderror"
                                                            value="{{ $settings->site_name }}">
                                                        @error('site_name')<div class="alert alert-danger">{{ $message }}
                                                        </div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Telefon</p>
                                                        <input type="text" name="phone"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            value="{{ $settings->phone }}">
                                                        @error('phone')<div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>WhatsApp</p>
                                                        <input type="text" name="whatsapp"
                                                            class="form-control @error('whatsapp') is-invalid @enderror"
                                                            value="{{ $settings->whatsapp }}">
                                                        @error('whatsapp')<div class="alert alert-danger">{{ $message }}
                                                        </div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>E-Posta</p>
                                                        <input type="text" name="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            value="{{ $settings->email }}">
                                                        @error('email')<div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Adres</p>
                                                        <input type="text" name="address"
                                                            class="form-control @error('address') is-invalid @enderror"
                                                            value="{{ $settings->address }}">
                                                        @error('address')<div class="alert alert-danger">{{ $message }}
                                                        </div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Google Maps Linki</p>
                                                        <input type="text" name="map_url"
                                                            class="form-control @error('map_url') is-invalid @enderror"
                                                            value="{{ $settings->map_url }}">
                                                        @error('map_url')<div class="alert alert-danger">{{ $message }}
                                                        </div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Google Maps Yerleştirme Linki</p>
                                                        <input type="text" name="map_frame"
                                                            class="form-control @error('map_frame') is-invalid @enderror"
                                                            value="{{ $settings->map_frame }}">
                                                        @error('map_frame')<div class="alert alert-danger">{{ $message }}
                                                        </div>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Facebook Link</p>
                                                        <input type="text" name="facebook"
                                                            class="form-control @error('facebook') is-invalid @enderror"
                                                            value="{{ $settings->facebook }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Twitter Link</p>
                                                        <input type="text" name="twitter"
                                                            class="form-control @error('twitter') is-invalid @enderror"
                                                            value="{{ $settings->twitter }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>Instagram Link</p>
                                                        <input type="text" name="instagram"
                                                            class="form-control @error('instagram') is-invalid @enderror"
                                                            value="{{ $settings->instagram }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>LinkedIn Link</p>
                                                        <input type="text" name="linkedin"
                                                            class="form-control @error('linkedin') is-invalid @enderror"
                                                            value="{{ $settings->linkedin }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>YouTube Link</p>
                                                        <input type="text" name="youtube"
                                                            class="form-control @error('youtube') is-invalid @enderror"
                                                            value="{{ $settings->youtube }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p>Mini Hakkımızda</p>
                                                <textarea name="mini_about" class="form-control" cols="15"
                                                    rows="5">{{ $settings->mini_about }}</textarea>
                                                @error('mini_about')<div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="underline-2" role="tabpanel"
                                            aria-labelledby="underline-tab2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>Site Başlığı (Title Tag)</p>
                                                        <input type="text" name="site_title" class="form-control"
                                                            value="{{ $settings->site_title }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p>Meta Açıklaması</p>
                                                        <textarea name="meta_description" class="form-control"
                                                            rows="4">{{ $settings->meta_description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-6 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Site Logo (700x500)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                @if($settings->logo)
                                                    <p>Mevcut Logo:</p>
                                                    <img src="/storage/{{ $settings->logo }}"
                                                        style="max-height:80px;margin-bottom:15px">
                                                @endif
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                    <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                            class="custom-file-container__image-clear"
                                                            title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file" form="mainForm" name="logo"
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

                            <div class="col-lg-6 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Site Siyah Logo (700x500)</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                @if($settings->logo_black)
                                                    <p>Mevcut Siyah Logo:</p>
                                                    <img src="/storage/{{ $settings->logo_black }}"
                                                        style="max-height:80px;margin-bottom:15px">
                                                @endif
                                                <div class="custom-file-container" data-upload-id="mySecondImage">
                                                    <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                            class="custom-file-container__image-clear"
                                                            title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file">
                                                        <input type="file" form="mainForm" name="logo_black"
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

                            <div class="col-lg-12 col-12" style="align-items: end; justify-content: end; display: flex">
                                <button form="mainForm" type="submit"
                                    class="btn btn-success btn-lg m-3 w-100">Güncelle</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection