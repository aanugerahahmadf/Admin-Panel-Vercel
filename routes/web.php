<?php

use App\Http\Controllers\LanguageSwitcherController;
use Illuminate\Support\Facades\Route;
use Native\Mobile\Facades\System;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/login', '/admin/login')->name('login');

Route::get('/mobile/settings', function () {
    System::appSettings();

    return back();
})->name('mobile.settings')->middleware(['auth']);

Route::get('/filament/language-switcher', [LanguageSwitcherController::class, 'index'])
    ->name('lang.switch');
