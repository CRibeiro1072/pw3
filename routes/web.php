<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

Route::get('/', [UserAuthController::class, 'home'])->middleware('isLogged');
Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('user.create');
Route::post('check', [UserAuthController::class, 'check'])->name('user.check');
Route::get('home', [UserAuthController::class, 'home'])->middleware('isLogged');
Route::get('logout', [UserAuthController::class, 'logout']);

Route::resource('clientes', App\Http\Controllers\CustomerController::class)->names('customer')->parameters(['clientes' => 'customer'])->middleware('isLogged');;
Route::resource('tecnicos', App\Http\Controllers\ExpertController::class)->names('expert')->parameters(['tecnicos' => 'expert'])->middleware('isLogged');;
Route::resource('produtos', App\Http\Controllers\ProductController::class)->names('product')->parameters(['produtos' => 'product'])->middleware('isLogged');;
Route::resource('aparelhos', App\Http\Controllers\GadgetController::class)->names('gadget')->parameters(['aparelhos' => 'gadget'])->middleware('isLogged');;
Route::resource('servicos', App\Http\Controllers\ServiceController::class)->names('service')->parameters(['servicos' => 'service'])->middleware('isLogged');;
