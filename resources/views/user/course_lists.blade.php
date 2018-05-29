<div class="row filter">
	<div class="col-md-12 d-flex flex-row justify-content-between">
		<div class="d-flex flex-row justify-content-between">
			<div class="mr-3">
				<span class="title-attrs text-secondary">Urutkan</span>
				<div class="dropdown show">
					<a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Terakhir Diakses
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#">A <i class="fa fa-arrow-right"></i> Z</a>
						<a class="dropdown-item" href="#">Z <i class="fa fa-arrow-right"></i> A</a>
						<a class="dropdown-item" href="#">Belum dimulai <i class="fa fa-arrow-right"></i> Selesai</a>
						<a class="dropdown-item" href="#">Selesai <i class="fa fa-arrow-right"></i> Belum dimulai</a>
					</div>
				</div>
			</div>
			<div class="mr-2">
				<span class="title-attrs text-secondary">Filter</span>
				<div class="d-flex flex-row justify-content-between">
					<div class="dropdown show mr-2">
						<a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Kategori
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">Backend</a>
							<a class="dropdown-item" href="#">Frontend</a>
							<a class="dropdown-item" href="#">Mobile</a>
						</div>
					</div>
					<div class="dropdown show">
						<a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Progres
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">Selesai</a>
							<a class="dropdown-item" href="#">Dalam progres</a>
							<a class="dropdown-item" href="#">Belum dimulai</a>
						</div>
					</div>
				</div>
			</div>
			<a href="" class="btn btn-link align-self-end">Reset</a>
		</div>
		<div class="d-flex align-self-end">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Cari" aria-label="Cari" aria-describedby="basic-addon2" style="font-size: 14px">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<div class="row courses">
	<div class="col-md-12">
		<div class="mx-0 mb-3 p-0">
			<h5 class="m-0 p-0">Semua Kursus</h5>
		</div>
		<div class="d-flex flex-wrap flex-row justify-content-between">
			<?php for ($i = 0; $i < 11; $i++) { ?>
				<div class="card post-container mb-3" style="width: 260px">
					<img class="post-thumb" src="http://via.placeholder.com/258x180" alt="">
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
							<span>45mm</span>
						</p>
					</div>
					<div class="card-footer bg-white py-3" style="width: 260px">
						<a href="/?play" class="btn btn-success btn-block">Mulai Belajar <i class="fa fa-arrow-right ml-1" style="font-size: 13px"></i></a>
					</div>
				</div>
			<?php } ?>
			<div style="width: 260px"></div>
			<div style="width: 260px"></div>
		</div>
	</div>
</div>