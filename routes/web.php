<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LeagueController;

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
// });

Route::get('/',[LeagueController::class,'index'])->name('leaguage#index');
