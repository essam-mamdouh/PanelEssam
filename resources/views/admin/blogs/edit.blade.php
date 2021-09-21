@extends('admin.layout.forms.edit.index')
@section('action' , "blogs/$item->id")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')
    @includeIf('admin.components.form.edit.text', ['label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.edit.file', ['label' => trans('language.image'),'name'=>'image', 'max'=>'5'])
    @includeIf('admin.components.form.edit.textarea', ['label' => trans('language.des_en'),'name'=>'des_en', 'placeholder'=>trans('language.des_en')])
    @endsection
@section('submit-button-title' , trans('language.edit'))
