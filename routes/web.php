<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashoardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SendController;
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


Auth::routes();

//Route::get('/adlB', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/ho', [App\Http\Controllers\HomeController::class, 'log']);
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashoardController::class, 'index'] );

    /*....................... Gestion des utilisateurs......................*/

    Route::get('/utilisateur', [App\Http\Controllers\Admin\UserController::class, 'list'] )->name('utilisateur.list');
    Route::get('/createUser', [App\Http\Controllers\Admin\UserController::class, 'create'] )->name('utilisateur.create');

});

/*..........processus de changement de passe...........*/

Route::post('forget_password', [App\Http\Controllers\Admin\UserController::class, 'forget_password'])->name('forget_password'); 
 
Route::get('page_email', [App\Http\Controllers\SendController::class, 'page_email'])->name('page_email');

Route::get('forget_email', [App\Http\Controllers\SendController::class, 'forget_email']);

Route::get('forgot_password_change/{id}', [App\Http\Controllers\Admin\UserController::class, 'forgot_password_change']);
Route::post('forgot_password_change_process', [App\Http\Controllers\Admin\UserController::class, 'forgot_password_change_process'])->name('forget_password_process');;