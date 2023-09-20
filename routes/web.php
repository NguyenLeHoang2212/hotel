<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
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
Route::get('cart',function(){
    return view('client.pages.cart');
});
Route::get('foods',function(){
    return view('client.pages.menu.food');
});
Route::get('drinks',function(){
    return view('client.pages.menu.drink');
});
Route::get('blog-category',function(){
    return view('client.pages.blog.blog-category');
});
Route::get('blog-item',function(){
    return view('client.pages.blog.blog-item');
});

Route::get('activities',function(){
    return view('client.pages.facilities.activities');
});
Route::get('facility',function(){
    return view('client.pages.facility');
});
Route::get('contact',function(){
    return view('client.pages.contact');
});
Route::get('reservation-1',function(){
    return view('client.pages.booking.step1');
});
Route::get('reservation-2',function(){
    return view('client.pages.booking.step2');
});
Route::get('reservation-3',function(){
    return view('client.pages.booking.step3');
});
Route::get('about',function(){
    return view('client.pages.room.aboutus');
});
Route::get('rooms-category',function(){
    return view('client.pages.room.roomcategory');
});
Route::get('room-overview',function(){
    return view('client.pages.room.roomoverview');
});
Route::get('404',function(){
    return view('client.pages.room.404notfound');
});
Route::get('shortcodes',function(){
    return view('client.pages.room.shortcodes');
});

Route::get('bookingintro',function(){
    return view('client.pages.home.home-bookingintro');
});
Route::get('bookingbox',function(){
    return view('client.pages.home.home-bookingbox');
});
Route::get('roomsintro',function(){
    return view('client.pages.home.home-roomsintro');
});
Route::get('/',function(){
    return view('client.pages.home.home-bookingintro');
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
Route::prefix('admin')->name('admin.')->middleware('auth.admin')->group(function(){
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
    Route::post('product/ckediter-upload-image',[ProductController::class,'uploadImage'])->name('product.ckedit.upload.image');
});

Route::prefix('client')->name('client.')->group(function(){
    // Route::get('user',[UserController::class,'index'])->name('user.list');;
    // Route::get('product_categories',[ProductCategoryController::class,'index'])->name('product_category.list');
    // Route::get('product_categories/add',[ProductCategoryController::class,'add'])->name('product_category.add');;
    // Route::post('product_categories/store', [ProductCategoryController::class, 'store'])->name('product_category.store');
    // Route::get('product_categories/{id}',[ProductCategoryController::class,'detail'])->name('product_category.detail');;
    // Route::post('product_categories/update/{id}',[ProductCategoryController::class,'update'])->name('product_category.update');;
    // Route::get('product_categories/destroy/{id}',[ProductCategoryController::class,'destroy'])->name('product_category.destroy');;


    //Product

    Route::resource('product',ClientProductController::class);
    Route::post('product/create/slug',[ClientProductController::class,'createSlug'])->name('product.create.slug');
    Route::post('product/ckediter-upload-image',[ClientProductController::class,'uploadImage'])->name('product.ckedit.upload.image');
});


require __DIR__.'/auth.php';