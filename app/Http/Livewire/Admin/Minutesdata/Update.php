<?php

namespace App\Http\Livewire\Admin\Minutesdata;

use App\Models\MinutesData;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $minutesdata;

    public $filename;
    public $year_created;
    
    protected $rules = [
        'filename' => 'required',        'year_created' => 'required',        
    ];

    public function mount(MinutesData $minutesdata){
        $this->minutesdata = $minutesdata;
        $this->filename = $this->minutesdata->filename;
        $this->year_created = $this->minutesdata->year_created;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('MinutesData') ]) ]);
        
        if($this->getPropertyValue('filename') and is_object($this->filename)) {
            $this->filename = $this->getPropertyValue('filename')->store('./Minutes');
        }

        $this->minutesdata->update([
            'filename' => $this->filename,
            'year_created' => $this->year_created,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.minutesdata.update', [
            'minutesdata' => $this->minutesdata
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('MinutesData') ])]);
    }
}
