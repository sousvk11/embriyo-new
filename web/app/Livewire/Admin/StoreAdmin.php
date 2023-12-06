<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class StoreAdmin extends Component
{
    public $storeAdmins;
    public function getAdmins(){
        return User::byRoleId(2)->get();
    }

    public function mount(){
        $this->storeAdmins =$this->getAdmins();
    }
    public function render()
    {
        return view('livewire.admin.store-admin')->layout('layouts.storeAdmin');
    }
}
