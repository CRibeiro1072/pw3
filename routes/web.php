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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

/*Route::get('/', [UserAuthController::class, 'home'])->middleware('auth');
Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('user.create');
Route::post('check', [UserAuthController::class, 'check'])->name('user.check');
Route::get('logout', [UserAuthController::class, 'logout']);*/

Route::get('home', [UserAuthController::class, 'home'])->middleware('auth');

Route::resource('clientes', App\Http\Controllers\CustomerController::class)->names('customer')->parameters(['clientes' => 'customer'])->middleware('auth');
Route::resource('tecnicos', App\Http\Controllers\ExpertController::class)->names('expert')->parameters(['tecnicos' => 'expert'])->middleware('auth');
Route::resource('produtos', App\Http\Controllers\ProductController::class)->names('product')->parameters(['produtos' => 'product'])->middleware('auth');
Route::resource('servicos', App\Http\Controllers\ServiceController::class)->names('service')->parameters(['servicos' => 'service'])->middleware('auth');
Route::resource('aparelhos', App\Http\Controllers\DeviceController::class)->names('device')->parameters(['aparelhos' => 'device'])->middleware('auth');
Route::resource('marcas', App\Http\Controllers\BrandController::class)->names('brand')->parameters(['marcas' => 'brand'])->middleware('auth');
Route::resource('modelos', App\Http\Controllers\TemplateController::class)->names('template')->parameters(['modelos' => 'template'])->middleware('auth');
Route::resource('situacoes', App\Http\Controllers\SituationController::class)->names('situation')->parameters(['situacoes' => 'situation'])->middleware('auth');
Route::resource('itemServicos', App\Http\Controllers\ItemServiceController::class)->names('itemService')->parameters(['itemServicos' => 'itemService'])->middleware('auth');

Route::post('service/situation/', [\App\Http\Controllers\ServiceSituationController::class, 'store'])->name('servicesituation.store')->middleware('auth');
Route::post('service/product/', [\App\Http\Controllers\ServiceProductController::class, 'store'])->name('serviceproduct.store')->middleware('auth');
Route::delete('service/{serviceid}/product/{productid}', [\App\Http\Controllers\ServiceProductController::class, 'destroy'])->name('serviceproduct.destroy')->middleware('auth');
Route::delete('service/{serviceid}/situation/{situationid}', [\App\Http\Controllers\ServiceSituationController::class, 'destroy'])->name('servicesituation.destroy')->middleware('auth');
Route::name('json.')->group(function (){
    Route::get('/produto/{id}', [\App\Http\Controllers\ProductController::class, 'productjson'])->name('produto')->middleware('auth');
});
Route::get('service/cancel/finished/{serviceid}', [\App\Http\Controllers\ServiceController::class, 'cancelFinished'])->name('service.cancelfinished')->middleware('auth');
Route::get('service/cancel/approval/{serviceid}', [\App\Http\Controllers\ServiceController::class, 'cancelApproval'])->name('service.cancelapproval')->middleware('auth');


Route::get('service/approval/{id}', [\App\Http\Controllers\ServiceController::class, 'approvalService'])->name('service.approval');
Route::get('service/sendemail/approval/{id}', [\App\Http\Controllers\ServiceController::class, 'enviarEmailSolicitarAprovacao'])->name('service.sendemailapproval');

Route::get('service/sendemail/finished/{id}', [\App\Http\Controllers\ServiceController::class, 'enviarEmailComunicarFinalizacao'])->name('service.sendemailfinished');


require __DIR__.'/auth.php';
