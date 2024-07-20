<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/items', [ApiController::class, 'index']);
Route::get('/ranges', [ApiController::class, 'rage']);
Route::get('/closes', [ApiController::class, 'close']);
Route::get('/floors', [ApiController::class, 'floor']);
Route::get('/playlist', [ApiController::class, 'playlist']);
Route::get('/playlistinfo/{id}', [ApiController::class, 'playlistInfor']);
Route::get('/search/{text}', [ApiController::class, 'search']);
