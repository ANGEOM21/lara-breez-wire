<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::group(['middleware' => ['auth', 'verified', 'admin']], function () {
    Volt::route('user-management', 'pages.admin.user-management')
        ->name('user-management');
});
