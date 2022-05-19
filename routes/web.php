<?php

use App\Http\Controllers\BaseController;
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

Route::view('/', 'app.auth.login');
Route::post(
    uri: 'login',
    action: [\App\Http\Controllers\Web\Auth\LoginController::class, 'login']
)->name('login');

Route::get('/qr', [BaseController::class, 'create']);
Route::post('/store', [BaseController::class, 'store'])->name('store');
Route::get('/qr2', [BaseController::class, 'create2']);
Route::post('/store2', [BaseController::class, 'store2'])->name('store2');
