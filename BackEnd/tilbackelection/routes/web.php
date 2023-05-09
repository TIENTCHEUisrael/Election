<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegionController;
use \App\Http\Controllers\ParticipantController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\VoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/region',[RegionController::class,'region'])->name('region');
Route::post('/region',[RegionController:: class,'regions'])->name('region_submit');
Route::get('/region_liste',[RegionController:: class,'create']);
Route::get('/region_delete/{id}',[RegionController:: class,'destroy']);
Route::get('/form_update_region/{id}',[RegionController:: class,'edit']);
Route::post('/form_update_region/region_update',[RegionController:: class,'updates']);


Route::get('/participant', function(){
    return view('participant');
});

Route::get('/participant',[ParticipantController::class,'participant']);
Route::post('/participant_inscrit',[ParticipantController::class,'store']);
Route::get('/participant_liste',[ParticipantController::class,'liste']);
Route::get('/participant_delete/{id}',[ParticipantController::class,'delete']);
Route::get('/participant_edit/{id}',[ParticipantController::class,'edit']);
Route::post('/participant_edit',[ParticipantController::class,'updates']);





Route::get('/home', [HomeController::class, 'index'])->name('home');
