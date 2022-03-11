<div class="space-y-8" wire:init="loadRandomAnime">
	@forelse ($randomAnime as $anime)
		<x-anime-card-random :anime="$anime" />
	@empty
		@foreach (range(1, 3) as $n)
			<x-skeleton-random />
		@endforeach
	@endforelse
</div>
