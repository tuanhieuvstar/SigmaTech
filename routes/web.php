<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GpuController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\SaleController;

Auth::routes();

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
  Route::get('/', [UserController::class, 'index'])->name('home.index');
});
Route::middleware(['auth', AuthAdmin::class])->group(function () {
  Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('laptops/Gaming', [LaptopController::class, 'showGamingLaptops'])
  ->name('gaming-laptops.show');

Route::get('laptops/Office', [LaptopController::class, 'showOfficeLaptops'])
  ->name('office-laptops.show');

Route::get('flash-sale', [SaleController::class, 'showFlashSale'])
  ->name('flash-sale');

Route::get('cpus', [CpuController::class, 'showCpus'])
  ->name('cpus.show');

Route::get('gaming-gears', function () {
  return view('categories.gaming-gears');
})->name('categories.gaming-gears');
Route::get('monitors', function () {
  return view('categories.monitors');
})->name('categories.monitors');
Route::get('pc-parts', function () {
  return view('categories.pc-parts');
})->name('categories.pc-parts');
Route::get('media-devices', function () {
  return view('categories.media-devices');
})->name('categories.media-devices');
Route::get('coolings', function () {
  return view('categories.coolings');
})->name('categories.coolings');
Route::get('accessories', function () {
  return view('categories.accessories');
})->name('categories.accessories');

Route::get('shipping-policy', function () {
  return view('pages.service-policy.shipping-policy');
})->name('pages.shipping-policy');
Route::get('warranty-policy', function () {
  return view('pages.service-policy.warranty-policy');
})->name('pages.warranty-policy');
Route::get('laptop-outlet', function () {
  return view('pages.laptop-outlet');
})->name('pages.laptop-outlet');
Route::get('account', function () {
  return view('user-account');
})->name('user-account');

//admin view
Route::get('admin/new-product', function () {
  return view('admin.pages.new-product');
})->name('new-product');

//single laptop
Route::get('laptops/{type}/{brand}/{id}', [LaptopController::class, 'show'])->name('laptop.show');



//cart
Route::get('/cart', [CartController::class, 'show'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/{product_type}/{product_id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{product_type}/{product_id}', [CartController::class, 'remove'])->name('cart.remove');
Route::patch('/cart/update-bulk', [CartController::class, 'updateBulkQuantity'])->name('cart.updateBulkQuantity');
Route::get('/cart/count', [CartController::class, 'cartCount'])->name('cart.count');


//single cpu
Route::get('cpu/{brand}/{id}', [CpuController::class, 'show'])->name('cpu.show');

//single gpu
Route::get('gpu/{brand}/{id}', [GpuController::class, 'show'])->name('gpu.show');
