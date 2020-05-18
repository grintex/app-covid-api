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

Route::get('/ping', 'PingController@index')->name('ping.index');
Route::get('/stats', 'StatsController@index')->name('stats.index');
Route::post('/analytics', 'AnalyticsController@store')->name('analytics.store');
