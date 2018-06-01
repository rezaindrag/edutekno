<div class="container-fluid banner py-5 d-flex align-items-center">
	<div class="container">
		<div class="row d-flex justify-content-between">
			<div class="col-md-7">
				<h1 class="text-dark mb-2">Media Edukasi Teknologi Indonesia</h1>
				<p class="m-0 text-secondary mb-4">Belajar Web &amp; Mobile Development, UX &amp; UI Design, Games Development, dll</p>
				{!! Form::open(['url' => 'courses', 'method' => 'get']) !!}
					<div class="input-group input-group-lg" style="width: 380px">
						<input type="text" class="form-control" name="q" placeholder="Apa yang ingin anda pelajari?">
						<div class="input-group-append">
							<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>