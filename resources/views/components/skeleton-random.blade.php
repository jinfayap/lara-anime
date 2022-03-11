<div
	class="animate-pulse flex flex-col rounded-md bg-gray-600 px-4 py-2 transition duration-150 ease-in-out hover:opacity-75 sm:flex-row">


	<div class="mr-6 h-80 w-56 rounded bg-gray-400"></div>


	<div class="flex-1">
		<div class="mt-2 w-full rounded bg-gray-400 text-xl text-transparent text-white">
			Title
		</div>

		<div class="mt-2 mb-2 flex items-center text-xs font-semibold text-white">
			@foreach (range(1, 3) as $n)
				<div class="mr-1 h-2 w-16 rounded bg-gray-400 text-transparent"> gerne </div>

				@if (!$loop->last)
					<span class="mr-1">&middot;</span>
				@endif
			@endforeach

		</div>

		<div class="w-full space-y-2 text-sm text-gray-300">
			<div class="h-3 w-full rounded bg-gray-400 text-transparent"></div>
			<div class="h-3 w-full rounded bg-gray-400 text-transparent"></div>
			<div class="h-3 w-full rounded bg-gray-400 text-transparent"></div>
		</div>
	</div>
</div>
