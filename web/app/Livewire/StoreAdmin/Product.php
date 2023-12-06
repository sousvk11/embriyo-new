<?php

namespace App\Livewire\StoreAdmin;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.store-admin.product')->layout('layouts.storeAdmin');
    }
}
