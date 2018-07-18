<div class="container-fluid content bg-light py-5">
	<div class="container home">
        <div class="d-flex flex-column align-items-center mb-3">
			<h4 class="mb-3 section-header text-secondary" id="top-courses">Free Courses</h4>
            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nesciunt exercitationem quisquam minus.</p>
        </div>
		<div class="row mb-3">
			<div class="col-md-12 d-flex flex-wrap flex-row justify-content-between">
				@foreach ($courses as $course)
					<div class="card post-container mb-3" style="width: 266px;">
						<img class="post-thumb" src="{{ $course->banner }}" alt="">
						<div class="card-body d-flex flex-column justify-content-between">
							<a href="" class="course-title text-dark mb-2">{{ $course->title }}</a>
							<p class="post-attrs mb-3"><span class="mr-2">15 Lessons</span><span></span></p>
						</div>
					</div>
				@endforeach
				<div style="width: 266px"></div>
				<div style="width: 266px"></div>
			</div>
		</div>
        <div class="d-flex justify-content-center">
			<a href="{{ url('free-courses') }}" class="btn btn-outline-primary rounded px-4">Lihat Semua</a>
        </div>
	</div>
</div>

