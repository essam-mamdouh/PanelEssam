@extends('admin.layout.table.index')
@section('page-title',trans('language.contact'))
@section('statistics')
<h1>{{trans('language.contact')}}</h1>
@endsection
@section('thead')
<tr>
    <th>#</th>
    <th>{{trans('language.name')}}</th>
    <th>{{trans('language.email')}}</th>
    <th>{{trans('language.messages')}}</th>
    <th>{{trans('language.register_at')}}</th>
    <th>{{trans('language.settings')}}</th>
</tr>
@endsection
@section('tbody')
    @foreach($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->message}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                @includeIf("admin.components.buttons.delete",["message" => "($item->name)" ,"action" => url("admin/contact/$item->id")])

            </td>
        </tr>
    @endforeach
@endsection



