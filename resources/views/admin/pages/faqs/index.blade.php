@extends('admin.pages.main')
@section('breadcumb', 'SSS Yönetimi')
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    @if(session('success'))
                        <div class="alert alert-success m-3">{{ session('success') }}</div>
                    @endif
                    <div class="text-right">
                        <a href="{{ route('faqs.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Soru</th>
                                <th>Sıra</th>
                                <th>Aktif</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $key => $faq)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ Str::limit($faq->question, 80) }}</td>
                                    <td>{{ $faq->order }}</td>
                                    <td>
                                        @if($faq->is_active)
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-danger">Pasif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('faqs.edit', $faq->id) }}"><i style="color: cornflowerblue" class="far fa-edit fa-2x"></i></a>
                                        <a href="#" onclick="deleteItem({{ $key }})"><i style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                        <form id="deleteform{{ $key }}" method="POST" action="{{ route('faqs.destroy', $faq->id) }}">@method('DELETE')@csrf</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Soru</th>
                                <th>Sıra</th>
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
