@extends("layouts.admin")

@section('content')
	<h1>Users</h1>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>İsim</th>
	      <th>E-mail </th>
	      <th>Rolü</th>
	      <th>Oluşturulma Tarihi </th>
	      <th>Güncellenme Tarihi</th>
	      <th>Durum </th>

	    </tr>
	  </thead>
	  <tbody>
	  @if($users)
	  @foreach($users as $user)
	    <tr>
	      <th scope="row">{{$user->id}}</th>
	      <td>{{$user->name}}</td>
	      <td>{{$user->email}}</td>
	      <td>{{$user->role->name}}</td>
	      <td>{{$user->created_at->diffForHumans()}}</td>
	      <td>{{$user->updated_at->diffForHumans()}}</td>
	      <td>{{$user->is_active== 1 ? 'Aktif' : 'Aktif değil'}}</td>
	    </tr>
	  @endforeach
	  @endif
	  </tbody>
	</table>
	@stop