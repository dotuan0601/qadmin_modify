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

{!! Form::model($productdetail, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.productdetail.update', $productdetail->id))) !!}

<div class="form-group">
    {!! Form::label('products_id', 'Thuộc sản phẩm', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('products_id', $products, old('products_id',$productdetail->products_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ingredient', 'Thành phần', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('ingredient', old('ingredient',$productdetail->ingredient), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('main_part', 'Thành phần chính', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('main_part', old('main_part',$productdetail->main_part), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('instruction', 'Hướng dẫn sử dụng', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('instruction', old('instruction',$productdetail->instruction), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.productdetail.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection