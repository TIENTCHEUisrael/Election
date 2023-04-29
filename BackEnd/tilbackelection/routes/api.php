<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\REST\ParticipantController;
use \App\Http\Controllers\REST\RegionController;
use \App\Http\Controllers\REST\ElectionController;
use \App\Http\Controllers\REST\VoteController;
use \App\Http\Controllers\REST\BulletinController;

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
Route::apiResource("participant",ParticipantController::class);
//Route::get("onOff/{id}",[ParticipantController::class,"onOff"]);
Route::get('status/{id}',[ParticipantController::class, 'status']);
Route::apiResource('region',RegionController::class);
Route::apiResource('Election',ElectionController::class);
Route::apiResource('Vote',VoteController::class);
Route::apiResource('Bulletin',BulletinController::class);
