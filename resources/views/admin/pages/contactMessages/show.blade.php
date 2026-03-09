@extends('admin.pages.main')
@section('breadcumb', 'Mesaj Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-7 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Mesaj Detayı</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('contactMessages.destroy', $contactMessage) }}" method="post"
                                    id="mainForm" enctype="multipart/form-data">
                                    @method('DELETE')@csrf
                                    <table class="table">
                                        <tbody>
                                            @if (!empty($contactMessage->fullname))
                                                <tr>
                                                    <th>Firma Adı:</th>
                                                    <td><input type="text" disabled value="{{ $contactMessage->fullname }}"
                                                            class="form-control"></td>
                                                </tr>
                                            @endif
                                            @if (!empty($contactMessage->phone))
                                                <tr>
                                                    <th>Telefon:</th>
                                                    <td><input type="text" disabled value="{{ $contactMessage->phone }}"
                                                            class="form-control"></td>
                                                </tr>
                                            @endif
                                            @if (!empty($contactMessage->email))
                                                <tr>
                                                    <th>E-posta:</th>
                                                    <td><input type="text" disabled value="{{ $contactMessage->email }}"
                                                            class="form-control"></td>
                                                </tr>
                                            @endif
                                            @if (!empty($contactMessage->message))
                                                <tr>
                                                    <th>Mesaj:</th>
                                                    <td><textarea class="form-control" disabled
                                                            rows="7">{{ $contactMessage->message }}</textarea></td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <th>Tarih:</th>
                                                <td><input type="text" disabled
                                                        value="{{ $contactMessage->created_at?->format('d.m.Y H:i') }}"
                                                        class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group" style="display:flex; gap:10px">
                                        <a href="{{ route('contactMessages.index') }}" class="btn btn-secondary">Geri
                                            Dön</a>
                                        <button class="btn btn-danger" type="submit">Mesajı Sil</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection