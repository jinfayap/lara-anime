<div class="space-y-8" wire:init="loadRandomAnime">
	@foreach ($randomAnime as $anime)
		<x-anime-card-random :anime="$anime" />
	@endforeach
</div>
