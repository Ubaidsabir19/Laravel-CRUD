<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class , 'index'])->name('index');

Route::get('/products/create', [ProductController::class , 'create'])->name('create');

Route::post('/products/store', [ProductController::class , 'store'])->name('store');

Route::get('/products/{id}/edit', [ProductController::class , 'edit'])->name('edit');

Route::put('/products/{id}/update', [ProductController::class , 'update'])->name('update');

Route::get('/products/{id}/delete', [ProductController::class , 'destroy'])->name('delete');