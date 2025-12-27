<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\VerificationController;

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

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/manufacturing', [HomeController::class, 'manufacturing'])->name('manufacturing');
Route::get('/sustainability', [HomeController::class, 'sustainability'])->name('sustainability');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Product Routes
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // Batch Routes
    Route::get('/admin/batches', [BatchController::class, 'index'])->name('admin.batches.index');
    Route::get('/admin/batches/create', [BatchController::class, 'create'])->name('admin.batches.create');
    Route::post('/admin/batches', [BatchController::class, 'store'])->name('admin.batches.store');
    Route::get('/admin/batches/{batch}/edit', [BatchController::class, 'edit'])->name('admin.batches.edit');
    Route::put('/admin/batches/{batch}', [BatchController::class, 'update'])->name('admin.batches.update');
    Route::delete('/admin/batches/{batch}', [BatchController::class, 'destroy'])->name('admin.batches.destroy');

    // QR Code Routes
    Route::get('/admin/qrcodes', [QRCodeController::class, 'index'])->name('admin.qrcodes.index');
    Route::get('/admin/qrcodes/create', [QRCodeController::class, 'create'])->name('admin.qrcodes.create');
    Route::post('/admin/qrcodes/generate', [QRCodeController::class, 'generate'])->name('admin.qrcodes.generate');
    Route::get('/admin/qrcodes/{batch}/export', [QRCodeController::class, 'export'])->name('admin.qrcodes.export');
    Route::get('/admin/qrcodes/{batch}/print', [QRCodeController::class, 'print'])->name('admin.qrcodes.print');
});

// Verification Route
Route::get('/verify/{token}', [VerificationController::class, 'verify'])->name('verify');