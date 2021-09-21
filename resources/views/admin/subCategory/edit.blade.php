@extends('admin.layout.forms.edit.index')
@section('action' , "subCategory/$item->id")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.edit.select', ['label' => trans("language.category"),'name'=>'category_id', 'items'=> \App\Models\Category::all()])
    @endsection
@section('submit-button-title' , trans('language.edit'))
