<?php

namespace App\Http\Livewire\Admin\Minutesdata;

use App\Models\MinutesData;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $filename;
    public $year_created;
    
    protected $rules = [
        'filename' => 'required',        'year_created' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('MinutesData') ])]);
        
        if($this->getPropertyValue('filename') and is_object($this->filename)) {
            $this->filename = $this->getPropertyValue('filename')->store('./Minutes');
        }

        MinutesData::create([
            'filename' => $this->filename,
            'year_created' => $this->year_created,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.minutesdata.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('MinutesData') ])]);
    }
}
