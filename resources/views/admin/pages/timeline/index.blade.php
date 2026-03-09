@extends('admin.pages.main')
@section('breadcumb', 'Timeline Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="text-right">
                        <a href="{{ route('timeline.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th>Yıl</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $key => $event)
                                <tr>
                                    <td>{{ $event->year }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ Str::limit($event->description, 60) }}</td>
                                    <td>
                                        <a href="{{ route('timeline.edit', $event->id) }}"><i style="color: cornflowerblue"
                                                class="far fa-edit fa-2x"></i></a>
                                        <a href="#" onclick="deleteItem({{ $key }})"><i style="color: red"
                                                class="far fa-trash-alt fa-2x"></i></a>
                                        <form id="deleteform{{ $key }}" method="POST"
                                            action="{{ route('timeline.destroy', $event->id) }}">@method('DELETE')@csrf</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Yıl</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection