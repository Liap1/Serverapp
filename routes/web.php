<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;

Route::group(['prefix' => '/info'], function () {

Route::get('/server', [InformationController::class, 'serverInfo']);
Route::get('/client', [InformationController::class, 'clientInfo']);
Route::get('/database', [InformationController::class, 'databaseInfo']);

});

Route::group(['prefix' => '/info'], function () {

Route::get('/server', [InformationController::class, 'serverInfo']);
Route::get('/client', [InformationController::class, 'clientInfo']);
Route::get('/database', [InformationController::class, 'databaseInfo']);

});
