<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin:admin')->group(function(){
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth:admin');
    Route::get('/admin/profile', function () {
        return view('admin.profile.show');
    })->name('admin.profile.show')->middleware('auth:admin');
    Route::get('/admin/crud', function () {
        return view('admin.crud');
    })->name('admin.crud')->middleware('auth:admin');


    Route::group(['prefix' => '/admin/CRUDproducts'], function() {
        Route::get('/', [ProductController::class, 'indexCRUD'])->name('admin.CRUDproducts.products.index');
        Route::get('/create',[ProductController::class, 'create'])->name('admin.CRUDproducts.products.create');
        Route::post('/create',[ProductController::class, 'store'])->name('admin.CRUDproducts.products.store');
        Route::get('/{product}/show',[ProductController::class, 'show'])->name('admin.CRUDproducts.products.show');
        Route::get('/{product}/edit',[ProductController::class, 'edit'])->name('admin.CRUDproducts.products.edit');
        Route::patch('/{product}/update',[ProductController::class, 'updateProduct'])->name('admin.CRUDproducts.products.update');
        Route::delete('/{product}/delete',[ProductController::class, 'destroy'])->name('admin.CRUDproducts.products.destroy');
        });
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified'
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/magazin', [ProductController::class, 'index']);
    Route::get('cart', [ProductController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
});
