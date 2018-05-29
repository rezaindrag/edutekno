@extends('layouts.main')

@section('breadcrumb')
	@include('partials.breadcrumb')
@endsection

@section('content')
	<div class="container-fluid my-5">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="list-group list-group-flush nav-user mb-3">
						<a href="" class="list-group-item border-0 bg-success text-white">Kursus</a>
						<a href="" class="list-group-item border-0 bg-light text-secondary">Profil</a>
						<a href="" class="list-group-item border-0 bg-light text-secondary">Akun</a>
						<a href="" class="list-group-item border-0 bg-light text-danger">Logout</a>
					</div>
				</div>
				<div class="col-9">
					@include('user.course_lists')
				</div>
			</div>
		</div>
	</div>
@endsection