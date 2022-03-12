<div wire:init="loadUpcomingAnime">

	<div class="mt-12 flex justify-evenly border-b-2 border-white pb-2">
		<button wire:click="changeSeason('winter')"
			class="rounded-md px-4 py-1 font-semibold text-white hover:text-gray-500">Winter</button>
		<button wire:click="changeSeason('spring')"
			class="rounded-md px-4 py-1 font-semibold text-white hover:text-gray-500">Spring</button>
		<button wire:click="changeSeason('summer')"
			class="rounded-md px-4 py-1 font-semibold text-white hover:text-gray-500">Summer</button>
		<button wire:click="changeSeason('fall')"
			class="rounded-md px-4 py-1 font-semibold text-white hover:text-gray-500">Fall</button>
	</div>

	<h3 class="mt-2 text-center text-4xl font-bold text-white">{{ ucwords($chosenSeason) }}</h3>

	<div wire:loading.remove
		class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
		@foreach ($upcomingAnime as $anime)
			<x-anime-card-normal :anime="$anime" />
		@endforeach
	</div>

	<div wire:loading.grid
		class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">

		@foreach (range(1, 12) as $n)
			<x-skeleton-normal />
		@endforeach

	</div>

</div>
