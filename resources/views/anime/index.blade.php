<x-app-layout>
	<section>
		<div class="flex items-center justify-between">
			<h2 class="text-2xl font-bold text-white">Current Season Anime</h2>

			<a href="#" class="text-sm font-bold uppercase text-gray-400 hover:underline">View all</a>
		</div>

		{{-- <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
			@foreach ($currentAnime as $anime)
				<x-anime-card-normal :anime="$anime" />
			@endforeach
		</div> --}}
		<livewire:current-anime />
	</section>

	<section class="mt-12">
		<h2 class="text-2xl font-bold text-white">Top Anime Series</h2>

		{{-- <div class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">

			@foreach ($topAnime as $anime)
				<x-anime-card-normal :anime="$anime" />
			@endforeach
		</div> --}}

		<livewire:top-anime />

	</section>

	<section class="mt-12">
		<div class="flex flex-col lg:flex-row">
			<div class="w-full lg:w-3/4">
				<h2 class="mb-8 text-2xl font-bold text-white">Random Anime</h2>

				<livewire:random-anime />
			</div>

			<div class="mt-4 w-full lg:ml-4 lg:mt-0 lg:w-1/4">
				<h2 class="mb-8 text-2xl font-bold text-white">Recommendations</h2>
				<livewire:recommend-anime />
			</div>
		</div>

	</section>

</x-app-layout>
