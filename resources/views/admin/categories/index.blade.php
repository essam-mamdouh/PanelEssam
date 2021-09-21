@extends('admin.layout.table.index')
@section('page-title',trans('language.categories'))
@section('statistics')
<h1>{{trans('language.categories')}}</h1>
@endsection
@section('thead')
<tr>
    <th>#</th>
    <th>{{trans('language.name_en')}}</th>
    <th>{{trans('language.image')}}</th>
    <th>{{trans('language.register_at')}}</th>
    <th>{{trans('language.settings')}}</th>
</tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name_en}}</td>
            <td><img class="avatar xl rounded-circle img-thumbnail shadow-sm" src="{{ url($item->image)}}"/></td>
            <td>{{$item->created_at}}</td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "categories/$item->id/edit"])
                @includeIf("admin.components.buttons.delete",["message" => "($item->name)" ,"action" => url("admin/categories/$item->id")])

            </td>
        </tr>
    @endforeach
@endsection



