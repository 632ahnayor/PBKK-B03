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
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ url('/') }}">PBKK B03</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mainNavbar">
				<div class="navbar-nav">
					<a class="nav-link" href="{{ url('/') }}">Home</a>
					<a class="nav-link" href="{{ url('/about') }}">About</a>
					<a class="nav-link" href="{{ url('/project-idea') }}">Project</a>
					<a class="nav-link" href="{{ url('/hitung/1/3/bagi') }}">Kalkulator</a>
				</div>
			</div>
		</div>
	</nav>

	<main>
		@yield('content')
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>