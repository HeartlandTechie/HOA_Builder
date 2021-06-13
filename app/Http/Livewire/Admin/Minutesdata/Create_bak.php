<?php

namespace App\Http\Livewire\Admin\Minutesdata;

use App\Models\MinutesData;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\PdfToText\Pdf;


class Create extends Component
{
    use WithFileUploads;

    public $filename;
    public $year_created;
    public $text;

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

            $uploaded_name = $this->filename->getClientOriginalName();

            $this->filename = $this->getPropertyValue('filename')->storeAs('/Minutes',$uploaded_name);
            $this->text = (new Pdf('/usr/local/bin/pdftotext'))
                ->setPdf('storage/app/'.$this->filename)
                ->text();

        }

        MinutesData::create([
            'filename' => $this->filename,
            'pdf_text' => $this->text,
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
