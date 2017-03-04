@extends('layouts.admin')


@section('content')
	
	<h1>Posts</h1>
	
	<table class="table table-striped">
		<thead>
		<tr>
			<th>#</th>
			<th>Resim</th>
			<th>Kullanıcı</th>
			<th>Kategori</th>
			<th>Başlık</th>
			<th>İçerik</th>
			<th>Oluşturulma Tarihi </th>
			<th>Güncellenme Tarihi</th>
		
		</tr>
		</thead>
		<tbody>
		@if($posts)
			@foreach($posts as $post)
				<tr>
					<th scope="row">{{$post->id}}</th>
					<td><img  width="50" src="{{$post->photo ? $post->photo->path : '/images/50x50.png'}}" alt=""></td>
					<td>{{$post->user->name}}</td>
					<td>{{$post->category ? $post->category->name : 'Kategori Yok'}}</td>
					<td>{{$post->title}}</td>
					<td>{{$post->body}}</td>
					<td>{{$post->created_at->diffForHumans()}}</td>
					<td>{{$post->updated_at->diffForHumans()}}</td>
				</tr>
			@endforeach
		@endif
		</tbody>
	</table>
	@stop