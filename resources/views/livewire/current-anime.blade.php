<div wire:init="loadCurrentAnime"
	class="mt-8 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
	@forelse ($currentAnime as $anime)
		<x-anime-card-normal :anime="$anime" />
	@empty
		<div>Loading...</div>
	@endforelse
</div>
