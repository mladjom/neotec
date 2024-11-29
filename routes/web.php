<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', '\Aimeos\Shop\Controller\CatalogController@homeAction')->name('aimeos_home');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile/me', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/me', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/me', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
