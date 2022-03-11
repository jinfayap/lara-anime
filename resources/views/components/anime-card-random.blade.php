<div
	class="flex flex-col rounded-md bg-gray-600 px-4 py-2 transition duration-150 ease-in-out hover:opacity-75 sm:flex-row">
	<div class="relative mr-6 flex-none">
		<a href="{{ route('anime.show', $anime['mal_id']) }}">
			<img src="{{ $anime['images']['jpg']['image_url'] }}" alt="" class="rounded">
		</a>
		@if ($anime['score'])
			<div
				class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-full bg-black text-xs font-semibold text-white">

				{{ $anime['score'] }}

			</div>
		@endif
	</div>

	<div class="flex-1">
		<a href="{{ route('anime.show', $anime['mal_id']) }}"
			class="mt-2 block text-xl text-white">{{ $anime['title'] }}</a>

		<div class="mb-2 text-xs font-semibold text-white">
			@foreach ($anime['genres'] as $genre)
				<a href="#" class="mr-1">{{ $genre['name'] }} </a>

				@if (!$loop->last)
					<span class="mr-1">&middot;</span>
				@endif
			@endforeach

		</div>

		<p class="line-clamp-6 text-sm text-gray-300">
			@if ($anime['synopsis'])
				{{ $anime['synopsis'] }}
			@else
				No synopsis available
			@endif

		</p>
	</div>
</div>
