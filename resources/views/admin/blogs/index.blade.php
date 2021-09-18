@extends('admin.layout.table.index')
@section('page-title',trans('language.blogs'))
@section('statistics')
<h1>{{trans('language.blogs')}}</h1>
@endsection
@section('thead')
<tr>
    <th>#</th>
    <th>{{trans('language.name_ar')}}</th>
    <th>{{trans('language.name_en')}}</th>
    <th>{{trans('language.image')}}</th>
    <th>{{trans('language.description_ar')}}</th>
    <th>{{trans('language.description_en')}}</th>
    <th>{{trans('language.register_at')}}</th>
    <th>{{trans('language.settings')}}</th>
</tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name_ar}}</td>
            <td>{{$item->name_en}}</td>
            <td><img class="avatar xl rounded-circle img-thumbnail shadow-sm" src="{{ url($item->image)}}"/></td>
            <td>{{$item->des_ar}}</td>
            <td>{{$item->des_en}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                @includeIf("admin.components.buttons.edit" , ["href" => "blogs/$item->id/edit"])
                @includeIf("admin.components.buttons.delete",["message" => "($item->name)" ,"action" => url("admin/blogs/$item->id")])

            </td>
        </tr>
    @endforeach
@endsection



