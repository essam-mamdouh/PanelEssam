@extends('admin.layout.table.index')
@section('page-title',trans('language.subCategory'))
@section('statistics')
<h1>{{trans('language.subCategory')}}</h1>
@endsection
@section('thead')
<tr>
    <th>#</th>
    <th>{{trans('language.name_en')}}</th>
    <th>{{trans('language.category')}}</th>
    <th>{{trans('language.register_at')}}</th>
    <th>{{trans('language.settings')}}</th>
</tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name_en}}</td>
            <td>{{$item->category->name_en}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "subCategory/$item->id/edit"])
                @includeIf("admin.components.buttons.delete",["message" => "($item->name)" ,"action" => url("admin/subCategory/$item->id")])

            </td>
        </tr>
    @endforeach
@endsection



