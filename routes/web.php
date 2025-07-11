<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administration\LLGController;
use App\Http\Controllers\Administration\WardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::view('/', 'welcome');

Route::view('/', 'public.home');
Route::view('/about', 'public.about.about')->name('about');
Route::view('/about/mps-message', 'public.about.mps-message')->name('mps-message');
Route::view('/about/ceos-message', 'public.about.ceos-message')->name('ceos-message');

Route::view('/development-profile', 'public.development-profile.development-profile')->name('development-profile');
Route::view('/government','public.administration.government' )->name('government');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route for the LLG
Route::get('/administration/llgs', [LLGController::class, 'index'])->name('administration.llg-table');

// Route for the Ward
Route::get('administration/wards', [WardController::class, 'index'])->name('administration.ward-table');


require __DIR__.'/auth.php';
