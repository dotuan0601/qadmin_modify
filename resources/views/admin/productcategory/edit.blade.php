@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($productcategory, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.productcategory.update', $productcategory->id))) !!}

<div class="form-group">
    {!! Form::label('name', 'Tên danh mục', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$productcategory->name), array('class'=>'form-control')) !!}
        
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
        {!! Form::checkbox('is_home_page', 1, $productcategory->is_home_page == 1) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('status', 'Trạng thái', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('status','') !!}
        {!! Form::checkbox('status', 1, $productcategory->status == 1) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('frmenu_id', 'Thuộc menu sản phẩm', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('frmenu_id', $frmenu, old('frmenu_id',$productcategory->frmenu_id), array('class'=>'form-control')) !!}
        <p class="help-block">(chỉ chọn menu con của menu Sản phẩm)</p>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.productcategory.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection