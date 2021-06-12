<div class="p-4">
    {{-- In work, do what you enjoy. --}}
    <header class="sticky top-0 z-50 bg-gray-200">
        <div class="block w-full grid-cols-2 p-2">
            <div class="m-2 p-2">

                <x-jet-label for="search" value="{{ __('Search') }}"/>
                <x-jet-input id="search" class="block" type="text" wire:model='search' name="search"
                             :value="old('search')" required class="m-2 p-2"/>
                <button wire:click="resetForm()"
                        class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-blue-700 hover:bg-blue-700 text-blue-700 hover:text-white font-normal py-2 px-4 rounded">
                    Reset
                </button>

                <button wire:click="showAll()"
                        class="btn-outline-primary transition duration-300 ease-in-out focus:outline-none focus:shadow-outline border border-blue-700 hover:bg-blue-700 text-blue-700 hover:text-white font-normal py-2 px-4 rounded">
                    Show All
                </button>
            </div>
        </div>
        <div class="p-2">
            <span wire:dirty wire:target="search"><h3
                    class="text-xl font-normal leading-normal mt-0 mb-2 text-blue-800">Updating...</h3></span>
            @if(count($years)>0)
                <h2 class="text-2xl font-normal leading-normal mt-0 mb-2 text-blue-800">Years Mentioned</h2>
            @endif
            <div class="m-4 grid grid-cols-8  md:grid-cols-6">
                @forelse($years as $list_year)
                    <span><a href="#{{ $list_year->year_created }}" class="underline">{{ $list_year->year_created }}</a></span>
                @empty

                @endforelse

            </div>
        </div>
    </header>
    <main class=relative>
        @forelse($data as $what)


            <a name="{{ $what->year_created }}"></a>
            <div class="w-full md:max-w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">

                <a href="{{ asset('storage'.$what->filename) }}">{{ $what->file  }}</a> {{ $what->synopsis }}
            </div>
        @empty
            @if($search<>'')
                <p>Nothing returned</p>
            @endif
            You can search for specific terms by typing them in the search box above.  To jump to a specific year you
            can click the year link when results appear.  The reset button will clear search results.

        @endforelse


    </main>
    <footer></footer>


</div>
