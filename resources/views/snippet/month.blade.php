
<div class="relative z-10 text-center max-w-screen-lg xl:max-w-screen-xl mx-auto">
    <h2 class="text-3xl sm:text-5xl lg:text-6xl leading-none font-extrabold text-gray-900 tracking-tight mb-8"> {{ $startsAt->format('F Y') }} </h2>
</div>

<div class="p-2">
    <div class="relative z-0 inline-flex shadow-sm">
        <button
            wire:click.stop="goToPreviousMonth"
            type="button"
            class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            <
        </button>
        <button
            wire:click.stop="goToCurrentMonth"
            type="button"
            class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            Today
        </button>
        <button
            wire:click.stop="goToNextMonth"
            type="button"
            class="-ml-px relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            >
        </button>

    </div>
</div>
