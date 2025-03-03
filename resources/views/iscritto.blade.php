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
	
	<title>Iscritto - {{ $iscritto->nome . " " . $iscritto->cognome }}</title>
</head>
<body>
	<div class="container my-0 mx-auto text-center">
		<h1 class="text-6xl font-bold">{{ $iscritto->nome . " " . $iscritto->cognome }}</h1>
		<p>tessera: {{ $iscritto->numero_di_tessera}}</p>
	</div>
</body>
</html>