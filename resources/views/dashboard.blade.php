<html lang="en">
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Styles / Scripts -->
	@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@vite(['resources/css/style.css'])
	@endif
	
	<title>Document</title>
</head>
<body>
	<div class="flex">
		<aside class="min-w-1/6 bg-primary text-white h-screen">
			<nav>
				<ul class="font-bold flex flex-col p-4">
					<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
					<li><a href="{{ route('iscritti') }}">Iscritti</a></li>
					<li><a href="{{ route('staff') }}">Staff</a></li>
				</ul>
			</nav>
		</aside>
		<main class="grow overflow-y-auto my-4 mx-8 mb-0">
			<h1 class="text-6xl font-bold">Dashboard</h1>
			<p>Benvenuto alla dashboard</p>
		</main>
	</div>
</body>
</html>