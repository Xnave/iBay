@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Create New Product</div>
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

						{!! Form::open(array('action' => array('ProductsController@store'),
                                                  'method' => 'POST', 'class' => 'form-horizontal')) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							{!! Form::label('category', 'Category', ['class' => 'col-md-4 control-label']) !!}

							<div class="col-md-6">
								{!! Form::select('sub_category_id', \App\Category::lists('category_name', 'id'), null /* default value */ ,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Title</label>
							<div class="col-md-6">
								{!! Form::text('title', old('title'), ['id' => 'titleInput', 'class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Price</label>
							<div class="col-md-6">
								{!! Form::text('price', old('price'), ['id' => 'priceInput', 'class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Add ', ['class' => 'btn btn-info']) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
