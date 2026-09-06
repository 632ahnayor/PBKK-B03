<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'PBKK')</title>
	<style>
		* { box-sizing: border-box; }
		body {
			margin: 0;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			font-family: Arial, sans-serif;
		}
		nav {
			padding: 1rem clamp(1rem, 4vw, 2rem);
			background: #0054ca;
		}
		.nav-links {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: flex-start;
			gap: clamp(1rem, 4vw, 3rem);
		}
		.nav-links a {
			color: white;
			text-decoration: none;
			font-weight: bold;
			padding: 0.25rem 0;
		}
		main {
			flex: 1;
			padding: 2rem;
		}
		.welcome,
		.identitas {
			font-size: 2rem;
		}
	</style>
</head>
<body>
	@include('partials.navbar')

	<main>
		@yield('content')
	</main>
</body>
</html>