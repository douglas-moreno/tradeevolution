<?php

use App\Livewire\Plan\CreatePlan;
use App\Livewire\Plan\ListPlan;
use App\Livewire\Plan\ShowPlan;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/plan', ListPlan::class)->name('plan.index');
    Route::get('/plan/create', CreatePlan::class)->name('plan.create');
    Route::get('/plan/{plan}/show', ShowPlan::class)->name('plan.show');
});

require __DIR__.'/auth.php';
