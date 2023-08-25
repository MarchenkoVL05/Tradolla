<?php

use App\Http\Controllers\MainController;

use App\Http\Controllers\Catalog\CatalogController;
use App\Http\Controllers\Catalog\MyCatalogController;

use App\Http\Controllers\Procurement\ProcurementController;
use App\Http\Controllers\Procurement\MyProcurementController;

use Illuminate\Support\Facades\Route;


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

Route::get('/',[MainController::class, 'index'])->name('dashboard');

Route::get('/catalog',[CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/our',[MyCatalogController::class, 'index'])->name('catalog.our.index');
Route::get('/catalog/our/create', [MyCatalogController::class, 'create'])->name('catalog.our.create');
Route::post('/catalog/our', [MyCatalogController::class, 'store'])->name('catalog.our.store');

Route::get("/procurements", [ProcurementController::class, 'index'])->name('procurements');
Route::get('/procurements/our',[MyProcurementController::class, 'index'])->name('procurements.our.index');
Route::get('/procurements/our/create', [MyProcurementController::class, 'create'])->name('procurements.our.create');
Route::post('/procurements/our', [MyProcurementController::class, 'store'])->name('procurements.our.store');