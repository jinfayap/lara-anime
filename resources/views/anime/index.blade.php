<x-app-layout>
	<section>
		<div class="flex items-center justify-between">
			<h2 class="text-2xl font-bold text-white">Current Season Anime</h2>

			<a href="#" class="text-sm font-bold uppercase text-gray-400 hover:underline">View all</a>
		</div>

		<div class="mt-8 grid grid-cols-6 gap-3">
			@foreach ($currentAnime as $anime)
				<x-anime-card-normal :anime="$anime" />
			@endforeach
		</div>

	</section>

	<section class="mt-12">
		<h2 class="text-2xl font-bold text-white">Top Anime Series</h2>

		<div class="mt-8 grid grid-cols-6 gap-3">

			@foreach ($topAnime as $anime)
				<x-anime-card-normal :anime="$anime" />
			@endforeach
		</div>

	</section>

	<section class="mt-12">
		<div class="flex">
			<div class="w-3/4 space-y-8">
				<h2 class="mb-8 text-2xl font-bold text-white">Random Anime</h2>
				@foreach ($randomAnime as $anime)
					<x-anime-card-random :anime="$anime" />
				@endforeach

			</div>

			<div class="ml-4 w-1/4">
				<h2 class="mb-8 text-2xl font-bold text-white">Recommendations</h2>
				<div class="space-y-4">

					@foreach ($recommendAnime as $anime)
						<x-anime-card-small :anime="$anime" />
					@endforeach


				</div>
			</div>
		</div>

	</section>

</x-app-layout>
