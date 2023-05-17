<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMatchController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ZoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/sport', SportController::class);
Route::resource('/team', TeamController::class);
Route::resource('/teamMatch', TeamMatchController::class);
Route::resource('/schedule', ScheduleController::class);
Route::resource('/event', EventController::class);
Route::get('/event/search/{title}', [EventController::class, 'search']);
Route::resource('/stadium', StadiumController::class);
Route::resource('/zone', ZoneController::class);
Route::resource('/ticket', TicketController::class);
Route::resource('/match', MatchesController::class);


Route::fallback (function(){
    return 'Page not found.';
});
