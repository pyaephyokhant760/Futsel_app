<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\backend\GoalController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\CoachController;
use App\Http\Controllers\backend\MatchController;
use App\Http\Controllers\backend\LeagueController;
use App\Http\Controllers\backend\PlayerController;
use App\Http\Controllers\frontend\IndexController;

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
// });

Route::get('/language', [LanguageController::class, 'language'])->name('language.change');

Route::get('/',[AuthController::class,'login'])->name('login.index');
Route::post('/login',[AuthController::class,'getDataLogin'])->name('login.post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout.post');

Route::group(['middleware' => ['auth' ,'role:admin'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('admin.index');

    Route::resource('leagues', LeagueController::class);
    Route::post('delete-league', [LeagueController::class, 'destroy'])->name('league.delete');

    Route::resource('coachs',CoachController::class);
    Route::post('delete-coach', [CoachController::class, 'destroy'])->name('coach.delete');

    Route::resource('players', PlayerController::class);
    Route::post('delete-player', [PlayerController::class, 'destroy'])->name('player.delete');

    Route::resource('matches', MatchController::class);
    Route::post('delete-match', [MatchController::class, 'destroy'])->name('match.delete');

    Route::resource('teams', TeamController::class);
    Route::post('delete-team', [TeamController::class, 'destroy'])->name('team.delete');

    Route::resource('goals', GoalController::class);
    Route::post('delete-goal', [GoalController::class, 'destroy'])->name('goal.delete');
    
});

Route::prefix('user')->group(function() {
    Route::get('dashboard', [IndexController::class, 'index'])->name('coach.index');
    Route::get('match/{id}', [IndexController::class, 'matches'])->name('user.match');
});

