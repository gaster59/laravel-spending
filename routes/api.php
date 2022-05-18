<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\EarningController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::get('api', [ApiController::class, 'index'])->middleware('auth:sanctum');

Route::get('earning', [EarningController::class, 'index'])
    ->name('earning-index')
    ->middleware('auth:sanctum');
Route::post('earning/add', [EarningController::class, 'add'])
    ->name('earning-add')
    ->middleware('auth:sanctum');
