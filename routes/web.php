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

Route::prefix('catalog')->name('catalog.')->group(function() {
    Route::get('/',[CatalogController::class, 'index'])->name('index');
    Route::get('/our',[OurCatalogController::class, 'index'])->name('our');
    Route::get('/our/create', [OurCatalogController::class, 'create'])->name('our.create');
    Route::post('/our', [OurCatalogController::class, 'store'])->name('our.store');
    Route::get('/{product}',[CatalogController::class, 'show'])->name('show');
});


Route::prefix('procurements')->name('procurements.')->group(function() {
    Route::get("/", [ProcurementController::class, 'index'])->name('index');
    Route::get("/orders", [OrderController::class, 'index'])->name('orders');
    Route::get("/orders/{order}", [OrderController::class, 'show'])->name('orders.show');
    Route::get('/our',[OurProcurementController::class, 'index'])->name('our');
    Route::get('/our/create', [OurProcurementController::class, 'create'])->name('our.create');
    Route::post('/our', [OurProcurementController::class, 'store'])->name('our.store');
    Route::get("/{procurement}", [ProcurementController::class, 'show'])->name('show');
    Route::get("/{procurement}/create", [OrderController::class, 'create'])->name('orders.create');
});

Route::prefix('companies')->name('companies.')->group(function() {
    Route::get('/',[CompanyController::class, 'index'])->name('index');
    Route::get('/{company}',[CompanyController::class, 'show'])->name('show');
});

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');