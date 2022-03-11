<div wire:init="loadRecommendAnime" class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:block lg:space-y-4">
	@foreach ($recommendAnime as $anime)
		<x-anime-card-small :anime="$anime" />
	@endforeach
</div>
