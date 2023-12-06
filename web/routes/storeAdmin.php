<?php
use App\Http\Controllers\JSController;
use App\Livewire\StoreAdmin\CreateStore;
use App\Livewire\StoreAdmin\Dashboard;
use App\Livewire\StoreAdmin\Digitized;
use App\Livewire\StoreAdmin\Payout;
use App\Livewire\StoreAdmin\Product;
use App\Livewire\StoreAdmin\Store;
use App\Livewire\StoreAdmin\UploadedFiles;

Route::group(["middleware"=>['auth', 'storeAdmin'],'prefix'=> 'StoreAdmin'], function () {
    Route::get('dashboard',Dashboard::class)->name('storedashboard');
    Route::get('products',Product::class)->name('storeproducts');
    Route::get('Store',Store::class)->name('store');
    Route::get('uploads',UploadedFiles::class)->name('uploaded-files');
    Route::get('digitized-logo',Digitized::class)->name('digitized');
    Route::get('payout',Payout::class)->name('payout');
    Route::get('create-store',CreateStore::class)->name('create-store');

    Route::post('create-store',[JSController::class,'handleFile'])->name('handleFile');
});
