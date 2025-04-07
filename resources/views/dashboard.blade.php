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
			@if (session('user_role') == 'admin')	
				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<button type="submit" class="text-secondary hover:underline">Logout</button>
				</form>
			@endif
		</aside>
		<main class="grow max-h-screen overflow-y-auto py-4 px-8">
			<h1 class="text-6xl font-bold">Dashboard</h1>
			<p>Benvenuto alla dashboard</p>
			
			<div class="flex justify-between items-center">
				<h2 class="text-4xl font-bold mt-8">Elenco Iscritti</h2>
				<a href="{{ route('iscritto.create') }}" class="rounded p-2 bg-primary font-bold text-white cursor-pointer">Nuovo iscritto</a>
			</div>
            <div class="mt-4">
				<div class="grid grid-cols-[1fr_1fr_2fr_1fr_2fr] ">
					<div class="font-bold px-4 py-2">Nome</div>
					<div class="font-bold px-4 py-2">Cognome</div>
					<div class="font-bold px-4 py-2">Email</div>
					<div class="font-bold px-4 py-2">Numero di Tessera</div>
					<div class="font-bold px-4 py-2">Controlli</div>
				</div>
			
				@foreach ($iscritti as $iscritto)
					<div class="grid grid-cols-[1fr_1fr_2fr_1fr_2fr] even:bg-gray-100 rounded">
						<div class="px-4 py-2">{{ $iscritto->nome }}</div>
						<div class="px-4 py-2">{{ $iscritto->cognome }}</div>
						<div class="px-4 py-2">{{ $iscritto->email }}</div>
						<div class="px-4 py-2">{{ $iscritto->numero_di_tessera }}</div>
						<div class="px-4 py-2 flex gap-2">
							<a href="{{ route('iscritto.show', $iscritto->id) }}" class="text-primary hover:underline">Visualizza</a>
							<a href="{{ route('iscritto.edit', $iscritto->id) }}" class="text-primary hover:underline">Modifica</a>
							<form action="{{ route('iscritto.destroy', $iscritto->id) }}" method="POST" class="delete inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="text-secondary hover:underline">Elimina</button>
							</form>
						</div>
					</div>
				@endforeach
			</div>
		</main>
	</div>
</body>
</html>