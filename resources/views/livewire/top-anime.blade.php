<div wire:init="loadTopAnime"
	class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">

	@foreach ($topAnime as $anime)
		<x-anime-card-normal :anime="$anime" />
	@endforeach
</div>
