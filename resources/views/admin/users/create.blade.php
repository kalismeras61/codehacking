@extends('layouts.admin')

@section('content')
	
	<h1>Kullanıcı Oluştur</h1>
	
	{!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=> true]) !!}
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
			{!! Form::submit('Kullanıcı Oluştur', ['class' => 'btn btn-success']) !!}
		
		</div>
		{!! Form::close() !!}
		
		@include('includes.form-error')

@stop