@extends('layouts.admin')

@section('content')
	
	<h1>Kullanıcı Düzenle</h1>
	
	<div class="row">
		
	<div class="col-sm-3">

			
			<img src="{{$user->photo ? $user->photo->path : '/images/400x400.png'}}" class="img-responsive img-rounded" alt="">

	
	</div>
	<div class="col-sm-9">
	
	{!! Form::model($user,['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=> true]) !!}
	<div class="form-group">
		{!! Form::label('photo_id', 'Fotograf') !!}
		{!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
	
	</div>
	<div class="form-group">
		{!! Form::label('name', 'Adı') !!}
		{!! Form::text('name',null, ['class' => 'form-control']) !!}
	
	</div>
	<div class="form-group">
		{!! Form::label('email', 'E-mail adı') !!}
		{!! Form::email('email',null, ['class' => 'form-control']) !!}
	
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Şifreniz') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	
	</div>
	<div class="form-group">
		{!! Form::label('role_id', 'Kullanıcı Rolü') !!}
		{!! Form::select('role_id', $roles ,null, ['class' => 'form-control', 'placeholder' => 'Role Seçiniz...']) !!}
	
	</div>
	<div class="form-group">
		{!! Form::label('is_active', 'Durumu') !!}
		{!! Form::select('is_active', ['0' => 'Pasif', '1' => 'Aktif'] ,null, ['class' => 'form-control' ,'placeholder' => 'Durum Seçiniz...']) !!}
	
	</div>
	
	
	<div class="form-group">
		{!! Form::submit('Kullanıcı Düzenle', ['class' => 'btn btn-primary col-sm-3']) !!}
	
	</div>
	{!! Form::close() !!}
		{!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
		
		<div class="form-group">
			{!! Form::submit('Kullanıcı Sil', ['class' => 'btn btn-danger col-sm-3']) !!}
		
		</div>
		{!! Form::close() !!}
	</div>
		
	</div>
		
	<div class="row">
		@include('includes.form-error')
	
	</div>
	
@stop