<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/produto/store', [DashboardController::class, 'store'])->name('produto.store');
    
Route::get('/', function () {
    return view('welcome');
});

Route::post('/Cliente', [ClienteController::class, 'store']);


Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/produtos', function () {
    return view('produtos');
});
Route::get('/responsivo-teste', function () {
    return view('responsivo-teste');
});



