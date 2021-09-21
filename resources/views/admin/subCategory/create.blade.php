@extends('admin.layout.forms.add.index')
@section('action' , "subCategory")
@section('title' , trans('language.add'))
@section('page-title',trans('web.subCategory'))
@section('form-groups')
    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.add.select', ['label' => trans("language.category"),'name'=>'category_id', 'items'=> \App\Models\Category::all()])
    @endsection
@section('submit-button-title', trans('web.add'))
