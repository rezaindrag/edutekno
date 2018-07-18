@extends('layouts.main')

@section('morescript')
	<script src="{{ asset('js/courses.js') }}"></script>
@endsection

@section('header')
	<div class="container-fluid py-4 bg-secondary">
		<div class="container">
			<h3 class="text-light m-0">Free Courses</h3>
		</div>
	</div>
@endsection

@section('content')
	<div class="container-fluid py-4 content">
		<div class="container pages">
			{{-- Start Container --}}
			<div class="row courses">
				<div class="col-md-12">
					<div class="row mb-5 mt-3">
						<div class="col-md-4 d-flex align-items-center">
							<h3 class="m-0 p-0">Total 23 item ditemukan</h3>
						</div>
						<div class="col-md-6 ml-auto">
							{!! Form::open(['url' => 'courses', 'method' => 'get']) !!}
								<div class="input-group input-group-lg search-input-2">
									<input type="text" class="form-control bg-white" placeholder="Apa yang ingin anda pelajari?" />
									<div class="input-group-append">
										<button class="btn btn-outline-secondary bg-white" type="button">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="search-attrs mb-4">
								<div class="list-group list-group-flush">
									<h5 class="list-group-item bg-light text-secondary title-attrs mb-2">Level</h5>
									{{-- Level --}}
									@foreach($skillLevels as $level)
										<div class="list-group-item list-search-attrs d-flex flex-row align-items-center mb-1">
											<input type="checkbox" id="{{ 'level'.$level->id }}" class="mr-2 list-levels" data-value={{ $level->slug }}>
											<label for="{{ 'level'.$level->id }}" class="m-0">{{ ucfirst($level->name) }}</label>
										</div>
									@endforeach
									{{-- Level --}}
								</div>
							</div>
							<div class="search-attrs mb-4">
								<div class="list-group list-group-flush">
									<h5 class="list-group-item bg-light text-secondary title-attrs mb-2">Topik</h5>
									{{-- Topik --}}
									@foreach($topics as $topic)
										<div class="list-group-item list-search-attrs d-flex flex-row align-items-center mb-1">
											<input type="checkbox" id="{{ 'topic'.$topic->id }}" class="mr-2 list-topics" data-value={{ $topic->slug }}>
											<label for="{{ 'topic'.$topic->id }}" class="m-0">{{ $topic->name }}</label>
										</div>
									@endforeach
									{{-- Topik --}}
								</div>
							</div>
							<div class="search-attrs mb-4">
								<ul class="list-group list-group-flush">
									<h5 class="list-group-item bg-light text-secondary title-attrs mb-2">Software</h5>
									{{-- Software --}}
									@foreach($softwares as $software)
										<div class="list-group-item list-search-attrs d-flex flex-row align-items-center mb-1">
											<input type="checkbox" id="{{ 'software'.$software->id }}" class="mr-2 list-softwares" data-value={{ $software->slug }}>
											<label for="{{ 'software'.$software->id }}" class="m-0">{{ $software->name }}</label>
										</div>
									@endforeach
									{{-- Software --}}
								</ul>
							</div>
						</div>
						<div class="col-md-9">
							<div id="courses" class="d-flex flex-wrap flex-row justify-content-between"></div>
							<div class="d-flex justify-content-center">
								<a href="" class="btn btn-link btn-lg px-3">Load More...</a>
							</div>
						</div>
					</div>
				</div>
			</div> 
			{{-- End Container --}}
		</div>
	</div>
@endsection

