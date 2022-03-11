<div wire:init="loadCharacters" class="grid grid-cols-4 gap-4 sm:grid-cols-5 md:grid-cols-7 lg:grid-cols-10">
	@forelse ($characters as $character)
		<div>
			<img src="{{ $character['character']['images']['jpg']['image_url'] }}" alt=""
				class="h-32 w-full rounded object-cover">
			<p class="mt-1 text-sm text-gray-400">{{ $character['character']['name'] }}</p>
		</div>
	@empty
		@foreach (range(1, 12) as $n)
			<div class="flex animate-pulse flex-col transition duration-150 ease-in-out hover:opacity-75">
				<div class="h-32 w-full rounded bg-gray-400"></div>
				<div class="mt-1 h-3 rounded bg-gray-400 text-transparent">Title</div>
			</div>
		@endforeach
	@endforelse
</div>
