<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; //ユーザ認証を追加

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('contact.create');

Route::get('/contacts/edit/{contact}', [App\Http\Controllers\HomeController::class, 'edit'])->name('contact.edit');

Route::post('/contacts', [App\Http\Controllers\HomeController::class, 'store'])->name('contact.store');

Route::delete('/contacts/{contact}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('contact.destroy');

Route::put('/contacts/{contact}', [App\Http\Controllers\HomeController::class, 'update'])->name('contact.update');