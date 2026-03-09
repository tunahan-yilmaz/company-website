@extends('admin.pages.main')
@section('breadcumb', 'Ekip Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="text-right">
                        <a href="{{ route('team.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Ad Soyad</th>
                                <th>Unvan / Görev</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teamMembers as $key => $member)
                                <tr>
                                    <td>
                                        @if($member->image)
                                            <img width="80" height="80" src="/storage/{{ $member->image }}"
                                                style="object-fit:cover;border-radius:50%">
                                        @else
                                            <span class="badge badge-secondary">Görsel Yok</span>
                                        @endif
                                    </td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->role }}</td>
                                    <td>
                                        <a href="{{ route('team.edit', $member->id) }}"><i style="color: cornflowerblue"
                                                class="far fa-edit fa-2x"></i></a>
                                        <a href="#" onclick="deleteItem({{ $key }})"><i style="color: red"
                                                class="far fa-trash-alt fa-2x"></i></a>
                                        <form id="deleteform{{ $key }}" method="POST"
                                            action="{{ route('team.destroy', $member->id) }}">@method('DELETE')@csrf</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Ad Soyad</th>
                                <th>Unvan / Görev</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection