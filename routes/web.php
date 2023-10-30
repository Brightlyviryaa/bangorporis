<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
});

Route::fallback(function () {
    return "<h1>404 Not Found or Still on Process</h1>";
});