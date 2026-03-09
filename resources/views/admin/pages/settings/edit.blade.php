@extends('admin.pages.main')
@section('title', 'Site Ayarları')
@section('content')
    <div class="page-header">
        <h4 class="mt-2 mb-4"><i class="fas fa-cog mr-2"></i> Site Ayarları</h4>
    </div>
    <div class="row layout-top-spacing">
        <div class="col-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')

                        <ul class="nav nav-tabs mb-4" id="settingsTabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-site">Site
                                    Bilgileri</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-contact">İletişim</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-social">Sosyal Medya</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-logo">Logo & Favicon</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            {{-- Site Bilgileri --}}
                            <div id="tab-site" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label>Site Adı</label><input type="text"
                                                name="site_name" class="form-control"
                                                value="{{ old('site_name', $settings->site_name) }}"
                                                placeholder="DBS Software"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label>Site Başlık (SEO Title)</label><input
                                                type="text" name="site_title" class="form-control"
                                                value="{{ old('site_title', $settings->site_title) }}"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3"><label>Meta Açıklama</label><textarea
                                                name="meta_description" class="form-control"
                                                rows="3">{{ old('meta_description', $settings->meta_description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3"><label>Kısa Hakkımızda (Footer vs
                                                için)</label><textarea name="mini_about" class="form-control"
                                                rows="3">{{ old('mini_about', $settings->mini_about) }}</textarea></div>
                                    </div>
                                </div>
                            </div>

                            {{-- İletişim --}}
                            <div id="tab-contact" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label>Telefon</label><input type="text" name="phone"
                                                class="form-control" value="{{ old('phone', $settings->phone) }}"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label>WhatsApp</label><input type="text"
                                                name="whatsapp" class="form-control"
                                                value="{{ old('whatsapp', $settings->whatsapp) }}"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label>E-Posta</label><input type="email" name="email"
                                                class="form-control" value="{{ old('email', $settings->email) }}"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3"><label>Adres</label><textarea name="address"
                                                class="form-control"
                                                rows="2">{{ old('address', $settings->address) }}</textarea></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3"><label>Google Maps URL</label><input type="text"
                                                name="map_url" class="form-control"
                                                value="{{ old('map_url', $settings->map_url) }}"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3"><label>Google Maps Iframe Embed Kodu</label><textarea
                                                name="map_frame" class="form-control"
                                                rows="4">{{ old('map_frame', $settings->map_frame) }}</textarea></div>
                                    </div>
                                </div>
                            </div>

                            {{-- Sosyal Medya --}}
                            <div id="tab-social" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label><i class="fab fa-facebook mr-1"></i>
                                                Facebook</label><input type="url" name="facebook" class="form-control"
                                                value="{{ old('facebook', $settings->facebook) }}"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label><i class="fab fa-twitter mr-1"></i> Twitter /
                                                X</label><input type="url" name="twitter" class="form-control"
                                                value="{{ old('twitter', $settings->twitter) }}"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label><i class="fab fa-instagram mr-1"></i>
                                                Instagram</label><input type="url" name="instagram" class="form-control"
                                                value="{{ old('instagram', $settings->instagram) }}"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label><i class="fab fa-linkedin mr-1"></i>
                                                LinkedIn</label><input type="url" name="linkedin" class="form-control"
                                                value="{{ old('linkedin', $settings->linkedin) }}"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3"><label><i class="fab fa-youtube mr-1"></i>
                                                YouTube</label><input type="url" name="youtube" class="form-control"
                                                value="{{ old('youtube', $settings->youtube) }}"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- Logo & Favicon --}}
                            <div id="tab-logo" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Logo (Açık Tema)</label>
                                            @if($settings->logo)
                                                <div class="mb-2"><img src="{{ asset('storage/' . $settings->logo) }}" alt="logo"
                                                        style="max-height:60px;background:#1a1a2e;padding:8px;border-radius:6px;">
                                            </div>@endif
                                            <div class="custom-file-container" data-upload="logoUpload">
                                                <label>Yükle <a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Temizle">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="logo"
                                                        class="custom-file-container__custom-file__custom-file-input"
                                                        accept="image/*">
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Logo Koyu (Dark Tema)</label>
                                            @if($settings->logo_dark)
                                                <div class="mb-2"><img src="{{ asset('storage/' . $settings->logo_dark) }}"
                                                        alt="logo dark"
                                                        style="max-height:60px;background:#fff;padding:8px;border-radius:6px;">
                                            </div>@endif
                                            <div class="custom-file-container" data-upload="logoDarkUpload">
                                                <label>Yükle <a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Temizle">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="logo_dark"
                                                        class="custom-file-container__custom-file__custom-file-input"
                                                        accept="image/*">
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label>Favicon</label>
                                            @if($settings->favicon)
                                                <div class="mb-2"><img src="{{ asset('storage/' . $settings->favicon) }}"
                                            alt="favicon" style="max-height:32px;"></div>@endif
                                            <div class="custom-file-container" data-upload="faviconUpload">
                                                <label>Yükle <a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Temizle">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="favicon"
                                                        class="custom-file-container__custom-file__custom-file-input"
                                                        accept="image/*">
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
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

                        <hr>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection