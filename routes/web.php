<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\TotalOrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\AdminController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckOutRoomController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\GoogleController;
use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\Client\ListBookingController;

use Illuminate\Support\Facades\Route;
use App\Mail\MailToCustomer;

use Illuminate\Support\Facades\Mail;


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
// Route::get('reservation-1',function(){
//     return view('client.pages.booking.step1');
// });
// Route::get('reservation-2',function(){
//     return view('client.pages.booking.step2');
// });
// Route::get('reservation-3',function(){
//     return view('client.pages.booking.step3');
// });
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


// Route::get('/',function(){
//     return view('client.pages.home.home-bookingintro');
// });
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


Route::prefix('admin')->name('admin.')->middleware('auth.admin')->group(function(){
    Route::get('user',[UserController::class,'index'])->name('user.list');;
    Route::get('product_categories',[ProductCategoryController::class,'index'])->name('product_category.list');
    Route::get('product_categories/add',[ProductCategoryController::class,'add'])->name('product_category.add');;
    Route::post('product_categories/store', [ProductCategoryController::class, 'store'])->name('product_category.store');
    Route::get('product_categories/{product_category}',[ProductCategoryController::class,'detail'])->name('product_category.detail');;
    Route::post('product_categories/update/{product_category}',[ProductCategoryController::class,'update'])->name('product_category.update');;


    //Product
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('product',ProductController::class);
    Route::post('product/create/slug',[ProductController::class,'createSlug'])->name('product.create.slug');
    Route::get('product/{product}/restore',[ProductController::class,'restore'])->name('product.restore');
    Route::post('product/ckediter-upload-image',[ProductController::class,'uploadImage'])->name('product.ckedit.upload.image');

    //Room

    Route::resource('room',RoomController::class);
    Route::get('room/{room}/restore',[RoomController::class,'restore'])->name('room.restore');
    Route::post('room/ckediter-upload-image',[RoomController::class,'uploadImage'])->name('room.ckedit.upload.image');


    // ----------------------------- booking -----------------------------//
    Route::get('allbooking', [BookingController::class, 'allbooking'])->middleware('auth')->name('allbooking');
    Route::get('booking/edit/{bkg_id}', [BookingController::class, 'bookingEdit']);
    Route::get('booking/add', [BookingController::class, 'bookingAdd'])->middleware('auth')->name('booking.add');

    Route::post('booking/save', [BookingController::class, 'saveRecord'])->name('booking.save');
    Route::post('booking/update', [BookingController::class, 'updateRecord'])->middleware('auth')->name('booking.update');
    Route::get('booking/delete/{bkg_id}', [BookingController::class, 'deleteRecord'])->middleware('auth')->name('booking.delete');

    // ----------------------------- customers -----------------------------//
    Route::get('allcustomers', [CustomerController::class, 'allCustomers'])->middleware('auth')->name('allcustomers');
    Route::get('addcustomer', [CustomerController::class, 'addCustomer'])->middleware('auth')->name('addcustomer');
    Route::post('addcustomer/save', [CustomerController::class, 'saveCustomer'])->name('addcustomer.save');
    Route::get('customer/edit/{bkg_customer_id}', [CustomerController::class, 'updateCustomer']);
    Route::post('customer/update', [CustomerController::class, 'updateRecord'])->middleware('auth')->name('customer.update');
    Route::get('customer/delete/{bkg_customer_id}', [CustomerController::class, 'deleteRecord'])->middleware('auth')->name('customer.delete');


    // order

    Route::get('orders', [TotalOrderController::class, 'showOrders'])->name('orders');
    Route::get('order-items/{order}', [TotalOrderController::class, 'showOrderItems'])->name('order-items');
    Route::get('payments/{order}', [TotalOrderController::class, 'showOrderPayments'])->name('payments');
    Route::post('orders/destroy/{order}', [TotalOrderController::class, 'destroy'])->name('orders.destroy');
    Route::get('orders/restore/{order}', [TotalOrderController::class, 'restore'])->name('orders.restore');

    Route::post('order-items/destroy/{id}', [TotalOrderController::class, 'destroyOrderItem'])->name('order-items.destroy');
    Route::get('order-items/restore/{id}', [TotalOrderController::class, 'restoreOrderItem'])->name('order-items.restore');

    Route::post('payments/destroy/{id}', [TotalOrderController::class, 'destroyPayment'])->name('payments.destroy');
    Route::get('payments/restore/{id}', [TotalOrderController::class, 'restorePayment'])->name('payments.restore');

    Route::get('orders/update/{order}', [TotalOrderController::class, 'update'])->name('orders.update');


// ----------------------------- rooms -----------------------------//



});
Route::get('/reservation-1/{id}', [ReservationController::class, 'reservation1'])->middleware('auth')->name('reservation1');
Route::get('/reservation-2/{id}', [ReservationController::class, 'reservation2'])->middleware('auth')->name('reservation2');
Route::get('/reservation-3', [ReservationController::class, 'reservation3'])->middleware('auth')->name('reservation3');


// Route::get('7up',function(){
//     return '7up';
// });
// Route::get('chivas',function(){
//     return 'chivas';
// })->middleware('dob');


// Route::prefix('client')->name('client.')->group(function(){
//     // Route::get('user',[UserController::class,'index'])->name('user.list');;
//     // Route::get('product_categories',[ProductCategoryController::class,'index'])->name('product_category.list');
//     // Route::get('product_categories/add',[ProductCategoryController::class,'add'])->name('product_category.add');;
//     // Route::post('product_categories/store', [ProductCategoryController::class, 'store'])->name('product_category.store');
//     // Route::get('product_categories/{id}',[ProductCategoryController::class,'detail'])->name('product_category.detail');;
//     // Route::post('product_categories/update/{id}',[ProductCategoryController::class,'update'])->name('product_category.update');;
//     // Route::get('product_categories/destroy/{id}',[ProductCategoryController::class,'destroy'])->name('product_category.destroy');;


//     //Product

//     Route::resource('product',ClientProductController::class);
//     Route::post('product/create/slug',[ClientProductController::class,'createSlug'])->name('product.create.slug');
//     Route::post('product/ckediter-upload-image',[ClientProductController::class,'uploadImage'])->name('product.ckedit.upload.image');
// });
Route::get('menu', [HomeController::class, 'allProduct'])->name('product.all');

Route::get('foods', [HomeController::class, 'index'])->name('product.food');
Route::get('drinks', [HomeController::class, 'index2'])->name('product.drink');



Route::middleware('auth')->group(function(){

    Route::get('add-to-cart/{product}', [CartController::class, 'addToCart'])->name('product.add-to-cart');
    Route::get('delete-item-in-cart/{product}', [CartController::class, 'deleteItem'])->name('product.delete-item-in-cart');
    Route::get('product/update-item-in-cart/{product}/{qty?}', [CartController::class, 'updateItem'])->name('product.update-item-in-cart');
    Route::get('product/delete-item-in-cart', [CartController::class, 'emptyCart'])->name('product.deleteall-item-in-cart');
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('cart',[CartController::class,'index'])->name('product.cart');
    Route::post('placeorder',[OrderController::class, 'placeOrder'])->name('place-order');
    Route::get('vnpay-callback', [OrderController::class, 'vnpayCallback'])->name('vnpay-callback');
});
Route::get('check', function(){
    dd(session()->get('cart'));
});

Route::get('google-callback', [GoogleController::class, 'callback'])->name('google-callback');
Route::get('google-redirect', [GoogleController::class, 'redirect'])->name('google-redirect');

// Route::get('send-mail',function(){
//    Mail::to('hoang19992212@gmail.com')->send(new MailToCustomer());
// });
Route::get('send-sms',function(){
    $sid = env('TWILIO_ACCOUNTSID '); // Your Account SID from www.twilio.com/console
    $token = env('TWILIO_AUTHTOKEN'); // Your Auth Token from www.twilio.com/console

    $client = new Twilio\Rest\Client($sid, $token);
    $message = $client->messages->create(
      '+84374509271', // Text this number
      [
        'from' => env('TWILIO_PHONENUMBER'), // From a valid Twilio number
        'body' => 'Hello from Twilio!'
      ]
    );
});
Route::get('/', [HomeController::class, 'home1'])->name('home');
Route::get('bookingintro', [HomeController::class, 'home1'])->name('home');
Route::get('bookingbox', [HomeController::class, 'home2']);
Route::get('roomsintro', [HomeController::class, 'home3']);
Route::get('rooms-category', [HomeController::class, 'roomCategory']);
Route::post('checkout_room',[ListBookingController::class, 'checkoutRoom'])->middleware('auth')->name('checkout-room');
Route::post('checkout_booking',[CheckOutRoomController::class, 'checkoutBooking'])->middleware('auth')->name('checkout-booking');


Route::post('mail-contact',[HomeController::class, 'contact'])->name('mail-contact');

require __DIR__.'/auth.php';