<?php

use App\Http\Controllers\MainController;

use App\Http\Controllers\Catalog\CatalogController;
use App\Http\Controllers\Catalog\OurCatalogController;
use App\Http\Controllers\Procurement\ProcurementController;
use App\Http\Controllers\Procurement\OurProcurementController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
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
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');

Route::get('/catalog',[CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/our',[OurCatalogController::class, 'index'])->name('catalog.our.index');
Route::get('/catalog/our/create', [OurCatalogController::class, 'create'])->name('catalog.our.create');
Route::post('/catalog/our', [OurCatalogController::class, 'store'])->name('catalog.our.store');

Route::get("/procurements", [ProcurementController::class, 'index'])->name('procurements');
Route::get("/procurements/orders", [OrderController::class, 'index'])->name('orders');
Route::get('/procurements/our',[OurProcurementController::class, 'index'])->name('procurements.our.index');
Route::get('/procurements/our/create', [OurProcurementController::class, 'create'])->name('procurements.our.create');
Route::post('/procurements/our', [OurProcurementController::class, 'store'])->name('procurements.our.store');
Route::get("/procurements/{offer}", [ProcurementController::class, 'show'])->name('procurements.show');

Route::get('/companies',[CompanyController::class, 'index'])->name('companies');

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');