<div class="relative mt-4 lg:mt-0" x-data="{isVisible: true}" @click.away="isVisible = false">
	<input wire:model.debounce.300ms="search" type="search" name="search" @focus="isVisible = true"
		@keydown.escape.window="isVisible = false" @keydown="isVisible=true" @keydown.shift.tab="isVisible=false"
		x-ref="search" @keydown.window="
	if(event.keyCode === 191) {
												event.preventDefault();
												$refs.search.focus();
								}" class="w-72 rounded bg-gray-700 px-6 py-1 text-sm text-white outline-none"
		placeholder="Search (Press '/' to focus)" autocomplete="off">

	<svg class="absolute top-0 left-0 ml-1 flex h-full w-4 items-center text-white" fill="none" viewBox="0 0 24 24"
		stroke="currentColor" stroke-width="2">
		<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
	</svg>

	<svg wire:loading class="absolute top-0 right-2 flex h-full w-4 animate-spin items-center text-white"
		xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
		<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
		<path class="opacity-75" fill="currentColor"
			d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
		</path>
	</svg>

	@if (strlen($search))
		<div x-show="isVisible" x-transition.opacity.duration.200
			class="absolute z-50 mt-2 w-full rounded bg-gray-600 text-xs text-white">
			@if (count($searchResults))
				<ul class="max-h-96 divide-y overflow-y-auto">
					@foreach ($searchResults as $anime)
						<li>
							<a @if ($loop->last) @keydown.tab="isVisible=false" @endif
								href="{{ route('anime.show', $anime['mal_id']) }}"
								class="flex items-center px-3 py-1 opacity-75 transition ease-out hover:bg-gray-500 focus:outline-none focus:ring focus:ring-blue-800">
								<img src="{{ $anime['images']['jpg']['small_image_url'] }}" alt="" class="w-10">
								<span class="ml-3">{{ $anime['title'] }}</span>
							</a>
						</li>
					@endforeach

				</ul>
			@else
				<div class="px-3 py-1">No results for {{ $search }} </div>
			@endif
		</div>

	@endif
</div>
