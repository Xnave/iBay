@extends('app')

@section('content')
	<div class="container changer">

		<div class="row slider"></div>

		<div class="row">

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/fashion.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Fashion</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/electronics.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Electronics</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/art.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Art</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/home.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Home</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/sport.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Sport</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/motors.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Motors</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/cell_phones.png') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Cell Phones</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<div class="welcomeImg" style="background-image: url('{{ asset('/images/stamps.jpg') }}')">
						<div class="welcomeEmptyBox"></div>
						<div class="welcomeTitle">Stamps</div>
					</div>
				</a>
			</div>

		</div>

	</div>
@endsection
