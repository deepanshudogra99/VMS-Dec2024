<?php

use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');

Route::middleware(['auth'])->group(function () {
  Route::get('/usermanagement', [SuperAdminController::class, 'usermanagement'])->name('usermanagement');



});

