<h4 class="mb-3" id="top-courses">Top Video Kursus</h4>
<div class="row">
	<div class="col-md-12 d-flex flex-wrap flex-row justify-content-between">
		<?php for ($i = 0; $i < 8; $i++) { ?>
			<div class="card post-container mb-3" style="width: 260px">
				<img class="post-thumb" src="assets/thumbnail<?php echo mt_rand(1, 3) ?>.jpg" alt="">
				<div class="card-body d-flex flex-column justify-content-between">
					<?php 
						$title = [
							'Membuat React Native Apps &amp; Laravel', 
							'Belajar NodeJS Basic', 
							'Responsive Website dengan Bootstrap'
						] 
					?>
					<a href="" class="video-title-2 text-dark mb-2"><?php echo $title[mt_rand(0, 2)] ?></a>
					<p class="post-attrs mb-2">
						<span class="mr-2">5 Lessons</span>
						<span>45m</span>
					</p>
				</div>
				<div class="card-footer bg-white py-3" style="width: 260px">
					<a href="" class="btn btn-success btn-block">Mulai Belajar</a>
				</div>
			</div>
		<?php } ?>
		<div style="width: 260px"></div>
		<div style="width: 260px"></div>
	</div>
</div>
<div class="d-flex justify-content-center align-items-center mt-3">
	<a href="/?page=courses" class="btn btn-secondary btn-lg text-white">Lihat Semua Kursus</a>
</div>

