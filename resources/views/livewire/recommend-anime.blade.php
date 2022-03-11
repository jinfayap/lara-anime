<div wire:init="loadRecommendAnime" class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:block lg:space-y-4">
	@forelse ($recommendAnime as $anime)
		<x-anime-card-small :anime="$anime" />
	@empty
		@foreach (range(1, 8) as $n)
			<x-skeleton-small />
		@endforeach
	@endforelse
</div>
