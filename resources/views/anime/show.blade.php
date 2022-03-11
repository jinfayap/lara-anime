<x-app-layout>
	<section class="flex flex-col justify-between rounded-md bg-gray-700 px-4 py-4 lg:flex-row">
		<img src="{{ $anime['images']['jpg']['large_image_url'] }}" alt="">

		<div class="mt-2 lg:mt-0 lg:ml-4">
			<div class="mb-1 flex flex-col items-center justify-between md:flex-row">
				<h2 class="text-lg font-bold text-white">{{ $anime['title'] }}</h2>
				<div class="mt-2 md:mt-0">
					<span class="rounded bg-orange-400 px-2 py-1 text-sm font-semibold text-white">{{ $anime['episodes'] }}
						Episodes</span>
					<span class="rounded bg-green-400 px-2 py-1 text-sm font-semibold text-white">{{ $anime['status'] }}</span>
					<span class="rounded bg-blue-500 px-2 py-1 text-sm font-semibold text-white">{{ $anime['type'] }} </span>
				</div>
			</div>

			<div class="mb-1 text-center text-xs font-semibold text-white md:text-left">
				@foreach ($anime['genres'] as $genre)
					<a href="#" class="mr-1">{{ $genre['name'] }} </a>

					@if (!$loop->last)
						<span class="mr-1">&middot;</span>
					@endif
				@endforeach
			</div>

			<p class="mb-2 text-center text-xs text-white md:text-left">Aired : {{ $anime['aired']['string'] }}</p>

			<div class="mb-2 grid grid-cols-3 gap-12 rounded-md border py-2 px-2">
				<div class="flex flex-col items-center justify-center">
					<p class="mb-1 font-mono text-xs uppercase text-white">Score</p>
					<div class="text-xs font-thin text-white">{{ $anime['score'] }}</div>
				</div>
				<div class="flex flex-col items-center justify-center">
					<p class="mb-1 font-mono text-xs uppercase text-white">scored_by</p>
					<div class="text-xs font-thin text-white">{{ $anime['scored_by'] }}</div>
				</div>
				<div class="flex flex-col items-center justify-center">
					<p class="mb-1 font-mono text-xs uppercase text-white">rank</p>
					<div class="text-xs font-thin text-white">{{ $anime['rank'] }}</div>
				</div>
				<div class="flex flex-col items-center justify-center">
					<p class="mb-1 font-mono text-xs uppercase text-white">popularity</p>
					<div class="text-xs font-thin text-white">{{ $anime['popularity'] }}</div>
				</div>
				<div class="flex flex-col items-center justify-center">
					<p class="mb-1 font-mono text-xs uppercase text-white">members</p>
					<div class="text-xs font-thin text-white">{{ $anime['members'] }}</div>
				</div>
				<div class="flex flex-col items-center justify-center">
					<p class="mb-1 font-mono text-xs uppercase text-white">favorites</p>
					<div class="text-xs font-thin text-white">{{ $anime['favorites'] }}</div>
				</div>
			</div>

			<p class="text-sm text-gray-400">
				{{ $anime['synopsis'] }}
			</p>

			<button
				class="mt-3 w-full rounded-md bg-blue-500 px-4 py-2 text-center font-semibold text-white hover:bg-blue-600 lg:w-52">Trailer
			</button>
		</div>
	</section>

	<section class="mt-12">
		<h2 class="mb-2 text-2xl font-bold text-white">Characters</h2>

		<livewire:anime-characters :animeId="$id" />
	</section>

	<section class="mt-12">
		<h2 class="mb-2 text-2xl font-bold text-white">You may also like</h2>

		<livewire:anime-recommendations :animeId="$id">
	</section>
</x-app-layout>
