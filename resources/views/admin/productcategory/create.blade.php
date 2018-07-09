@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('files' => true, 'route' => config('quickadmin.route').'.productcategory.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('name', 'Tên danh mục', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('img', 'Ảnh đại diện', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('img') !!}
        {!! Form::hidden('img_w', 4096) !!}
        {!! Form::hidden('img_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('is_home_page', 'Đặt ở trang chủ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('is_home_page','') !!}
        {!! Form::checkbox('is_home_page', 1, false) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('status', 'Trạng thái', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('status','') !!}
        {!! Form::checkbox('status', 1, true) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('frmenu_id', 'Thuộc menu sản phẩm', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('frmenu_id', $frmenu, old('frmenu_id'), array('class'=>'form-control')) !!}
        <p class="help-block">(chỉ chọn menu con của menu Sản phẩm)</p>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection