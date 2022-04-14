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

Route::get('/', [App\Http\Controllers\WebController::class, 'index']);
Route::post('/', [App\Http\Controllers\WebController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');

Route::get('/post', [App\Http\Controllers\HomeController::class, 'index']);
Route::view('/addLicense', 'add');

Route::post('/addLicense', [App\Http\Controllers\HomeController::class, 'addLicense']);
Route::post('/updateLicense', [App\Http\Controllers\HomeController::class, 'updateLicense']);


