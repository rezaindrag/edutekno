<div class="row preview">
	<div class="col-md-8">
		<div class="d-flex flex-row align-items-center pb-3">
			<h2 class="m-0">Membuat React Native Apps</h2>
		</div>
		<div class="d-flex justify-content-start flex-row border-top border-bottom py-2 mb-3 post-attrs">
			<p class="m-0">
				Guru: <span class="text-success">Reza Indra</span>
				<span class="mx-1">/</span>
				Video: <span class="text-secondary">23</span>
				<span class="mx-1">/</span>
				Durasi: <span class="text-secondary">45m</span>
			</p>
		</div>
		<div>
			<h4>Deskripsi</h4>
			<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quia reprehenderit tenetur error quaerat totam facere vitae nemo tempora deserunt laudantium asperiores esse ab accusamus recusandae eius necessitatibus, culpa ex!</span>
			<span>Ipsa adipisci a doloremque beatae cumque. Natus earum quidem, blanditiis in iste, sunt numquam consequuntur officiis velit doloremque quia architecto impedit modi eveniet perspiciatis ratione amet, aliquid id? Similique, reprehenderit!</span>
			<span>Fugiat autem labore, eos. Perferendis adipisci ex, placeat ullam molestias iusto, et nemo expedita. Excepturi in, distinctio quam ad, veniam nihil impedit incidunt enim soluta debitis cupiditate aspernatur, a nam!</span></p>
		</div>
		<div>
			<h4 class="mb-3">Silabus</h4>
			<?php for ($o = 1; $o < 4; $o++) { ?>
				<!-- item -->
				<div class="card rounded-0 border-1 border-0">
					<div class="card-header rounded-0 py-2 px-3 bg-white border-1" id="heading<?php echo $o ?>" data-toggle="collapse" data-target="#collapse<?php echo $o ?>" aria-expanded="true" aria-controls="collapseOne">
					  <h5 class="text-dark section m-0">
					      <?php echo $o ?>.&nbsp; Collapsible Group Item
					  </h5>
					</div>
					<div id="collapse<?php echo $o ?>" class="collapse show" aria-labelledby="heading<?php echo $o ?>">
					  <div class="card-body p-0">
					    <!-- List Item -->
					    <div class="list-group list-group-flush bg-light" id="list-group">
					      <?php for ($i = 0; $i < 3; $i++) { ?>
					        <a href="" class="list-group-item py-3 px-3 video-item d-flex align-items-start flex-direction-row bg-light">
					          <span class="play-icon text-dark" style="width: 23px">
					            <i class="fa fa-lock"></i>
					          </span> 
					          <span class="video-title text-dark" style="flex: 1">
					            Dapibus ac facilisis in Dapibus ac facilisis
					          </span>
					          <span class="video-title text-secondary" style="width: 50px">10.23</span>
					        </a>
					      <?php } ?>
					    </div>
					    <!-- List Item -->
					  </div>
					</div>
				</div>
				<!-- item -->
			<?php } ?>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img src="assets/thumbnail1.jpg" alt="" style="height: 250px">
			<div class="card-body">
				<h5 class="btn btn-outline-secondary btn-lg btn-block m-0">IDR 120.000</h5>
			</div>
			<div class="card-footer">
				<a href="" class="btn btn-primary btn-lg btn-block">Beli Sekarang <i class="fa fa-arrow-right ml-1" style="font-size: 15px"></i></a>
			</div>
		</div>
	</div>
</div>