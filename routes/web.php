<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;



/* ======== Admin Routes ======== */
Route::get('admin/', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/dashboard', function(){dd(Session::all());});

Route::post('verify', [AdminController::class, 'verify'])->name('admin.verify');


/* ======== Client Routes ======== */

Route::get('/', function () {
    return view('index');
});


