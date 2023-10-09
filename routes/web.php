<?php

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
    return view('dashboard/welcome-dashboard');
});


// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/categories', 'CategoriesController@index')->name('categories');
// Route::get('/about', 'AboutController@index')->name('about');
// Route::get('/contacts', 'ContactsController@index')->name('contacts');

// Route::get('/home', function () {
//     return view('website.home');

// })->name('home');

Route::get('/home', [CategoryController::class, 'home'])->name('home');



Route::get('/contact', function () {
    return view('website.contactus');
})->name('contact');

Route::get('/floors', function () {
    return view('website.directory');
})->name('directory');


Route::get('/categories',  function () {
    return view('website.categories');
})->name('categories');

Route::get('/singlepage',  function () {
    return view('website.single page');
})->name('singlepage');

Route::get('/ordermenue',  function () {
    return view('website.ordermenue');
})->name('ordermenue');

Route::get('/singleproduct',  function () {
    return view('website.singleproduct');
})->name('singleproduct');

// Route::get('/addtocart',  function () {
//     return view('website.cart');
// })->name('cart');



Route::get('/about', function () {
    return view('website.aboutus');
})->name('about');

Route::get('/cartpage', function () {
    return view('website.cart');
})->name('cartpage');




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
Route::resource('dashboard', dashhome::class);

