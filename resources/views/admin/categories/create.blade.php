@extends('admin.layout.forms.add.index')
@section('action' , "categories")
@section('title' , trans('language.add'))
@section('page-title',trans('web.categories'))
@section('form-groups')
    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('language.image'),'name'=>'image', 'max'=>'5'])
    @endsection
@section('submit-button-title', trans('web.add'))
