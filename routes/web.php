<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot');
Route::get('/email-confirm', [AuthController::class, 'emailConfirm'])->name('email-confirm');
Route::get('/phone-confirm', [AuthController::class, 'phoneConfirm'])->name('phone-confirm');
Route::get('/company-register', [AuthController::class, 'registerCompany'])->name('company-register');

Route::get('/',[MainController::class, 'index'])->name('dashboard');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');

Route::prefix('catalog')->group(function() {
    Route::get('/',[CatalogController::class, 'index'])->name('catalog');
    Route::get('/our',[OurCatalogController::class, 'index'])->name('catalog.our');
    Route::get('/our/create', [OurCatalogController::class, 'create'])->name('catalog.our.create');
    Route::post('/our', [OurCatalogController::class, 'store'])->name('catalog.our.store');
    Route::get('/{product}',[CatalogController::class, 'show'])->name('catalog.show');
});


Route::prefix('procurements')->group(function() {
    Route::get("/", [ProcurementController::class, 'index'])->name('procurements');
    Route::get("/orders", [OrderController::class, 'index'])->name('procurements.orders');
    Route::get("/orders/{order}", [OrderController::class, 'show'])->name('procurements.orders.show');
    Route::get('/our',[OurProcurementController::class, 'index'])->name('procurements.our');
    Route::get('/our/create', [OurProcurementController::class, 'create'])->name('procurements.our.create');
    Route::post('/our', [OurProcurementController::class, 'store'])->name('procurements.our.store');
    Route::get("/{procurement}", [ProcurementController::class, 'show'])->name('procurements.show');
    Route::get("/{procurement}/create", [OrderController::class, 'create'])->name('procurements.orders.create');
});

Route::prefix('companies')->group(function() {
    Route::get('/',[CompanyController::class, 'index'])->name('companies');
    Route::get('/{company}',[CompanyController::class, 'show'])->name('companies.show');
});

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');