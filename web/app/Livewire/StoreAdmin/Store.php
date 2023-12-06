<?php

namespace App\Livewire\StoreAdmin;

use Livewire\Component;

class Store extends Component
{
    public function render()
    {
        return view('livewire.store-admin.store')->layout('layouts.storeAdmin');
    }
}
