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

{!! Form::model($knowledgevideo, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.knowledgevideo.update', $knowledgevideo->id))) !!}

<div class="form-group">
    {!! Form::label('name', 'Tên video', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name', old('name',$knowledgevideo->name), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('img', 'Ảnh đại diện', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('img') !!}
        {!! Form::hidden('img_w', 4096) !!}
        {!! Form::hidden('img_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('video_src', 'Link video', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('video_src', old('video_src',$knowledgevideo->video_src), array('class'=>'form-control')) !!}
        <p class="help-block">Youtube</p>
    </div>
</div><div class="form-group">
    {!! Form::label('is_feature', 'Đại diện', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('is_feature','') !!}
        {!! Form::checkbox('is_feature', 1, $knowledgevideo->is_feature == 1) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('knowledgecategory_id', 'Thuộc danh mục', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('knowledgecategory_id', $knowledgecategory, old('knowledgecategory_id',$knowledgevideo->knowledgecategory_id), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.knowledgevideo.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection