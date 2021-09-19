@extends('admin.layout.forms.add.index')
@section('action' , "product")
@section('title' , trans('language.add'))
@section('page-title',trans('web.product'))
@section('form-groups')
    @includeIf('admin.components.form.add.text', ['label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.add.text', ['label' => trans('language.name_ar'),'name'=>'name_ar', 'placeholder'=>trans('language.name_ar')])
    @includeIf('admin.components.form.add.file', ['label' => trans('language.image'),'name'=>'image', 'max'=>'5'])
    @includeIf('admin.components.form.add.textarea', ['label' => trans('language.des_en'),'name'=>'des_en', 'placeholder'=>trans('language.des_en')])
    @includeIf('admin.components.form.add.textarea', ['label' => trans('language.des_ar'),'name'=>'des_ar', 'placeholder'=>trans('language.des_ar')])
    @includeIf('admin.components.form.add.select', ['label' => trans("language.category"),'name'=>'category_id', 'items'=> \App\Models\Category::all()])
    @endsection
@section('submit-button-title', trans('web.add'))