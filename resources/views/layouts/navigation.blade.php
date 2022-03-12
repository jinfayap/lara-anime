<nav class="flex flex-col items-center justify-between border-b-2 border-gray-900 px-4 py-4 lg:flex-row">

	<a href="https://docs.api.jikan.moe/" class="font-bold text-white">Jikan Api</a>

	<ul class="flex flex-col space-y-4 text-sm font-semibold uppercase text-white lg:flex-row lg:space-y-0 lg:space-x-4">
		<li><a href="{{ route('anime.index') }}">Home</a></li>
		<li><a href="{{ route('anime.current') }}">Current</a></li>
		<li><a href="{{ route('anime.upcoming') }}">Upcoming</a></li>
	</ul>

	<livewire:search-dropdown />
</nav>
