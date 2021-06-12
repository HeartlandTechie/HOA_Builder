<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;

class AddressLookup extends Component
{
    public $address = '';
    public $selectedAddressID = null;

    public $selectedAddress = '';
    public $returned_addresses = [];

    public function resetAddress()
    {
        $this->adddress='';
        $this->selectedAddressID = null;
    }

    public function updatedAddress()
    {
        $this->returned_addresses = Address::select('id',\DB::Raw("concat(street_address,' ',street_name) as full_address"))->where(\DB::Raw("concat(street_address,' ',street_name)"),'like',''.$this->address.'%')->get()->toArray();


    }

    public function click_this($what)
    {
        $this->selectedAddressID = $what;

        $this->returned_addresses = [];
        $this->selectedAddress = Address::where('id','=',$what)->select(\DB::Raw("concat(street_address,' ',street_name) as full_address"))->get()->toArray();
      //  $this->selectedAddress = Address::where('id','=',$what)->pluck(\DB::Raw("concat(street_address,' ',street_name)"));




            //->pluck(\DB::Raw("concat(street_address,' ',street_name)"));
    }

    public function render()
    {
        return view('livewire.address-lookup');
    }
}
