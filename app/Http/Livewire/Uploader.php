<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Uploader extends Component
{
    use WithFileUploads;

    public $files = [];

    protected function rules()
    {
        return [
            'files.*' => ['required', 'file', 'max:2000', 'mimes:png,jpg']
        ];
    }

    protected function validationAttributes()
    {
        return [
            'files.*' => 'files'
        ];
    }

    public function updatedFiles($files)
    {
        $this->validateOnly('files.*');
    }

    public function render()
    {
        return view('livewire.uploader');
    }
}
