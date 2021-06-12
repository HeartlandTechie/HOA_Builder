<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;

    public $name;
    public $email;
    public $is_superuser;
    
    protected $rules = [
        'name' => 'required',        'email' => 'required',        
    ];

    public function mount(User $user){
        $this->user = $user;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->is_superuser = $this->user->is_superuser;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('User') ]) ]);
        
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'is_superuser' => $this->is_superuser,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.update', [
            'user' => $this->user
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('User') ])]);
    }
}
