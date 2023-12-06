<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserRole;
use Livewire\Component;

class CreateStoreAdmin extends Component
{
    public $first_name,$last_name,$email,$password;
    public function saveUser()
    {

        $user = User::create([
            "first_name" => $this->first_name,
            "last_name"=> $this->last_name,
            "email" => $this->email,
            "password"=> password_hash($this->password,PASSWORD_DEFAULT),
        ]);

        if($user->save()){
            UserRole::create([
                'role_id' => 2,
                'user_id' => $user->id
            ]);
        }

        return $this->redirect('/Admin/storeAdmins');
    }

    public function render()
    {
        return view('livewire.create-store-admin')->layout('layouts.storeAdmin');
    }

}
