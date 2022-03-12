<div class="flex flex-col transition duration-150 ease-in-out hover:opacity-75">
	<div class="relative mb-4">
		<a href="{{ route('anime.show', $anime['mal_id']) }}">
			<img src="{{ $anime['images']['jpg']['image_url'] }}" alt="" class="h-75 w-full rounded-md object-cover">
		</a>

		@if (isset($anime['score']))
			<div
				class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-full bg-black text-xs font-semibold text-white">
				{{ $anime['score'] }}
			</div>
		@endif

	</div>

	<div class="">
		<div class="flex flex-col items-center justify-between text-xs lg:flex-row">
			<span
				class="w-full rounded bg-blue-500 px-2 py-0.5 text-center font-semibold text-white lg:w-fit lg:text-left">{{ $anime['type'] }}</span>
			<span
				class="mt-1 w-full rounded bg-green-400 px-2 py-0.5 text-center font-semibold text-white lg:mt-0 lg:w-fit lg:text-left">{{ $anime['status'] }}</span>
		</div>

		<a href="{{ route('anime.show', $anime['mal_id']) }}"
			class="mt-2 block text-sm text-gray-400">{{ $anime['title'] }}</a>
	</div>
</div>
