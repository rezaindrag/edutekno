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

	@include('partials.auth_nav')

	<div class="auth-container d-flex justify-content-center align-items-center">
        @yield('content')
	</div>

	@include('partials.auth_footer')

	<script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="https://api.dmcdn.net/all.js"></script>
	
	@yield('react')

</body>
</html>