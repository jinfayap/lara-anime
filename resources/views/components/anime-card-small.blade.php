<div class="anime flex transition duration-150 ease-in-out hover:opacity-75">
	<a href="{{ route('anime.show', $anime['mal_id']) }}"><img src="{{ $anime['images']['jpg']['small_image_url'] }}"
			alt="" class="h-18 flex-none rounded"></a>
	<a href="{{ route('anime.show', $anime['mal_id']) }}"
		class="ml-2 block text-xs text-gray-400">{{ $anime['title'] }}</a>
</div>
