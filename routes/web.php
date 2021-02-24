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

Route::resource('clientes', App\Http\Controllers\CustomerController::class)->names('customer')->parameters(['clientes' => 'customer'])->middleware('isLogged');
Route::resource('tecnicos', App\Http\Controllers\ExpertController::class)->names('expert')->parameters(['tecnicos' => 'expert'])->middleware('isLogged');
Route::resource('produtos', App\Http\Controllers\ProductController::class)->names('product')->parameters(['produtos' => 'product'])->middleware('isLogged');
Route::resource('servicos', App\Http\Controllers\ServiceController::class)->names('service')->parameters(['servicos' => 'service'])->middleware('isLogged');
Route::resource('aparelhos', App\Http\Controllers\DeviceController::class)->names('device')->parameters(['aparelhos' => 'device'])->middleware('isLogged');
Route::resource('marcas', App\Http\Controllers\BrandController::class)->names('brand')->parameters(['marcas' => 'brand'])->middleware('isLogged');
Route::resource('modelos', App\Http\Controllers\TemplateController::class)->names('template')->parameters(['modelos' => 'template'])->middleware('isLogged');
Route::resource('situacoes', App\Http\Controllers\SituationController::class)->names('situation')->parameters(['situacoes' => 'situation'])->middleware('isLogged');
Route::resource('itemServicos', App\Http\Controllers\ItemServiceController::class)->names('itemService')->parameters(['itemServicos' => 'itemService'])->middleware('isLogged');

Route::post('service/situation/', [\App\Http\Controllers\ServiceSituationController::class, 'store'])->name('servicesituation.store')->middleware('isLogged');
Route::post('service/product/', [\App\Http\Controllers\ServiceProductController::class, 'store'])->name('serviceproduct.store')->middleware('isLogged');
Route::delete('service/{serviceid}/product/{productid}', [\App\Http\Controllers\ServiceProductController::class, 'destroy'])->name('serviceproduct.destroy')->middleware('isLogged');
Route::delete('service/{serviceid}/situation/{situationid}', [\App\Http\Controllers\ServiceSituationController::class, 'destroy'])->name('servicesituation.destroy')->middleware('isLogged');
Route::name('json.')->group(function (){
    Route::get('/produto/{id}', [\App\Http\Controllers\ProductController::class, 'productjson'])->name('produto')->middleware('isLogged');
});
Route::get('service/cancel/finished/{serviceid}', [\App\Http\Controllers\ServiceController::class, 'cancelFinished'])->name('service.cancelfinished')->middleware('isLogged');
Route::get('service/cancel/approval/{serviceid}', [\App\Http\Controllers\ServiceController::class, 'cancelApproval'])->name('service.cancelapproval')->middleware('isLogged');


Route::get('service/approval/{id}', [\App\Http\Controllers\ServiceController::class, 'approvalService'])->name('service.approval');
Route::get('service/sendemail/approval/{id}', [\App\Http\Controllers\ServiceController::class, 'enviarEmailSolicitarAprovacao'])->name('service.sendemailapproval');

Route::get('service/sendemail/finished/{id}', [\App\Http\Controllers\ServiceController::class, 'enviarEmailComunicarFinalizacao'])->name('service.sendemailfinished');
