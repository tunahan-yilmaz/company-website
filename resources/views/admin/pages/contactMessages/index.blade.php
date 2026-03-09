@extends('admin.pages.main')
@section('breadcumb', 'İletişim Mesajları Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th class="d-none">#</th>
                                <th>Firma Adı</th>
                                <th>E-Posta</th>
                                <th>Telefon</th>
                                <th>Tarih</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contactMessages as $key => $message)
                                <tr>
                                    <td class="d-none">{{ $key + 1 }}</td>
                                    <td>{{ $message->fullname }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->phone }}</td>
                                    <td>{{ $message->created_at?->format('d.m.Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('contactMessages.show', $message) }}"><i style="color: cornflowerblue"
                                                class="far fa-edit fa-2x"></i></a>
                                        <a href="#" onclick="deleteItem({{ $key }})"><i style="color: red"
                                                class="far fa-trash-alt fa-2x"></i></a>
                                        <form id="deleteform{{ $key }}" method="POST"
                                            action="{{ route('contactMessages.destroy', $message) }}">@method('DELETE')@csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="d-none">#</th>
                                <th>Firma Adı</th>
                                <th>E-Posta</th>
                                <th>Telefon</th>
                                <th>Tarih</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection