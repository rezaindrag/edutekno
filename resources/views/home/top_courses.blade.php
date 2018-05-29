<div class="container-fluid content bg-light py-4">
	<div class="container home">
		<h4 class="mb-4 section-header text-secondary" id="top-courses">Kursus Terbaru &amp; Popular</h4>
		<div class="row">
			<div class="col-md-12 d-flex flex-wrap flex-row justify-content-between">
				@foreach ($courses as $course)
					<div onclick="window.location.href='{{ url($course->slug) }}'" class="card post-container mb-3" style="width: 266px">
						<img class="post-thumb" src="{{ $course->banner }}" alt="">
						<div class="card-body d-flex flex-column justify-content-between">
							<span class="course-title text-dark mb-2">{{ $course->title }}</span>
							<p class="post-attrs mb-2">
								<span class="mr-2">{{ $course->total_lessons }} Lessons</span>
								<span>{{ fmt_duration($course->total_duration) }}</span>
							</p>
						</div>
					</div>
				@endforeach
				<div style="width: 266px"></div>
				<div style="width: 266px"></div>
			</div>
		</div>
		<div class="d-flex justify-content-start align-items-start">
			<a href="/?page=courses" class="text-success">Lihat Semua Kursus <i class="fa fa-angle-right" style="font-size: 13px"></i></a>
		</div>
	</div>
</div>

