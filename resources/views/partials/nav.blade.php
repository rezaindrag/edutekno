<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
	<div class="container">
		<a class="navbar-brand text-secondary" href="/">
			<img src="{{ asset('assets/logo.png') }}" class="logo" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-dark" href="{{ url('free-courses') }}">Free Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="{{ url('degree-program') }}">Teknodegree</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="">About Us</a>
				</li>
			</ul>
			@auth
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-dark" href="{{ url('classroom/dashboard') }}">Classroom</a>
					</li>
				</ul>
			@endauth
			<ul class="navbar-nav">
				@guest
					<li class="nav-item ml-3 d-flex justify-content-center align-items-center">
						<a class="nav-link p-0" href="{{ url('login') }}">
							<button class="btn btn-link py-1 text-dark">Log In</button>
						</a>
						<a class="nav-link p-0 ml-2" href="{{ url('register') }}">
							<button class="btn btn-primary py-1 px-3">Get Started</button>
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