@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">All User</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST" action="{{ route('generate_score') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
								<label for="subject" class="col-md-4 control-label">Subject name</label>

								<div class="col-md-6">
									<input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>

									@if ($errors->has('subject'))
										<span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary" name="gen">
										Generate
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection





