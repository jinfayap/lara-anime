<nav class="flex flex-col items-center justify-between border-b-2 border-gray-900 px-4 py-4 lg:flex-row">

	<a href="https://docs.api.jikan.moe/" class="font-bold text-white">Jikan Api</a>

	<ul class="flex flex-col space-y-4 text-sm font-semibold uppercase text-white lg:flex-row lg:space-y-0 lg:space-x-4">
		<li><a href="{{ route('anime.index') }}">Home</a></li>
		<li><a href="#">Current</a></li>
		<li><a href="#">Upcoming</a></li>
		<li><a href="#">Schedule</a></li>
		<li><a href="#">Archive</a></li>
	</ul>

	<div class="relative mt-4 lg:mt-0">
		<input type="search" name="search" class="rounded bg-gray-700 px-6 py-1 text-sm text-white outline-none"
			placeholder="Search..." autocomplete="off">

		<svg class="absolute top-0 left-0 ml-1 flex h-full w-4 items-center text-white" fill="none" viewBox="0 0 24 24"
			stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
		</svg>
	</div>
</nav>
