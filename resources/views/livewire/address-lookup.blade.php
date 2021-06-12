<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
<div class="flex flex-col w-full">
    @unless($selectedAddressID)
    <x-jet-label for="address" value="{{ __('Address') }}" />
    <x-jet-input id="address" class="block mt-1 w-full" type="text" wire:model='address' name="address" :value="old('address')" required />
    @else
        <label>Address:</label> <div class="inline"><button wire:click="resetAddress()" class="inline pr-2 pl-3">x</button> {{ $selectedAddress[0]['full_address'] }}
            </div>
    @endunless

    <input type="hidden" wire:model="selectedAddressID" name="address_id" required>


    @if(!empty($returned_addresses))
                 <div class="block mt-1 w-full border-b">
                    @foreach($returned_addresses as $street_address)
                        <button wire:click="click_this({{$street_address['id']}})" class="w-full text-left text-block bg-white py-2 px-3 border-b hover:bg-blue-200">{{ $street_address['full_address'] }}</button>

                    @endforeach
                </div>
                @else

                @endif


</div>

</div>
