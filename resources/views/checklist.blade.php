<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SLHA System Checklist') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="flex flex-col w-full border border-gray-400 shadow-lg overflow-hidden m-auto pb-4">
                <div class="justify-around flex flex-row items-baseline">
                    <h1 class="underline text-lg mt-2 ml-3">Upcoming Features</h1>
                </div>
                <!-- Change the size of the container "max-w-full", ideally to w-1/6-->
                @foreach($todo as $item)


                    <label class="custom-label flex mt-2 ml-3">
                        <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" class="hidden" {{ ($item->checked ? 'checked' : '') }} disabled
                                   readonly>
                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                                <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none"
                                   font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                                    <path d="M0 172V0h172v172z"/>
                                    <path
                                        d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                        fill="currentColor" stroke-width="1"/>
                                </g>
                            </svg>
                        </div>
                        <span class="select-none">{{  $item->title }}</span>
                    </label>
                @endforeach

                <div class="justify-around flex flex-row items-baseline">
                    <h1 class="text-md mt-2 ml-3">Missing a feature or have a suggestion? <a class="underline text-blue-800" href="mailto:silverlake.web@gmail.com?subject=Idea">Email us your idea.</a></h1>
                </div>

            </div>
        </div>
    </div>
    <style>
        .custom-label input:checked + svg {
            display: block !important;
        }

    </style>

</x-app-layout>
