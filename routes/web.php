<?php

use App\Http\Controllers\FormController;
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
Route::middleware(['auth'])(function () {

});
//!form contact
Route::post('/' , [FormController::class, 'index']);
Route::get('register', [FormController::class, 'index']);
Route::post('/login', [FormController::class, 'store']);
Route::get('login', [FormController::class, 'store'])->name('login');
