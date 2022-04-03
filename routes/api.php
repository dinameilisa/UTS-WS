<?php

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


Route::get('/data/2.5/weather?lat=51.509865&lon=-.118092&appid=d5e9e0b15bc259ab0f551f80782d1565', [\App\Http\Controllers\WrapperApiController::class, 'current'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('current');
Route::get('/data/2.5/onecall?lat=51.509865&lon=-.118092&exclude=minutely&appid=d5e9e0b15bc259ab0f551f80782d1565', [\App\Http\Controllers\WrapperApiController::class, 'call'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('call');
Route::get('/data/2.5/forecast?lat=51.509865&lon=-.118092&appid=d5e9e0b15bc259ab0f551f80782d1565&units=standard', [\App\Http\Controllers\WrapperApiController::class, 'day'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('day');
Route::get('/data/2.5/air_pollution?lat=51.509865&lon=-.118092&appid=d5e9e0b15bc259ab0f551f80782d1565', [\App\Http\Controllers\WrapperApiController::class, 'maps'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('maps');

Route::get('user/identitas', function () {
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006077',
            'nama' => 'Dina Meilisa Nuranbiya',
            'email' => '197006077@student.unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');
