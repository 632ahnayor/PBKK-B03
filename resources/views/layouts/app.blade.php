<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'PBKK')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		* { box-sizing: border-box; }
		body {
			margin: 0;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			font-family: Arial, sans-serif;
		}
		main {
			flex: 1;
		}
		.welcome {
            font-size: 2rem;
        }
		.identitas {
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	@include('partials.navbar')

	<main>
		@yield('content')
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>