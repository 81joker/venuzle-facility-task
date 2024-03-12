<?php

use App\Livewire\Auth\Login;
use App\Livewire\ShowVenues;
use App\Livewire\Auth\Verify;
use App\Livewire\IndexVenues;
use App\Livewire\Auth\Register;
use App\Livewire\ShowFacilities;
use App\Livewire\IndexFacilities;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
    // Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');
    // Route::get('/facilities/{id}', [FacilityController::class, 'show'])->name('facilities.show');
    // Route::get('/venues', [VenueController::class, 'index'])->name('venues.index');
    // Route::get('/venues/{id}', [VenueController::class, 'show'])->name('venues.show');
         Route::get('/facilities', IndexFacilities::class)->name('facilities.index');
        Route::get('/facilities/{facility}', ShowFacilities::class)->name('facilities.show');
         Route::get('/venues', IndexVenues::class)->name('venues.index');
        Route::get('/venue/{venue}', ShowVenues::class)->name('venue.show');



});
