<?php

namespace App\Livewire\StoreAdmin;

use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $stores;
    public function loadStore(){
       return Store::where('user_id',Auth::id())->get();
    }

    public function mount(){
        $this->stores = $this->loadStore();
    }
    public function render()
    {
        return view('livewire.store-admin.dashboard')->layout('layouts.storeAdmin');
    }
}
