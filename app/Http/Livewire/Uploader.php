<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Uploader extends Component
{
    use WithFileUploads;

    public $files = [];

    public function updatedFiles($files)
    {
        dd($files);
    }

    public function render()
    {
        return view('livewire.uploader');
    }
}
