<?php

namespace App\Livewire\StoreAdmin;

use Livewire\Component;

class UploadedFiles extends Component
{
    public function render()
    {
        return view('livewire.store-admin.uploaded-files')->layout('layouts.storeAdmin');
    }
}
