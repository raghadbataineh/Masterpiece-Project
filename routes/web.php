<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\SingleproductController;
use App\Http\Controllers\dashhome;

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
})->middleware(['auth', 'verified'])->name('profile.index');



// Route::get('/home', [CategoryController::class, 'home'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// login
Route::get('login', function () {
    return view('auth.login');
})->name('login');



// signup
Route::get('signup', function () {
    return view('auth.register');
})->name('signup');


//logout
Route::get('logout',[UserController ::class,'logout'])->name('logout');
    
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


// Route::get('/home', function () {
//     return view('website.home');

// })->name('home');

Route::get('/home', [CategoryController::class, 'home'])->name('home');


Route::get('/contact', function () {
    return view('website.contactus');
})->name('contact');

// Route::get('/floors', function () {
//     return view('website.directory');
// })->name('directory');

Route::get('/floors', [FloorController::class, 'show'])->name('directory');

Route::get('/categories',  function () {
    return view('website.categories');
})->name('categories');

Route::get('/singlepage',  function () {
    return view('website.single page');
})->name('singlepage');

Route::get('/ordermenue',  function () {
    return view('website.ordermenue');
})->name('ordermenue');

// Route::get('/checkout',  function () {
//     return view('website.popupCheckout');
// })->name('checkout');








Route::get('/about', function () {
    return view('website.aboutus');
})->name('about'); 

Route::get('/cartpage', function () {
    return view('website.cart');
})->name('cartpage');



Route::post('/productdetail/add/{idcart}', [SingleproductController::class,'add_cart'])->name('addcart');
Route::get('/productdetail/{id}', [SingleproductController::class,'show_product'])->name('detail');

Route::get('/cartweb', [CartController::class , 'back_cart'])->name('cartweb');

Route::post('/checkout', [checkoutController::class, 'store'])->name('checkout');
Route::post('reviews', [ReviewController::class,'store'])->name('reviews.store');
// Route::get('reviews', [ReviewController::class,'show']);



// Crud for Dashboard Routes
Route::resource('user', UserController::class);
Route::resource('admin', AdminController::class);
Route::resource('cart', CartController::class);
Route::resource('directory', DirectoryController::class);
Route::resource('floor', FloorController::class);
Route::resource('order', OrderController::class);
Route::resource('payment', PaymentController::class);
Route::resource('product', ProductController::class);
Route::resource('review', ReviewController::class);
Route::resource('shop', ShopController::class);
Route::resource('category', CategoryController::class);
Route::resource('singleproduct', SingleproductController::class);
Route::resource('dashboard', dashhome::class);





