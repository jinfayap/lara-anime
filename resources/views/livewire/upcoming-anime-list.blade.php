<div wire:init="loadUpcomingAnime">

	<div class="mt-3 flex justify-between">
		@if ($this->hasPrevPage())
			<button wire:click="prevPage" class="rounded-md bg-blue-400 px-4 py-2 font-semibold text-white">Prev</button>
		@endif
		<span class="text-lg font-bold text-white">Page: {{ $page }} / {{ $maxPage }}</span>
		@if ($hasNextPage)
			<button wire:click="nextPage" class="rounded-md bg-blue-400 px-4 py-2 font-semibold text-white">Next</button>
		@endif
	</div>

	<div wire:loading.remove
		class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
		@forelse ($upcomingAnime as $anime)
			<x-anime-card-normal :anime="$anime" />
		@empty
			@foreach (range(1, 12) as $n)
				<x-skeleton-normal />
			@endforeach
		@endforelse
	</div>

	<div wire:loading.grid
		class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">

		@foreach (range(1, 12) as $n)
			<x-skeleton-normal />
		@endforeach

	</div>

</div>
