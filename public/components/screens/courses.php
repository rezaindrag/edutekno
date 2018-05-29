<div class="row courses">
	<div class="col-md-3">
		<div class="search-attrs">
			<ul class="list-group list-group-flush mb-4">
				<li class="list-group-item bg-light text-secondary pb-1 title-attrs">Video</li>
				<li class="list-group-item">
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customCheck17" name="video" checked="">
						<label class="custom-control-label ml-1" for="customCheck17">Free</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customCheck18" name="video">
						<label class="custom-control-label ml-1" for="customCheck18">Premium</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customCheck12" name="video">
						<label class="custom-control-label ml-1" for="customCheck12">Semua</label>
					</div>
				</li>
			</ul>
		</div>
		<div class="search-attrs">
			<ul class="list-group list-group-flush mb-4">
				<li class="list-group-item bg-light text-secondary pb-1 title-attrs">Kategori</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck13">
						<label class="custom-control-label ml-1" for="customCheck13">Frontend</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck14">
						<label class="custom-control-label ml-1" for="customCheck14">Backend</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck15">
						<label class="custom-control-label ml-1" for="customCheck15">Fullstack</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck16">
						<label class="custom-control-label ml-1" for="customCheck16">Mobile App</label>
					</div>
				</li>
			</ul>
		</div>
		<div class="search-attrs">
			<ul class="list-group list-group-flush mb-4">
				<li class="list-group-item bg-light text-secondary pb-1 title-attrs">Teknologi</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label ml-1" for="customCheck1">HTML &amp; CSS</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck6">
						<label class="custom-control-label ml-1" for="customCheck6">PHP</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck2">
						<label class="custom-control-label ml-1" for="customCheck2">Laravel</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck4">
						<label class="custom-control-label ml-1" for="customCheck4">NodeJS</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck5">
						<label class="custom-control-label ml-1" for="customCheck5">React.JS</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck7">
						<label class="custom-control-label ml-1" for="customCheck7">React Native</label>
					</div>
				</li>
			</ul>
		</div>
		<div class="search-attrs">
			<ul class="list-group list-group-flush">
				<li class="list-group-item bg-light text-secondary pb-1 title-attrs">Skill Level</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck8">
						<label class="custom-control-label ml-1" for="customCheck8">Beginer</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck9">
						<label class="custom-control-label ml-1" for="customCheck9">Intermediet</label>
					</div>
				</li>
				<li class="list-group-item">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck10">
						<label class="custom-control-label ml-1" for="customCheck10">Advanced</label>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-md-9">
		<div class="mx-0 mb-3 p-0">
			<h5 class="m-0 p-0">Total 35 Video...</h5>
		</div>
		<div class="d-flex flex-wrap flex-row justify-content-between">
			<?php for ($i = 0; $i < 8; $i++) { ?>
				<div class="card post-container mb-3" style="width: 255px">
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
							<span>45mm</span>
						</p>
					</div>
					<div class="card-footer bg-white py-3" style="width: 255px">
						<a href="/?page=preview" class="btn btn-success btn-block">Mulai Belajar</a>
					</div>
				</div>
			<?php } ?>
			<div style="width: 255px"></div>
		</div>
	</div>
</div>