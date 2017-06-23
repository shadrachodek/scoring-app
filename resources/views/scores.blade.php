@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">View All Student</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>#</th>
								<th>Student Name</th>
								<th>Score</th>
							</tr>
							</thead>

							@if ($scores)

								@foreach($scores as $score)
									<tbody>
									<tr>
										<th scope=row>1</th>
										<td> {{$score->user->name}}</td>
										<td> {{$score->score}}</td>
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





