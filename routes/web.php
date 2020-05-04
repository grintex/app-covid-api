<?php

use Illuminate\Support\Facades\Route;

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

// This is an "API-only" web-app, meaning that no web routes other
// than the REST ones exist. Please refer to the api.php file.

Route::get('/', function () {
    return view('welcome');
});
