<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryManagementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardContrller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\SingleProductContrller;
use App\Http\Controllers\TagManagementController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Routing\Router;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.homeDashboard');
    })->name('dashboard');
});
// singel product
Route::get('/product/name', [SingleProductContrller::class, 'index']);

// cart
Route::get('/cart', [CartController::class, 'index']);


/** Admin Panel */
// product managemnt
Route::get('/dashboard/product', [ProductManagementController::class, 'index']);
Route::get('/dashboard/product/create', [ProductManagementController::class, 'create']);
Route::post('/dashboard/product/create', [ProductManagementController::class, 'insert'])->name('product.insert');

// category managemnt
Route::get('/dashboard/category', [CategoryManagementController::class, 'index']);
Route::get('/dashboard/category/create', [CategoryManagementController::class, 'create']);
Route::post('/dashboard/category/create',[CategoryManagementController::class,'store']);

// tag managemnt
Route::get('/dashboard/tag', [TagManagementController::class, 'index']);
Route::get('dashboard/tag/create', [TagManagementController::class, 'create']);
Route::post('dashboard/tag/create',[TagManagementController::class,'store']);

// user managemnt
Route::get('/dashboard/user', [UserManagementController::class, 'index']);
Route::get('/dashboard/user/1', [UserManagementController::class, 'info']);
