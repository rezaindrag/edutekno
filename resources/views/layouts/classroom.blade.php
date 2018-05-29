<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edutekno</title>
	{{-- <link href="{{ asset('assets/favicon.png') }}" rel="icon"> --}}
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-light">

	<div class="container-fluid">
		<div class="row d-flex">
			@include('partials.classroom_nav')
			<main role="main" class="col-md-10 main p-0 ml-auto">
				@yield('content')
			</main>
		</div>
	</div>

	<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://api.dmcdn.net/all.js"></script>
	
	@yield('react')

</body>
</html>