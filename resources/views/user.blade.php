@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">All User</div>
					<div class="panel-body">
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

							@if ($users)

								@foreach($users as $user)
									<tbody>
									<tr>
										<th scope=row>1</th>
										<td> {{$user->name}}</td>
										<td> {{$user->username}}</td>
										<td>{{ $user->is_admin == 0 ? "Student" : "Admin" }}</td>
										<td>Make Admin</td>
									</tr>
									</tbody>
								@endforeach
							@else

								<p> No Infomation </p>

						@endif
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection





