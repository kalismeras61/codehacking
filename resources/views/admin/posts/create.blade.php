@extends('layouts.admin')


@section('content')
	
	<h1>Create Posts</h1>
	
		{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}
			
			<div class="form-group">
				{!! Form::label('Başlık', 'Title') !!}
				{!! Form::text('title',null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('category_id', 'Kategori') !!}
				{!! Form::select('category_id',$cat,null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('photo_id', 'Resim') !!}
				{!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
			</div>
	
			<div class="form-group">
				{!! Form::label('body', 'İçerik') !!}
				{!! Form::textarea('body',null, ['class' => 'form-control', 'rows' =>3]) !!}
			</div>
	
			<div class="form-group">
				{!! Form::submit('Create Post', ['class' => 'btn btn-success']) !!}
			
			</div>
			{!! Form::close() !!}
	
	
	@include('includes.form-error')

@stop