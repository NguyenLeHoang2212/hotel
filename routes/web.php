<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('test',function(){
    return view('test');
});
Route::get('test2',function(){
    return view('test2');
});
Route::get('master',function(){
    return view('client.layout.master');
});
Route::get('cart',function(){
    return view('client.pages.cart');
});
Route::get('blog',function(){
    return view('client.pages.blog');
});
Route::get('home',function(){
    return view('client.pages.home');
});
Route::get('admin/product',function(){
    return view('admin.pages.product.list');
});
Route::get('hero-section',function(){
    return view('client.pages.hero-section');
});
Route::get('productlist',function(){
    return view('admin.pages.product');
});
Route::get('detail',function(){
    return view('client.pages.blog.detail');
});
Route::get('admin',function(){
    return view('admin.layout.master');
});

// Route::get('admin/user',[UserController::class,'index'])->name('admin.user.list');;
// Route::get('admin/product_categories',[ProductCategory::class,'index'])->name('admin.product_category.list');
// Route::get('admin/product_categories/add',[ProductCategory::class,'add'])->name('admin.product_category.add');;
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('user',[UserController::class,'index'])->name('user.list');;
    Route::get('product_categories',[ProductCategoryController::class,'index'])->name('product_category.list');
    Route::get('product_categories/add',[ProductCategoryController::class,'add'])->name('product_category.add');;
    Route::post('product_categories/store', [ProductCategoryController::class, 'store'])->name('product_category.store');
    Route::get('product_categories/{id}',[ProductCategoryController::class,'detail'])->name('product_category.detail');;
    Route::post('product_categories/update/{id}',[ProductCategoryController::class,'update'])->name('product_category.update');;
    Route::get('product_categories/destroy/{id}',[ProductCategoryController::class,'destroy'])->name('product_category.destroy');;


    //Product

    Route::resource('product',ProductController::class);
    Route::post('product/create/slug',[ProductController::class,'createSlug'])->name('product.create.slug');
});




require __DIR__.'/auth.php';
