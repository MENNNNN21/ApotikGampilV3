<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Auth;


Auth::routes();
// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
// Services Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services'); // Perbaikan nama route
Route::get('/services/whatsapp/{id}', [ServiceController::class, 'redirectToWhatsApp'])->name('services.whatsapp');

Route::get('/articles', [ArtikelController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArtikelController::class, 'show'])->name('articles.show');
Route::get('/consultation', [KonsultasiController::class, 'index'])->name('consultation.index');
Route::post('/consultation', [KonsultasiController::class, 'submit'])->name('consultation.submit');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/category/{slug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
});




// Admin routes
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\KategoriController::class);
});



Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// web.php
