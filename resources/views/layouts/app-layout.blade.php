<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<script src="{{ mix('js/app.js') }}"></script>

</head>

<body class="h-full bg-gray-800">
	<div class="min-h-full" id="app">

		{{-- @include('layouts.navigation') --}}

		<main>
			<div class="relative mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
				<div class="mx-auto px-4 py-6 sm:px-0">
					{{ $slot }}
				</div>
			</div>
		</main>
	</div>
</body>

</html>
