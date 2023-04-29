 <?php 

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryManagementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SingleProductContrller;
use App\Http\Controllers\UserManagementController;
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

Route::get('/dashboard', function () {
     return view('dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () { 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// singel product
Route::get('/product/{id}', [SingleProductContrller::class, 'index'])->name('product.info');

// cart
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/{id}',[CartController::class,'addToCart'])->name('cart.add');
Route::get('plus-cart/{id}',[CartController::class,'plusCart'])->name('cart.plus-cart');
Route::get('minus-cart/{id}',[CartController::class,'minusCart'])->name('cart.minus-cart');
Route::get('remove-cart/{id}',[CartController::class,'removeCart'])->name('cart.remove-cart');


/** Admin Panel */
// product managemnt
Route::get('/dashboard/product', [ProductManagementController::class, 'index']);
Route::get('/dashboard/product/create', [ProductManagementController::class, 'create']);
Route::post('/dashboard/product/create', [ProductManagementController::class, 'insert'])->name('product.insert');
/** update product */
Route::get('/dashboard/product/update/{id}',[ProductManagementController::class,'edit'])->name('product.edit');
Route::post('/dashboard/product/update/{id}',[ProductManagementController::class,'update'])->name('product.update');
/** delete */
Route::get('/dashboard/product/delete/{id}',[ProductManagementController::class,'delete'])->name('product.delete');

Route::get('/dashboard/product/remove-image/{id}',[ProductManagementController::class,'removeImage'])->name('product.remove.image');

// category managemnt
Route::get('/dashboard/category', [CategoryManagementController::class, 'index']);
Route::get('/dashboard/category/create', [CategoryManagementController::class, 'create']);
 Route::post('/dashboard/category/create',[CategoryManagementController::class,'store']); 
/** update category */
Route::get('/dashboard/category/update/{id}',[CategoryManagementController::class,'edit'])->name('category.edit');
Route::post('/dashboard/category/update/{id}',[CategoryManagementController::class,'update'])->name('category.update');
/** delete */
Route::get('/dashboard/category/delete/{id}',[CategoryManagementController::class,'delete'])->name('category.delete');

// tag managemnt
 Route::get('/dashboard/tag', [TagManagementController::class, 'index']);
Route::get('dashboard/tag/create', [TagManagementController::class, 'create']);
Route::post('dashboard/tag/create',[TagManagementController::class,'store']);
/** update product */
Route::get('/dashboard/tag/update/{id}',[TagManagementController::class,'edit'])->name('tag.edit');
Route::post('/dashboard/tag/update/{id}',[TagManagementController::class,'update'])->name('tag.update');
/** delete */
Route::get('/dashboard/tag/delete/{id}',[TagManagementController::class,'delete'])->name('tag.delete');




// user managemnt
Route::get('/dashboard/user', [UserManagementController::class, 'index']);
Route::get('/dashboard/user/1', [UserManagementController::class, 'info']);

// 
