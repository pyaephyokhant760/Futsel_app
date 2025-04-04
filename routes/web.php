<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\backend\LeagueController;
use App\Http\Controllers\backend\HomeController;

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
// });

Route::get('/language', [LanguageController::class, 'language'])->name('language.change');

Route::get('/',[AuthController::class,'login'])->name('login.index');
Route::post('/login',[AuthController::class,'getDataLogin'])->name('login.post');

Route::get('dashboard', [HomeController::class, 'index'])->name('admin.index');
Route::resource('leagues', LeagueController::class);
