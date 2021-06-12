<?php

namespace App\Http\Livewire;

use App\Models\MinutesData;
use Livewire\Component;

class Minutes extends Component
{
    public $search = '';


    public $data = [];
    public $years = [];

    public function resetForm()
    {
        $this->search = '';
        $this->data = [];
        $this->years = [];
    }

    public function updatedSearch($value)
    {
        $this->data = MinutesData::where('pdf_text', 'like', '%' . $value . '%')->orderBy('year_created', 'DESC')->get();

        $this->years = MinutesData::where('pdf_text', 'like', '%' . $value . '%')->select('year_created')->distinct()->orderBy('year_created')->get();

    }

    public function showAll()
    {
        $this->data = MinutesData::orderBy('year_created', 'DESC')->get();
        $this->years = MinutesData::select('year_created')->distinct()->orderBy('year_created')->get();

    }

    public function render()
    {

        return view('livewire.minutes', ['years'=>$this->years, 'data'=>$this->data]);
    }
}
