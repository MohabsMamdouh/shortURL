<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShorturlController;

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

Route::controller(App\Http\Controllers\ShorturlController::class)->group(function ()
{
    Route::get('/', 'index')->name('short.create');
    Route::post('/short', 'short')->name('short.url');
    Route::get('/{shortURL}', 'show')->name('short.show');
});
