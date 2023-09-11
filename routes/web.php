<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::view('admin/dashboard', 'Admin.index')->name('admin.dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);


Route::get('admin/category', [CategoryController::class, 'index'])->name('admin.category.all');
Route::get('admin/category/show', [CategoryController::class, 'create'])->name('admin.category.show');
Route::post('admin/category/add', [CategoryController::class, 'store'])->name('admin.category.add');
Route::get('admin/category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('admin/category/edit/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('admin/category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');


Route::get('admin/product/show',  [ProductController::class, 'create'])->name('admin.product.show');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('productdetail');

Route::get('admin/product/all',  [ProductController::class, 'index'])->name('admin.product.all');
Route::Post('admin/product/add',  [ProductController::class, 'store'])->name('admin.product.store');
Route::put('admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');
Route::Post('admin/product/add',  [ProductController::class, 'store'])->name('admin.product.store');
Route::delete('admin/product/{product}', [ProductController::class, 'destroy'])->name('admin.product.delete');
Route::get('admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
