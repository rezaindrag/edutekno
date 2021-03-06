<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<div class="container">
		<a class="navbar-brand logo text-info" href="/">edutekno</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-dark" href="{{ url('courses') }}">Kursus &amp; Tutorial</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Learning Paths
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Front End Developer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Back End Developer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Full Stack JavaScript Developer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Mobile Developer (React Native)</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">PHP Developer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">UI &amp; UX Developer</a>
					</div>
				</li>
			</ul>
			@auth
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-dark" href="">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="{{ url('classroom/dashboard') }}">Classroom</a>
					</li>
				</ul>
			@endauth
			<ul class="navbar-nav">
				@guest
					<li class="nav-item">
						<a class="nav-link text-dark" href="">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="">Tentang Kami</a>
					</li>
					<li class="nav-item ml-3 d-flex justify-content-center align-items-center">
						<a class="nav-link p-0" href="{{ url('login') }}">
							<button class="btn btn-outline-info py-1 px-2">Masuk</button>
						</a>
						<a class="nav-link p-0 ml-2" href="{{ url('register') }}">
							<button class="btn btn-info py-1 px-2">Daftar</button>
						</a>
					</li>
				@endguest
				@auth
					<li class="nav-item ml-2">
						<div class="dropdown">
							<div id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="rounded-circle avatar" style="background-image: url({!! Avatar::create(Auth::user()->name)->toBase64() !!});background-position: -3px -3px;"></div>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Setting</a>
								<a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
							</div>
						</div>
					</li>
				@endauth
			</ul>
		</div>
	</div>
</nav>