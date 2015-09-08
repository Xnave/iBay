@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label" for="first_name">First Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="last_name">Last Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="last_name"  id="last_name" value="{{ old('last_name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="email">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email"  id="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="password">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control"   id="password"name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" for="password_confirmation">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation"  id="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-info">
									Register
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
