<?php

namespace App\Http\Livewire\Admin\Minutesdata;

use App\Models\MinutesData;
use Livewire\Component;

class Single extends Component
{

    public $minutesdata;

    public function mount(MinutesData $minutesdata){
        $this->minutesdata = $minutesdata;
    }

    public function delete()
    {
        $this->minutesdata->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('MinutesData') ]) ]);
        $this->emit('minutesdataDeleted');
    }

    public function render()
    {
        return view('livewire.admin.minutesdata.single')
            ->layout('admin::layouts.app');
    }
}
