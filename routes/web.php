<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashoardController;
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

//Route::get('/', function () {
   // return view('welcome');
//});


Auth::routes();

//Route::get('/adlB', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/ho', [App\Http\Controllers\HomeController::class, 'log']);
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashoardController::class, 'index'] );
});