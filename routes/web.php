<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManageuserController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ListingSearchController;
use App\Http\Controllers\ProductDetailViewController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

// Route::get('/listing', function () {
//     return view('pages.listing');
// });

Route::get('/tips', function () {
    return view('pages.tips');
});


//manage user (CRUD)
Route::get('admin/manageusers',[ManageuserController::class, 'index'])->name('manageuser');

Route::get('admin/adduser',[ManageuserController::class, 'create'])->name('adduser');

Route::post('admin/insertdata',[ManageuserController::class, 'store'])->name('insertdata');

Route::get('/admin/edituserdata/{id}',[ManageuserController::class, 'update'])->name('edituserdata');

Route::post('/admin/updateuserdata/{id}',[ManageuserController::class, 'edit'])->name('updateuserdata');

Route::get('/admin/deleteuser/{id}',[ManageuserController::class, 'destroy'])->name('deleteuser');

// product
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/products', AdminProductController::class)->names([
        'index' => 'admin.products.manageproducts',
        'create' => 'admin.products.create',
        'store' => 'admin.products.store',
        'show' => 'admin.products.show',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'destroy' => 'admin.products.destroy'
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('user/products', UserProductController::class);
});

// Product Listing
Route::get('/listing', [ProductListController::class, 'index'])->name('products.listing');

// Search
Route::get('/search', [ListingSearchController::class, 'search'])->name('search');

// Product Detail view
Route::get('product/{id}', [ProductDetailViewController::class, 'show'])->name('product.detail');

