@extends('layouts.main')

@section('morescript')
	<script src="{{ asset('js/courses.js') }}"></script>
@endsection

@section('breadcrumb')
	@include('partials.breadcrumb')
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
					<div class="col-md-4 ml-auto">
						{!! Form::open(['url' => 'courses', 'method' => 'get']) !!}
							<div class="input-group input-group-lg">
								<input type="text" class="form-control" name="q" placeholder="Cari Kursus &amp; Tutorial">
								<div class="input-group-append">
									<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="search-attrs mb-4">
							<div class="list-group list-group-flush">
								<h5 class="list-group-item bg-light text-info title-attrs mb-2">Skill Level</h5>
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
								<h5 class="list-group-item bg-light text-info title-attrs mb-2">Topik &amp; Kategori</h5>
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
								<h5 class="list-group-item bg-light text-info title-attrs mb-2">Software &amp; Tools</h5>
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
					</div>
				</div>
				</div>
			</div> 
			{{-- End Container --}}
		</div>
	</div>
@endsection

