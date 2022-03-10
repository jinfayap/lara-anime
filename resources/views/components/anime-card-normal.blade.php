<div class="anime flex max-w-fit flex-col transition duration-150 ease-in-out hover:opacity-75">
	<div class="relative mb-4">
		<a href="{{ route('anime.show', $anime['mal_id']) }}">
			<img src="{{ $anime['images']['jpg']['image_url'] }}" alt="" class="h-75 rounded-md">
		</a>

		<div
			class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-full bg-black text-xs font-semibold text-white">
			{{ $anime['score'] }}
		</div>
	</div>

	<div class="">
		<div class="flex items-center justify-between text-xs">
			<span class="rounded bg-blue-500 px-2 py-1 font-semibold text-white">{{ $anime['type'] }}</span>
			<span class="rounded bg-green-400 px-2 py-1 font-semibold text-white">{{ $anime['status'] }}</span>
		</div>

		<a href="{{ route('anime.show', $anime['mal_id']) }}"
			class="mt-2 block text-sm text-gray-400">{{ $anime['title'] }}</a>
	</div>
</div>
