@extends('admin.layout.forms.edit.index')
@section('action' , "categories/$item->id")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('language.image'),'name'=>'image', 'max'=>'5'])
    @endsection
@section('submit-button-title' , trans('language.edit'))
