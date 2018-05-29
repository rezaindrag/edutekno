<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gurucoding | Semua Bisa Menjadi Developer!</title>
	<link href="/assets/favicon.png" rel="icon">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/custom.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
	<script src="/js/jquery-3.2.1.slim.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="https://api.dmcdn.net/all.js"></script>
	<script>
		$(function () {
			var height = $('#card-body-play').height();
			console.log(height);
		});
	</script>
</head>
<body class="bg-light">
	
	<?php if (isset($_GET['play'])) { ?>

		<?php
			require __DIR__ . '/components/screens/play.php';
		?>
		
	<?php } else if (isset($_GET['page'])) { ?>

		<?php require __DIR__ . '/components/nav.php' ?>
		<?php require __DIR__ . '/components/breadcrumb.php' ?>
		<div class="container-fluid mt-5 mb-5 content">
			<div class="container pages">
				<?php
					$page = $_GET['page'];
					if ($page == 'courses') {
						require __DIR__ . '/components/screens/courses.php';
					} else if ($page == 'preview') {
						require __DIR__ . '/components/screens/preview.php';
					} else if ($page == 'mycourses') {
						require __DIR__ . '/components/screens/mycourses.php';
					}
				?>
			</div>
		</div>
		<?php require __DIR__ . '/components/footer.php' ?>

	<?php } else if (isset($_GET['login'])) { ?>
	
		<div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%">
			<?php require __DIR__ . '/components/screens/login.php'; ?>
		</div>

	<?php } else if (isset($_GET['signup'])) { ?>
	
		<div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%">
			<?php require __DIR__ . '/components/screens/signup.php'; ?>
		</div>

	<?php } else { ?>
	
		<?php require __DIR__ . '/components/nav.php' ?>
		<?php require __DIR__ . '/components/banner.php' ?>
		<div class="container-fluid my-5 content">
			<div class="container home">
				<?php
					require __DIR__ . '/components/screens/home.php';
				?>
			</div>
		</div>
		<?php require __DIR__ . '/components/footer.php' ?>

	<?php } ?>

</body>
</html>