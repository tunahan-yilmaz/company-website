@extends('admin.pages.main')
@section('breadcumb', 'Portfolyo Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="text-right">
                        <a href="{{ route('portfolios.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th>Görsel</th>
                                <th>Proje Başlığı</th>
                                <th>Müşteri</th>
                                <th>Tarih</th>
                                <th>Aktif</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $key => $portfolio)
                                <tr>
                                    <td>
                                        @if($portfolio->image)
                                            <img width="100" height="70" src="/storage/{{ $portfolio->image }}"
                                                style="object-fit:cover;border-radius:4px;">
                                        @else
                                            <span class="badge badge-secondary">Görsel Yok</span>
                                        @endif
                                    </td>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->client_name ?? '-' }}</td>
                                    <td>{{ $portfolio->date ?? $portfolio->created_at?->format('d.m.Y') }}</td>
                                    <td>
                                        @if($portfolio->is_active)
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-danger">Pasif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('portfolios.edit', $portfolio->id) }}"><i
                                                style="color: cornflowerblue" class="far fa-edit fa-2x"></i></a>
                                        <a href="#" onclick="deleteItem({{ $key }})"><i style="color: red"
                                                class="far fa-trash-alt fa-2x"></i></a>
                                        <form id="deleteform{{ $key }}" method="POST"
                                            action="{{ route('portfolios.destroy', $portfolio->id) }}">@method('DELETE')@csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Görsel</th>
                                <th>Proje Başlığı</th>
                                <th>Müşteri</th>
                                <th>Tarih</th>
                                <th>Aktif</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection