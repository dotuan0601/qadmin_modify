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

{!! Form::model($imageact, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.imageact.update', $imageact->id))) !!}

<div class="form-group">
    {!! Form::label('img_small', 'Ảnh nhỏ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('img_small') !!}
        {!! Form::hidden('img_small_w', 4096) !!}
        {!! Form::hidden('img_small_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('img_large', 'Ảnh to', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('img_large') !!}
        {!! Form::hidden('img_large_w', 4096) !!}
        {!! Form::hidden('img_large_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('img_title', 'Tiêu đề ảnh', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('img_title', old('img_title',$imageact->img_title), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('is_feature', 'Đại diện', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('is_feature','') !!}
        {!! Form::checkbox('is_feature', 1, $imageact->is_feature == 1) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.imageact.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection