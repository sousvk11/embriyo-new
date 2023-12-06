<?php
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\StoreAdmin;
use App\Livewire\CreateStoreAdmin;


Route::group(["middleware"=>['auth', 'admin'],'prefix'=> 'Admin'], function () {
    Route::get('dashboard',Dashboard::class)->name('admindashboard');
    Route::get('storeAdmins',StoreAdmin::class)->name('showStoreAdmins');
    Route::get('createStoreAdmins',CreateStoreAdmin::class)->name('createStoreAdmins');
});
