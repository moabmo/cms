<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

// Define your


Route::middleware(['auth'])->group(function () {
    Route::get('/members', [MembersController::class, 'index'])->name('index');
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller('members', 'MembersController');
Route::get('/members/search', 'MembersController@search')->name('members.search');



require __DIR__.'/auth.php';

