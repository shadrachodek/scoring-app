
    @extends('layout.master')

    @section('title', 'Home Page')

    @section('content')
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Username</th>
			<th>Role</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@if ($users)
		
		@foreach($users as $user)
		<tr>
			<th scope=row>1</th>
			<td <a href="user.php?id={{$user->id}}">{{$user->name}}</td>
			<td <a href="user.php?id={{$user->id}}">{{$user->username}}</td>
			<td>{{ $user->is_admin == 0 ? "Student" : "Admin" }}</td>
			<td>Make Admin</td>
		</tr>
		@endforeach
	@else

		<p> No Infomation </p>

	@endif

	</tbody> 


@endsection
