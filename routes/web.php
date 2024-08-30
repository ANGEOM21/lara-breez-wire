<?php

use App\Livewire\Pages\Dashboard;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::redirect('/', '/dashboard');

/**
 * Web Routes
 */
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Volt::route('profile', 'pages.profile')->name('profile');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
