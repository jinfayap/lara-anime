<div wire:init="loadAnimeRecommendations" class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6">
	@forelse ($animeRecommendations as $anime)
		<a href="{{ route('anime.show', $anime['mal_id']) }}">
			<img src="{{ $anime['images']['jpg']['image_url'] }}" alt="" class="h-75 object-fit w-full md:w-fit">
			<p class="mt-1 text-gray-400">{{ $anime['title'] }}</p>
		</a>
	@empty

		@foreach (range(1, 6) as $n)
			<div class="flex flex-col">
				<div class="h-75 w-full rounded bg-gray-400"></div>
				<p class="mt-1 h-3 w-full rounded bg-gray-400 text-gray-400"></p>
			</div>
		@endforeach
	@endforelse
</div>
