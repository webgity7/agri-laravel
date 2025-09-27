<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\CustomerController;
use App\Models\Admin\Admin;
use Illuminate\Contracts\View\View;

/* ======== Admin Routes ======== */

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::post('/verify', [AdminController::class, 'verify'])->name('verify');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    // Admin Listing Routes
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory');
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/discount', [DiscountController::class, 'index'])->name('discount');
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');

    // Admin Category Routes
    Route::get('/category/add', [CategoryController::class, 'add'])->name('add.category');
    Route::get('/category/edit', [CategoryController::class, 'edit'])->name('edit.category');

    //Admin Subcategory Routes
    Route::get('/subcategory/add', [SubcategoryController::class, 'add'])->name('add.subcategory');
    Route::get('/subcategory/edit', [SubcategoryController::class, 'edit'])->name('edit.subcategory');


});





/* ======== Client Routes ======== */

Route::get('/', function () {
    return view('index');
});
