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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JoinusController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('profile.index');


Route::get('/', [CategoryController::class, 'home'])->name('home');

// Route::get('/home', [CategoryController::class, 'home'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/profile', [ProfileController::class, 'show_order'])->name('profile.order');
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
    
// adminlogin for dashboard
Route::get('/adminLogin', [LoginController::class, 'dashLogin']);
Route::post('/adminLogin', [LoginController::class, 'loginPost'])->name('adminLogin');
// Route::get('/home', [AdminController::class, 'adminIndex']);

// adminLogout
// Route::get('/home', [AdminController::class, 'adminIndex']);
Route::get('/adminLogout', [LoginController::class, 'adminLogout'])->name('adminLogout');

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

// Route::get('/joinusform',  function () {
//     return view('website.joinus');
// })->name('joinusform');

// Route::get('/joinus/create', [JoinusController::class , 'create'])->name('joinusCreate');
// Route::post('/joinus', [JoinusController::class , 'store'])->name('joinus');

Route::controller(EmailController::class)->group(function () {
    Route::post('send-email-to-all-users', 'sendEmailToAllUsers');
    Route::get('send-email', 'index');
});

Route::get('/about', function () {
    return view('website.aboutus');
})->name('about'); 

Route::get('/cartpage', function () {
    return view('website.cart');
})->name('cartpage');




Route::post('/productdetail/add/{idcart}', [SingleproductController::class,'add_cart'])->name('addcart');
Route::get('/productdetail/{id}', [SingleproductController::class,'show_product'])->name('detail');

Route::get('/cartweb', [CartController::class , 'back_cart'])->name('cartweb');

// Route::post('/checkout', [checkoutController::class, 'store'])->name('checkout');
Route::post('reviews', [ReviewController::class,'store'])->name('reviews.store');
// Route::delete('checkout/product/{id}', [CheckoutController::class, 'destroyProduct'])->name('checkout.destroyProduct');

// Route::get('/contact', [ContactController::class])->name('contact');



// Crud for Dashboard Routes
Route::resource('user', UserController::class)->middleware(['admin']);
Route::resource('contact', ContactController::class)->middleware(['admin']);
Route::resource('admin', AdminController::class);
Route::resource('cart', CartController::class)->middleware(['admin']);
Route::resource('checkout', checkoutController::class)->middleware(['admin']);
Route::resource('directory', DirectoryController::class)->middleware(['admin']);
Route::resource('floor', FloorController::class)->middleware(['admin']);
Route::resource('order', OrderController::class)->middleware(['admin']);
Route::resource('payment', PaymentController::class)->middleware(['admin']);
Route::resource('product', ProductController::class)->middleware(['admin']);
Route::resource('review', ReviewController::class)->middleware(['admin']);
Route::resource('shop', ShopController::class)->middleware(['admin']);
Route::resource('category', CategoryController::class);
Route::resource('singleproduct', SingleproductController::class);
Route::resource('dashboard', dashhome::class)->middleware(['admin']);
Route::resource('joinus', JoinusController::class);





