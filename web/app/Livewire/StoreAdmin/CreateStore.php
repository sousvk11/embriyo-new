<?php

namespace App\Livewire\StoreAdmin;

use Livewire\Component;

class CreateStore extends Component
{
    public function render()
    {
        return view('livewire.store-admin.create-store')->layout('layouts.create-store');
    }
}
