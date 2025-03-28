<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\admin\LeagueController;
use App\Http\Controllers\backend\HomeController;

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
// });
Route::get('/',[HomeController::class,'index'])->name('leaguage#index');
Route::get('/language', [LanguageController::class, 'language'])->name('language.change');
