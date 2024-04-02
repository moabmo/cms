<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactFormController;

Route::get('/contact-us', [ContactUsController::class, 'show']);

Route::get('/about-us', function () {return view('about');})->name('about');
Route::get('/ministry', function () {return view('ministry');})->name('ministry');
Route::get('/events', function () {return view('events');})->name('events');
Route::get('/worship-service', function() {return view('worship-service');})->name('worship-service');
Route::get('/leadership', function () {return view('leadership');})->name('leadership');
Route::get('/giving',function () {return view('giving');})->name('giving');



Route::post('/submit-contact', [ContactFormController::class, 'submit']);


use App\Http\Controllers\SmsLogController;

Route::get('/send-sms', [SmsLogController::class, 'sendSms']);

Route::get('/members', [MemberController::class, 'index']);


// Route::get('/', [MembersController::class, 'index'])->name('index');

// Route::middleware(['auth'])->group(function () {
//     Route::resource('/members', MembersController::class);
// });




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

// Route::controller('members', 'MembersController');
// Route::get('/members/search', 'MembersController@search')->name('members.search');



require __DIR__.'/auth.php';

